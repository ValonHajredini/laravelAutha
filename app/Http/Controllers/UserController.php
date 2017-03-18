<?php

namespace App\Http\Controllers;

//use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Intervention\Image\Facades\Image;
use Image;
class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.profile', array('user' => $user));
    }
    public function uploadAvatar(Request $request){

        if ($request->hasFile('avatar')){
           $avatar = $request->file('avatar');
           $filename = time().'.'.$avatar->getClientOriginalExtension();
           Image::make($avatar)->resize(300,300)->orientate()->save(public_path('/upload/avatars/'.$filename));
           $user = Auth::user();
           $user->avatar = $filename;
           $user->save();
        }



        return back();
//        redirect();
    }
}
