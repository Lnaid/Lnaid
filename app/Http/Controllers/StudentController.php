<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Request as RequestDb;
use App\Models\RequestMedia;
use App\Models\Student;
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

    	return view('dashboard.student.verification', $data);
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
