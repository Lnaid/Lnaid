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
use File;

class StudentController extends Controller
{
    //
    public function overview(){
    	$data['title'] = 'Overview';

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

    }

    public function chatThreadReply(Request $request, $id){

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

            if(File::exists(public_path('uploads/profile'.$user->profile_photo_path))){
                File::delete(public_path('uploads/profile'.$user->profile_photo_path));
            }

            $pp = time().'_'.Auth::user()->username;
            $filepath = $fileName."_profile_picture".$request->transcript->extension();
            $request->transcript->move(public_path('uploads/profile'), $filepath);

            $user->profile_photo_path = $filepath;
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

            $user = time().'_'.Auth::user()->username;
            $filepathAdm = $fileName."_admission_letter".$request->admission_letter->extension();
            $request->admission_letter->move(public_path('uploads/verification'), $filepathAdm);

            $user = time().'_'.Auth::user()->username;
            $filepathCard = $fileName."_school_id_card".$request->idcard->extension();
            $request->idcard->move(public_path('uploads/verification'), $filepath);

            $user = time().'_'.Auth::user()->username;
            $filepathTran = $fileName."_transcript".$request->transcript->extension(); 
            $request->transcript->move(public_path('uploads/verification'), $filepath);


            $student = new StudentVerification;
            $student->student_id = $request->student_id;
            $student->user_id = Auth::user()->id;
            $student->school_id_path = $filepathCard;
            $student->admission_letter_path = $filepathAdm;
            $student->transcript_path = $filepathTran;


            $req_media = new RequestMedia;
            $req_media->request_id = $req->id;
            $req_media->name = $fileName;
            $req_media->alt = $filepath;
            $req_media->type = $request->attachment->extension(); 
            $req_media->save();

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

        $student = StudentVerification::where('user_id', Auth::user()->id)->first();
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
    	return view('dashboard.student.fund-request', $data);
    }


    public function fundRequestPost(Request $request){

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'amount' => 'required|integer',
            'currency' => 'required'
        ]);

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
            $fileName = time().'_'.Auth::user()->username;
            $filepath = $fileName.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads'), $filepath);

            $req_media = new RequestMedia;
            $req_media->request_id = $req->id;
            $req_media->name = $fileName;
            $req_media->alt = $filepath;
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
            $fileName = time().'_'.Auth::user()->username;
            $filepath = $fileName.$request->attachment->extension();  
            $request->attachment->move(public_path('uploads/request_media'), $filepath);

            $req_media = new RequestMedia;
            $req_media->request_id = $req->id;
            $req_media->name = $fileName;
            $req_media->alt = $filepath;
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

                if(File::exists(public_path('uploads/request_media'.$media->alt))){
                    File::delete(public_path('uploads/request_media'.$media->alt));
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

        return view('dashboard.student.chat', $data);
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
