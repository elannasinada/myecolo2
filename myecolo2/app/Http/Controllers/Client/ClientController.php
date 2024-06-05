<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\Admin;

use App\Models\VerificationToken;

use Illuminate\Support\Facades\DB;
use constGuards;
use constDefaults;
use Illuminate\Support\Facades\File;


class ClientController extends Controller{

     public function login(Request $request){
        $data =[
            'pageTitle' => 'Connexion client'
        ] ;
        return view('back.pages.client.auth.login',$data);
     }  //End Method

     public function register(Request $request){
        $data =[
            'pageTitle' => 'Inscription client'
        ];

        return view('back.pages.client.auth.register',$data);
     }  //End Method

     public function home(Request $request){
        $data =[
            'pageTitle' => 'MyEcolo - Acceuil',
        ];
        return view('front.pages.home',$data);
     }  //End Method

     public function shop(Request $request){
        $data =[
            'pageTitle' => 'MyEcolo - Boutique',
        ];
        return view('front.pages.shop',$data);
     }  //End Method

     public function cart(Request $request){
        $data =[
            'pageTitle' => 'MyEcolo - Panier',
        ];
        return view('front.pages.cart',$data);
     }  //End Method

    public function createClient(Request $request){
        //Valider le formulaire d'inscription du vendeur
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:clients',
            'password' => 'min:5|same:password_confirmation',
            'password_confirmation' => 'min:5|required_with:password|same:password',
        ],
        [
            'name.required' => 'Le nom est requis',
            'username.required' => 'Le nom d\'utilisateur est requis',
            'email.required' => 'L\'adresse e-mail est requise',
            'email.email' => 'L\'adresse e-mail est invalide',
            'email.unique' => 'L\'adresse e-mail existe déjà',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit comporter au moins 5 caractères',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'password_confirmation.min' => 'La confirmation du mot de passe doit comporter au moins 5 caractères',
            'password_confirmation.same' => 'Le mot de passe et la confirmation du mot de passe doivent correspondre',
            "password.same" => "Le mot de passe et la confirmation du mot de passe doivent correspondre",
        ]);


        $client = new Client();
        $client->name = $request->name;
        $client->username = $request->username;
        $client->email = $request->email;
        $client->password = Hash::make($request->password);
        $saved = $client->save();

        if( $saved ){
           //Générer un token de vérification
              $token = base64_encode(Str::random(64));

              VerificationToken::create([
                'user_type' => 'client',
                'email' => $request->email,
                'token' => $token
        ]);


        $actionLink = route('client.verify',['token'=>$token]);
        $data['actionLink'] = $actionLink;
        $data['client_name'] = $request->name;
        $data['client_email'] = $request->email;

        //Send Activation Link to admin email
        $mail_body = view('email-templates.client-verify-template',$data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$request->email,
            'mail_recipient_name'=>$request->name,
            'mail_subject'=>'Vérification du compte vendeur',
            'mail_body'=>$mail_body
        );

        if( sendEmail($mailConfig) ){
           return redirect()->route('client.register-success');
        }else{
             return redirect()->route('client.register')->with('fail','Une erreur s\'est produite lors de l\'envoi du lien de vérification');
        }


        }else{
            return redirect()->route('client.register')->with('fail','Une erreur s\'est produite lors de la création de votre compte');
        }

    }//End Method

    public function verifyAccount(Request $request, $token){
        $verifyToken = VerificationToken::where('token',$token)->first();

        if( !is_null($verifyToken) ){
            $client = Client::where('email',$verifyToken->email)->first();
            if( !$client->verified ){
                $client->verified = 1;
                $client->email_verified_at = Carbon::now();
                $client->save();

                return redirect()->route('client.login')->with('success','Félicitations! Votre compte a été vérifié avec succès. Veuillez vous connecter et compléter votre profil vendeur');
            }else{
                return redirect()->route('client.login')->with('info','Votre compte a déjà été vérifié. Veuillez vous connecter');
            }
        }else{
            return redirect()->route('client.register')->with('fail','Le lien de vérification est invalide');

        }
    }//End Method

     public function registerSuccess(Request $request){
        return view('back.pages.client.register-success');
     }  //End Method

     public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_email, FILTER_VALIDATE_EMAIL) ? 'email' : '';

        $request->validate([
            'login_email' => 'required|email|exists:clients,email',
            'password' => 'required|min:5|max:25'
        ],[
            'login_email.required' => 'L\'adresse e-mail est requise',
            'login_email.email' => 'L\'adresse e-mail est invalide',
            'login_email.exists' => 'L\'adresse e-mail n\'existe pas',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit comporter au moins 5 caractères',
            'password.max' => 'Le mot de passe ne doit pas dépasser 25 caractères'
        ]);

        $creds = array(
            $fieldType => $request->login_email,
            'password' => $request->password
        );

        if( Auth::guard('client')->attempt($creds) ){
            // return redirect()->route('client.home');
            if( !auth('client')->user()->verified ){
                auth('client')->logout();
                return redirect()->route('client.login')->with('fail','Votre compte n\'est pas vérifié. Vérifiez votre boîte e-mail et cliquez sur le lien que nous avons envoyé pour vérifier votre adresse e-mail pour le compte vendeur.');
            }else{
                return redirect()->route('client.home');
            }
        }else{
            return redirect()->route('client.login')->withInput()->with('fail','Mot de passe incorrect.');
        }
    } //End Method

    public function logoutHandler(Request $request){
        Auth::guard('client')->logout();
        return redirect()->route('client.login')->with('fail','Vous êtes déconnecté!');
    } //End Method

    public function forgotPassword(Request $request){
       $data = [
        'pageTitle' => 'Mot de passe oublié'
       ];
       return view('back.pages.client.auth.forgot',$data);
    } //End Method

    public function sendPasswordResetLink(Request $request){
        //Validate the form
        $request->validate([
            'email' => 'required|email|exists:clients,email'
        ],[
            'email.required' => 'L\'adresse e-mail est requise',
            'email.email' => 'L\'adresse e-mail est invalide',
            'email.exists' => 'L\'adresse e-mail n\'existe pas'
        ]);

        //Get client details
        $client = Client::where('email',$request->email)->first();

        //Generate token
        $token = base64_encode(Str::random(64));

        //Check if there is an existing reset password token for this client
        $oldToken = DB::table('password_reset_tokens')
                      ->where(['email'=>$client->email,'guard'=>constGuards::CLIENT])
                      ->first();

        if( $oldToken ){
            //UPDATE EXISTING TOKEN
            DB::table('password_reset_tokens')
              ->where(['email'=>$client->email,'guard'=>constGuards::CLIENT])
              ->update([
                'token'=>$token,
                'created_at'=>Carbon::now()
              ]);
        }else{
           //INSERT NEW RESET PASSWORD TOKEN
           DB::table('password_reset_tokens')
             ->insert([
                'email'=>$client->email,
                'guard'=>constGuards::CLIENT,
                'token'=>$token,
                'created_at'=>Carbon::now()
             ]);
        }

        $actionLink = route('client.reset-password',['token'=>$token,'email'=>urlencode($client->email)]);

        $data['actionLink'] = $actionLink;
        $data['client'] = $client;
        $mail_body = view('email-templates.client-forgot-email-template',$data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$client->email,
            'mail_recipient_name'=>$client->name,
            'mail_subject'=>'Modification mot de passe',
            'mail_body'=>$mail_body
        );

            if( sendEmail($mailConfig) ){
                return redirect()->route('client.forgot-password')->with('success','Nous avons envoyé un lien de réinitialisation de mot de passe à votre adresse e-mail.');
            }else{
                return redirect()->route('client.forgot-password')->with('fail','Quelque chose s\'est mal passé.');
            }

            } //End Method

            public function showResetForm(Request $request, $token = null){
            //Check if token exists
            $get_token = DB::table('password_reset_tokens')
                       ->where(['token'=>$token,'guard'=>constGuards::CLIENT])
                       ->first();

            if( $get_token ){
               //Check if this token is not expired
               $diffMins = Carbon::createFromFormat('Y-m-d H:i:s',$get_token->created_at)->diffInMinutes(Carbon::now());

               if( $diffMins > constDefaults::tokenExpiredMinutes ){
                 //When token is older that 15 minutes
                 return redirect()->route('client.forgot-password',['token'=>$token])->with('fail','Token expiré ! Demandez un autre lien de réinitialisation de mot de passe.');
               }else{
                return view('back.pages.client.auth.reset')->with(['token'=>$token]);
               }
            }else{
                return redirect()->route('client.forgot-password',['token'=>$token])->with('fail','Jeton invalide ! Demandez un autre lien de réinitialisation de mot de passe.');
            }

            } //End Method

            public function resetPasswordHandler(Request $request){
              //Validate the form
              $request->validate([
                'new_password'=>'required|min:5|max:45|required_with:confirm_new_password|same:confirm_new_password',
                'confirm_new_password'=>'required'
              ]);

              $token = DB::table('password_reset_tokens')
                 ->where(['token'=>$request->token,'guard'=>constGuards::CLIENT])
                 ->first();

              //Get client details
              $client = Client::where('email',$token->email)->first();

              //Update client password
              Client::where('email',$client->email)->update([
             'password'=>Hash::make($request->new_password)
              ]);

              //Delete token record
              DB::table('password_reset_tokens')->where([
             'email'=>$client->email,
             'token'=>$request->token,
             'guard'=>constGuards::CLIENT
              ])->delete();

              //Send email to notify client for new password
              $data['client'] = $client;
              $data['new_password'] = $request->new_password;

              $mail_body = view('email-templates.client-reset-email-template',$data);

              $mailConfig = array(
                'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
                'mail_from_name'=>env('EMAIL_FROM_NAME'),
                'mail_recipient_email'=>$client->email,
                'mail_recipient_name'=>$client->name,
                'mail_subject'=>'Mot de passe modifié',
                'mail_body'=>$mail_body
              );

              sendEmail($mailConfig);
              return redirect()->route('client.login')->with('success','Terminé ! Votre mot de passe a été modifié. Utilisez le nouveau mot de passe pour vous connecter au système.');

            } //End Method

            public function profileView(Request $request){
            $data = [
                'pageTitle'=>'Profil'
            ];
            return view('back.pages.client.profile',$data);
            }

            public function changeProfilePicture(Request $request){

                // if (!$request->hasFile('clientProfilePictureFile')) {
                //     return response()->json(['status' => 0, 'msg' => 'No file uploaded.']);
                // }

                // $file = $request->file('clientProfilePictureFile');
                // if (!$file->isValid()) {
                //     return response()->json(['status' => 0, 'msg' => 'Uploaded file is not valid.']);
                // }

                $client = Client::findOrFail(auth('client')->id());
                $path = 'style_assets/img/users/clients/';
                $file = $request->file('clientProfilePictureFile');
                $old_picture = $client->getAttributes()['picture'];
                $file_path = $path.$old_picture;
                $filename = 'CLIENT_IMG_'.rand(2,1000).$client->id.time().uniqid().'.jpg';

                $upload = $file->move(public_path($path),$filename);

                if($upload){
                    if( $old_picture != null && File::exists(public_path($path.$old_picture)) ){
                        File::delete(public_path($path.$old_picture));
                    }
                    $client->update(['picture'=>$filename]);
                    return response()->json(['status'=>1,'msg'=>'Votre photo de profil a été mise à jour avec succès.']);
                }else{
                    return response()->json(['status'=>0,'msg'=>'Quelque chose s\'est mal passé.']);
                }
            }

}

