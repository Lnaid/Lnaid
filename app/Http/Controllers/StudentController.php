<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Request as RequestDb;
use App\Models\RequestMedia;
use App\Models\Student;
use App\Models\School;
use App\Models\User;
use App\Models\Message;
use App\Models\MessageThread;
use App\Models\StudentVerification;
use App\Models\Currency;
use App\Models\Donation;
use File;
use Storage;
use App\Http\Traits\HasValidationScore;

class StudentController extends Controller
{
    use HasValidationScore;
    //
    public function overview(){
    	$data['title'] = 'Overview';
        $data['validate_score'] = $this->getVerificationScore(Auth::user()->id);
        $data['recommendation'] = "5";
        $data['fund_request'] = $this->getFundRequest(Auth::user()->id);
        $data['amount_received'] = $this->getAmountReceived(Auth::user()->id);
        $data['amount_requested'] = $this->getAmountRequest(Auth::user()->id);
        $data['completed_request'] = $this->getFundRequestCompleted(Auth::user()->id);
        $data['funder'] = Donation::get()->count();
    	return view('dashboard.student.index', $data);
    }


    public function profile(){
    	$data['title'] = 'Profile';

    	return view('dashboard.student.profile', $data);
    }

    public function verification(){
    	$data['title'] = 'Verification';
        $data['schools'] = School::get();
        $data['programme'] = array('Undergraduate', 'Postgraduate');
        $data['student'] = Student::where('user_id', Auth::user()->id)->first();
    	return view('dashboard.student.verification', $data);
    }

    public function chatThread($id){
        $data['chats'] = MessageThread::where('sender_id', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->get();
        $data['singleChat'] = Message::where('thread_code', $id)->get();
        $data['single'] = MessageThread::find($id);
        $data['title'] = MessageThread::find($id)->getReceiver->name;
        return view('dashboard.student.chat_thread', $data);
    }

    public function chatThreadReply(Request $request, $id){

        $request->validate([
            'content' => 'required|string',
            'receiver_id' => 'required'
        ]);

        $msg = new Message;
        $msg->sender_id = Auth::user()->id;
        $msg->receiver_id = $request->receiver_id;
        $msg->thread_code = $id;
        $msg->status = 1;
        $msg->contents = $request->content;


        if($request->hasFile('attachment')){

            $pp = time().'_'.Auth::user()->username.'_message';
            $msg->attachment = $request->file('attachment')->storeAs(
                'uploads/messaging', $pp
            );   
        }

        if($msg->save()){
            return back()->with('success', Auth::user()->username.": ".$msg->contents);
        }


    }

    public function editProfile(Request $request){

        $request->validate([
            'name' => 'required|integer',
            'username' => 'required|integer',
            'email' => 'required|string',
            'phone' => 'required|string',
            'profile_photo_path' => 'required|string',
        ]);


        $user = User::find(Auth::user()->id);
        $user->phone = $request->phone;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;

        if($request->hasFile('profile_photo_path')){

            if(Storage::exists($user->profile_photo_path)){
                Storage::delete($user->profile_photo_path);
            }

            $pp = time().'_'.Auth::user()->username.'_profile_picture';
            $user->profile_photo_path = $request->file('attachment')->storeAs(
                'uploads/profile', $pp
            );
        }

        if($user->save()){
            return back()->with('success','Profile updated successfully');
        }

    }

    public function verifyStep1(Request $request){

        $request->validate([
            'level' => 'required|integer',
            'program_duration' => 'required|integer',
            'matric_no' => 'required|string',
            'program_type' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'falculty' => 'required|string',
            'graduation_year' => 'required|date',
            'admission_year' => 'required|date',
            'dob' => 'required|date',
            'school_id' => 'required|integer',
            'schol_email' => 'required|email',
        ]);

        $student = Student::where('user_id', Auth::user()->id)->first();
        $student->school_id = $request->school_id;
        $student->matric_no = $request->matric_no;
        $student->program_type = $request->program_type;
        $student->department = $request->department;
        $student->falculty = $request->falculty;
        $student->level = $request->level;
        $student->admission_year= $request->admission_year;
        $student->graduation_year = $request->graduation_year;
        $student->program_duration = $request->program_duration;
        $student->country = $request->country;
        $student->state = $request->state;
        $student->dob = $request->dob;
        $student->schol_email = $request->schol_email;

        if($student->save()){
            return back()->with('success','Verification updated successfully');
        }

    }

    public function verifyStep2(Request $request){

        $request->validate([
            'transcript' => 'required|mimes:pdf,jpg,jpeg|max:2048',
            'idcard' => 'required|mimes:pdf,jpg,jpeg|max:2048',
            'admission_letter' => 'required|mimes:pdf,jpg,jpeg|max:2048',
        ]);

        if ($request->hasFile('admission_letter') && $request->hasFile('idcard') && $request->hasFile('transcript')) {

            $pp = time().'_'.Auth::user()->username.'_admission_letters';

            $ppp = time().'_'.Auth::user()->username.'_school_id_card';

            $pppp = time().'_'.Auth::user()->username.'_transcript';


            $student = Student::where('user_id', Auth::user()->id)->first();
            $student->student_id = $request->student_id;
            $student->user_id = Auth::user()->id;
            $student->school_id_path = $request->file('idcard')->storeAs(
                'uploads/verification', $ppp
            );
            $student->admission_letter_path = $request->file('admission_letter')->storeAs(
                'uploads/verification', $pp
            );
            $student->transcript_path = $request->file('transcript')->storeAs(
                'uploads/verification', $pppp
            );

            if($student->save()){
                return back()->with('success','Verification submitted successfully');
            } else {
                return back()->with('error','Please make sure you have submitted your credentials');   
            }

        } else {

            return back()->with('error','Error while uploading..');   
        }
    }

    public function verifyStep3(Request $request){

        $request->validate([
            'nin' => 'required|integer',
            'bvn' => 'required|integer',
        ]);

        $student = Student::where('user_id', Auth::user()->id)->first();
        $student->nin = $request->nin;
        $student->bvn = $request->bvn;

        if($student->save()){
            return back()->with('success','Verification submitted successfully');
        } else {
            return back()->with('error','Please make sure you have submitted your credentials');   
        }
        
    }

    public function fundRequest(){
    	$data['title'] = 'Fund Request';
        $data['requests'] = RequestDb::where('student_id', Auth::user()->id)->paginate(10);
        $data['currency'] = Currency::get();
    	return view('dashboard.student.fund-request', $data);
    }

    public function chatSearch(Request $request){

        $q = $request->query('s');

        $data['user'] = User::where('name','LIKE','%'.$q.'%')->orWhere('username','LIKE','%'.$q.'%')->get();
        $data['title'] = 'Search result for '.$q;
        $data['query'] = $q;
        return view('dashboard.student.chat_search', $data);
    }

    public function chatCreate($id){

        $chat = MessageThread::where('sender_id', Auth::user()->id)->orWhere('sender_id', $id)->where('receiver_id', Auth::user()->id)->orWhere('receiver_id', $id)->first();

        if($chat == null){
            $chat = new MessageThread;
            $chat->sender_id = Auth::user()->id;
            $chat->receiver_id = $id;
            $chat->save();
        }

        return redirect()->route('student.chat.thread', ['id' => $chat->id])->with('success', 'Message thread started');
    }


    public function fundRequestPost(Request $request){

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'currency' => 'required'
        ]);


