<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{

    public function loginHandler(Request $request)
    {
        $fieldType = filter_var($request->login_email, FILTER_VALIDATE_EMAIL) ? 'email' : '';
            $request->validate([
                'login_email' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:25'
            ],[
                'login_email.required' => 'Email is required',
                'login_email.email' => 'Email is invalid',
                'login_email.exists' => 'Email does not exist',
                'password.required' => 'Password is required',
            ]);

            $creds= array(
                $fieldType => $request->login_email,
                'password' => $request->password
            );

            if( Auth::guard('admin')-> attempt($creds) ){
                return redirect()->route('admin.home');
            }else{
                session()->flash('fail','Incorrect credentials');
                return redirect()->route('admin.login');
            }
    }

    public function logoutHandler(Request $request){
        Auth::guard('admin')->logout();
        session()->flash('fail','You are logged out');
        return redirect()->route('admin.login');
    }
}
