<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

    	return view('dashboard.student.fund-request', $data);
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
