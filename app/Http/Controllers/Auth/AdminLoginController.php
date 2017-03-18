<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
    public function login(Request $request){
//        Validate data
            $this->validate($request,[
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
        $credentials = ['email' => $request->email, 'password' => $request->password];
//        Attemt to log the user in
            if(Auth::guard('admin')->attempt($credentials, $request->remember)){
//        if success redirect to the intended locatione
                return redirect()->intended(route('admin.root'));
            }else {
//        if unsuccess than ridirect back to the lkogin data
                return redirect()->back()->withInput($request->only('email','remember'));
            }



        return true;
    }
}
