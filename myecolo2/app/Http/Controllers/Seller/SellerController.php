<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use App\Models\VerificationToken;

class SellerController extends Controller
{
     public function login(Request $request)
     {
        $data =[
            'pageTitle' => 'Seller Login'
        ] ;
        return view('back.pages.seller.auth.login',$data);
     }  //End Method

     public function register(Request $request)
     {
        $data =[
            'pageTitle' => 'Create Seller Account'
        ] ;
        return view('back.pages.seller.auth.register',$data);
     }  //End Method

     public function home(Request $request)
     {
        $data =[
            'pageTitle' => 'Seller Dashboard'
        ] ;
        return view('back.pages.seller.home',$data);
     }  //End Method

    public function createSeller(Request $request)
    {
        //Valider le formulaire d'inscription du vendeur
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'min:5|same:password_confirmation',
            'password_confirmation' => 'min:5|required_with:password|same:password'
        ],
        [
            'first_name.required' => 'Le prénom est requis',
            'last_name.required' => 'Le nom est requis',
            'email.required' => 'L\'email est requis',
            'email.email' => 'L\'email est invalide',
            'email.unique' => 'L\'email est déjà utilisé',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit comporter au moins 5 caractères',
            'password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'password_confirmation.min' => 'La confirmation du mot de passe doit comporter au moins 5 caractères',
            'password_confirmation.same' => 'Le mot de passe et la confirmation du mot de passe doivent correspondre',
            "password.same" => "Le mot de passe et la confirmation du mot de passe doivent correspondre"
        ]);

        $seller = new Seller();
        $seller->first_name = $request->first_name;
        $seller->last_name = $request->last_name;
        $seller->email = $request->email;
        $seller->password = Hash::make($request->password);
        $saved = $seller->save();

        if( $saved ){
           //Générer un token de vérification
              $token = base64_encode(Str::random(64));

              VerificationToken::create([
                'user_type' => 'seller',
                'email' => $request->email,
                'token' => $token
        ]);

        $actionLink = route('seller.verify',['token'=>$token]);
        $data['actionLink'] = $actionLink;
        $data['seller']= $seller;
        $data['seller_first_name'] = $request->first_name;
        $data['seller_last_name'] = $request->last_name;
        $data['seller_email'] = $request->email;

        //Send Activation Link to this seller email
        $mail_body = view('email-templates.seller-verify-template',$data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$request->email,
            'mail_recipient_name'=>$request->first_name . ' ' .$request->last_name,
            'mail_subject'=>'Verify Seller Account',
            'mail_body'=>$mail_body
        );
        
        if( sendEmail($mailConfig) ){
           return redirect()->route('seller.register-success');
        }else{
             return redirect()->route('seller.register')->with('fail','Une erreur s\'est produite lors de l\'envoi du lien de vérification');
        }

        
        }else{
            return redirect()->route('seller.register')->with('fail','Une erreur s\'est produite lors de la création de votre compte');
        }
    }//End Method

    public function verifyAccount(Request $request, $token){
        $verifyToken = VerificationToken::where('token',$token)->first();

        if( !is_null($verifyToken) ){
            $seller = Seller::where('email',$verifyToken->email)->first();
            if( !$seller->verified ){
                $seller->verified = 1;
                $seller->save();

                return redirect()->route('seller.login')->with('success','Félicitations! Votre compte a été vérifié avec succès. Veuillez vous connecter et compléter votre profil vendeur');
            }else{
                return redirect()->route('seller.login')->with('info','Votre compte a déjà été vérifié. Veuillez vous connecter');
            }
        }else{
            return redirect()->route('seller.register')->with('fail','Le lien de vérification est invalide');
        
        }
    }//End Method

     public function registerSuccess(Request $request)
     {
        return view('back.pages.seller.register-success');
     }  //End Method

     public function loginHandler(Request $request){
        $fieldType = filter_var($request->login_email, FILTER_VALIDATE_EMAIL) ? 'email' : '';

            $request->validate([
                'login_email' => 'required|email|exists:sellers,email',
                'password' => 'required|min:5|max:45'
            ],[
                'login_email.required' => 'L\'email est requis',
                'login_email.email' => 'L\'email est invalide',
                'login_emai2.exists' => 'Cet email n\'est pas enregistré',
                'password.required' => 'Le mot de passe est requis',
                'password.min' => 'Le mot de passe doit comporter au moins 5 caractères',
                'password.max' => 'Le mot de passe ne doit pas dépasser 45 caractères'
            ]);

            $creds = array(
                $fieldType => $request->login_email,
                'password' => $request->password
            );

            if( Auth::guard('seller')->attempt($creds) ){
                return redirect()->route('seller.home'); 
            }else{
                return redirect()->route('seller.login')->withInput()->with('fail','Le mot de passe est incorrect');
            }
     
    }
}