        $verifyStatus = StudentVerification::where('user_id', Auth::user()->id)->first();

        if($verifyStatus == null && !$verifyStatus->bvn_verify || !$verifyStatus->nin_verify || !$verifyStatus->school_id_verify || !$verifyStatus->admission_letter_verify){
            return back()->with('error', 'Please complete your verification');
        }

        $req = new RequestDb;
        $req->title = $request->title;
        $req->amount = $request->amount;
        $req->description = $request->description;
        $req->slug = str_replace(" ", "-", strtolower($request->title));
        $req->student_id = Auth::user()->id;
        $req->currency_id = $request->currency;
        $req->school_id = Student::where('user_id', Auth::user()->id)->first()->school_id;
        $req->save();

        if ($request->hasFile('attachment')) {
            $pp = time().'_'.Auth::user()->username.'_request';

            $req_media = new RequestMedia;
            $req_media->request_id = $req->id;
            $req_media->name = $pp;
            $req_media->alt = $request->file('attachment')->storeAs(
                'uploads/request', $pp
            );
            $req_media->type = $request->attachment->extension(); 
            $req_media->save();
        }
   
        return back()->with('success','Your request has been submitted successfully');
        
    }


    public function fundRequestEdit(Request $request, RequestDb $req){

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'currency' => 'required'
        ]);

        $req->title = $request->title;
        $req->amount = $request->amount;
        $req->description = $request->description;
        $req->slug = str_replace(" ", "-", strtolower($request->title));
        $req->student_id = Auth::user()->id;
        $req->currency_id = $request->currency;
        $req->school_id = Student::where('user_id', Auth::user()->id)->first()->school_id;
        $req->save();

        if ($request->hasFile('attachment')) {
            $pp = time().'_'.Auth::user()->username.'_request';

            $req_media = new RequestMedia;
            $req_media->request_id = $req->id;
            $req_media->name = $pp;
            $req_media->alt = $request->file('attachment')->storeAs(
                'uploads/request', $pp
            );
            $req_media->type = $request->attachment->extension(); 
            $req_media->save();
        }
   
        return back()->with('success','Your request has been editted successfully');
        
    }


    public function fundRequestDelete($id){

        $req = RequestDb::find($id);

        if($req->status == 1 || $req->status == 2){
            return back()->with('error','Request cannot be deleted');
        } else {
            if(RequestMedia::where('request_id', $req->id)->exists()){
                $media = RequestMedia::where('request_id', $req->id)->first();

                if(Storage::exists($media->alt)){
                    Storage::delete($media->alt);
                }

                $media->delete();
            }

            if($req->delete()){
                return back()->with('success','Your request has been deleted successfully');
            }
        }

    }

    public function chat(){
        $data['title'] = 'Chat';
        $data['chats'] = MessageThread::where('sender_id', Auth::user()->id)->orWhere('receiver_id', Auth::user()->id)->get();
        return view('dashboard.student.chat', $data);
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
