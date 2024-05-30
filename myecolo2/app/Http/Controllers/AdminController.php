<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use constGuards;
use constDefaults;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class AdminController extends Controller{

    public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_email, FILTER_VALIDATE_EMAIL) ? 'email' : '';
            $request->validate([
                'login_email' => 'required|email|exists:admins,email',
                'password' => 'required|min:5|max:25'
            ],[
                'login_email.required' => 'L\'adresse e-mail est requise',
                'login_email.email' => 'L\'adresse e-mail est invalide',
                'login_email.exists' => 'L\'adresse e-mail n\'existe pas',
                'password.required' => 'Le mot de passe est requis',
            ]);

        $creds= array(
            $fieldType => $request->login_email,
            'password' => $request->password
        );

        if( Auth::guard('admin')-> attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            session()->flash('fail','Identifiants incorrects');
            return redirect()->route('admin.login');
        }
    }

    public function logoutHandler(Request $request){
        Auth::guard('admin')->logout();
        session()->flash('fail','Vous êtes déconnecté');
        return redirect()->route('admin.login');
    }

    public function sendPasswordResetLink(Request $request){
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ],[
            'email.required' => 'L\'adresse e-mail est requise',
            'email.email' => 'L\'adresse e-mail est invalide',
            'email.exists' => 'L\'adresse e-mail n\'existe pas'
        ]);

        //get admin details
        $admin = Admin::where('email', $request->email)->first();

        //Generate token
        $token = base64_encode(Str::random(64));

        //Check if there is an existing reset password token
        $oldToken = DB::table('password_reset_tokens')
                        ->where(['email'=>$request->email, 'guard' =>constGuards:: ADMIN])
                        ->first();

        if($oldToken){
            //Update token
            DB::table('password_reset_tokens')
            ->where(['email' => $request->email, 'guard' =>constGuards:: ADMIN])
            ->update([
            'token'=>$token,
            'created_at'=>Carbon::now()
            ]);
        }else{
            //Add new token
            DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'guard' =>constGuards:: ADMIN,
            'token'=>$token,
            'created_at'=>Carbon::now()
            ]);
        }

        $actionLink = route('admin.reset-password', ['token'=>$token, 'email'=>$request->email]);

        $data = array(
            'actionLink' => $actionLink,
            'admin' => $admin
        );

        $mail_body = view('email-templates.admin-forgot-email-template', $data)->render();

        $mailConfig = array(

            'mail_from_email' => env('EMAIL_FROM_ADDRESS'),
            'mail_from_name' => env('EMAIL_FROM_NAME'),
            'mail_recipient_email' => $admin -> email,
            'mail_recipient_name' => $admin -> first_name . ' ' . $admin -> last_name,
            'mail_subject' => 'Réinitialisez votre mot de passe',
            'mail_body' => $mail_body
        );

        if (sendEmail ($mailConfig)){
        session()->flash('success', 'Lien de réinitialisation du mot de passe envoyé à votre adresse e-mail');
        return redirect()->route('admin.forgot-password');
        }else{
        session()->flash('fail', 'Quelque chose s\'est mal passé');
        return redirect()->route('admin.forgot-password');
        }
    }
}
