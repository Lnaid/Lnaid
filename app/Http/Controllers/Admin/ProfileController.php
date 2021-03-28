<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Storage;

class ProfileController extends Controller
{
	public function index(){
		$data['title'] = "Profile";
		return view('dashboard.admin.profile', $data);
	}

	public function edit(Request $request){
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
}