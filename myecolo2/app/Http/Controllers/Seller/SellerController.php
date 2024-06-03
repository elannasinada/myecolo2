<?php

namespace App\Http\Controllers\Seller;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use App\Models\Admin;

use App\Models\VerificationToken;

use Illuminate\Support\Facades\DB;
use constGuards;
use constDefaults;
use Illuminate\Support\Facades\File;
use App\Models\Shop;


class SellerController extends Controller{

     public function login(Request $request){
        $data =[
            'pageTitle' => 'Connexion vendeur'
        ] ;
        return view('back.pages.seller.auth.login',$data);
     }  //End Method

     public function register(Request $request)
     {
        $data =[
            'pageTitle' => 'Inscription vendeur'
        ];

        return view('back.pages.seller.auth.register',$data);
     }  //End Method

     public function home(Request $request)
     {
        $data =[
            'pageTitle' => 'Tableau de bord du vendeur',
        ] ;
        return view('back.pages.seller.home',$data);
     }  //End Method

    public function createSeller(Request $request)
    {
        //Valider le formulaire d'inscription du vendeur
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:sellers',
            'password' => 'min:5|same:password_confirmation',
            'password_confirmation' => 'min:5|required_with:password|same:password',
            'autorisation' => 'required'
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
            'autorisation.required' => 'Veuillez télécharger une copie de votre autorisation commerciale',
        ]);


        $seller = new Seller();
        $seller->name = $request->name;
        $seller->username = $request->username;
        $seller->email = $request->email;
        $seller->password = Hash::make($request->password);
        $seller->autorisation = $request->autorisation;
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
        $data['seller_name'] = $request->name;
        $data['seller_email'] = $request->email;

        //Send Activation Link to admin email
        $mail_body = view('email-templates.seller-verify-template',$data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$request->email,
            'mail_recipient_name'=>$request->name,
            'mail_subject'=>'Vérification du compte vendeur',
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
                $seller->email_verified_at = Carbon::now();
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

        if( Auth::guard('seller')->attempt($creds) ){
            // return redirect()->route('seller.home');
            if( !auth('seller')->user()->verified ){
                auth('seller')->logout();
                return redirect()->route('seller.login')->with('fail','Votre compte n\'est pas vérifié. Vérifiez votre boîte e-mail et cliquez sur le lien que nous avons envoyé pour vérifier votre adresse e-mail pour le compte vendeur.');
            }else{
                return redirect()->route('seller.home');
            }
        }else{
            return redirect()->route('seller.login')->withInput()->with('fail','Mot de passe incorrect.');
        }
    } //End Method

    public function logoutHandler(Request $request){
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login')->with('fail','Vous êtes déconnecté!');
    } //End Method

    public function forgotPassword(Request $request){
       $data = [
        'pageTitle' => 'Mot de passe oublié'
       ];
       return view('back.pages.seller.auth.forgot',$data);
    } //End Method

    public function sendPasswordResetLink(Request $request){
        //Validate the form
        $request->validate([
            'email' => 'required|email|exists:sellers,email'
        ],[
            'email.required' => 'L\'adresse e-mail est requise',
            'email.email' => 'L\'adresse e-mail est invalide',
            'email.exists' => 'L\'adresse e-mail n\'existe pas'
        ]);

        //Get Seller details
        $seller = Seller::where('email',$request->email)->first();

        //Generate token
        $token = base64_encode(Str::random(64));

        //Check if there is an existing reset password token for this seller
        $oldToken = DB::table('password_reset_tokens')
                      ->where(['email'=>$seller->email,'guard'=>constGuards::SELLER])
                      ->first();

        if( $oldToken ){
            //UPDATE EXISTING TOKEN
            DB::table('password_reset_tokens')
              ->where(['email'=>$seller->email,'guard'=>constGuards::SELLER])
              ->update([
                'token'=>$token,
                'created_at'=>Carbon::now()
              ]);
        }else{
           //INSERT NEW RESET PASSWORD TOKEN
           DB::table('password_reset_tokens')
             ->insert([
                'email'=>$seller->email,
                'guard'=>constGuards::SELLER,
                'token'=>$token,
                'created_at'=>Carbon::now()
             ]);
        }

        $actionLink = route('seller.reset-password',['token'=>$token,'email'=>urlencode($seller->email)]);

        $data['actionLink'] = $actionLink;
        $data['seller'] = $seller;
        $mail_body = view('email-templates.seller-forgot-email-template',$data)->render();

        $mailConfig = array(
            'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
            'mail_from_name'=>env('EMAIL_FROM_NAME'),
            'mail_recipient_email'=>$seller->email,
            'mail_recipient_name'=>$seller->name,
            'mail_subject'=>'Modification mot de passe',
            'mail_body'=>$mail_body
        );

            if( sendEmail($mailConfig) ){
                return redirect()->route('seller.forgot-password')->with('success','Nous avons envoyé un lien de réinitialisation de mot de passe à votre adresse e-mail.');
            }else{
                return redirect()->route('seller.forgot-password')->with('fail','Quelque chose s\'est mal passé.');
            }

            } //End Method

            public function showResetForm(Request $request, $token = null){
            //Check if token exists
            $get_token = DB::table('password_reset_tokens')
                       ->where(['token'=>$token,'guard'=>constGuards::SELLER])
                       ->first();

            if( $get_token ){
               //Check if this token is not expired
               $diffMins = Carbon::createFromFormat('Y-m-d H:i:s',$get_token->created_at)->diffInMinutes(Carbon::now());

               if( $diffMins > constDefaults::tokenExpiredMinutes ){
                 //When token is older that 15 minutes
                 return redirect()->route('seller.forgot-password',['token'=>$token])->with('fail','Token expiré ! Demandez un autre lien de réinitialisation de mot de passe.');
               }else{
                return view('back.pages.seller.auth.reset')->with(['token'=>$token]);
               }
            }else{
                return redirect()->route('seller.forgot-password',['token'=>$token])->with('fail','Jeton invalide ! Demandez un autre lien de réinitialisation de mot de passe.');
            }

            } //End Method

            public function resetPasswordHandler(Request $request){
              //Validate the form
              $request->validate([
                'new_password'=>'required|min:5|max:45|required_with:confirm_new_password|same:confirm_new_password',
                'confirm_new_password'=>'required'
              ]);

              $token = DB::table('password_reset_tokens')
                 ->where(['token'=>$request->token,'guard'=>constGuards::SELLER])
                 ->first();

              //Get seller details
              $seller = Seller::where('email',$token->email)->first();

              //Update seller password
              Seller::where('email',$seller->email)->update([
             'password'=>Hash::make($request->new_password)
              ]);

              //Delete token record
              DB::table('password_reset_tokens')->where([
             'email'=>$seller->email,
             'token'=>$request->token,
             'guard'=>constGuards::SELLER
              ])->delete();

              //Send email to notify seller for new password
              $data['seller'] = $seller;
              $data['new_password'] = $request->new_password;

              $mail_body = view('email-templates.seller-reset-email-template',$data);

              $mailConfig = array(
                'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
                'mail_from_name'=>env('EMAIL_FROM_NAME'),
                'mail_recipient_email'=>$seller->email,
                'mail_recipient_name'=>$seller->name,
                'mail_subject'=>'Mot de passe modifié',
                'mail_body'=>$mail_body
              );

              sendEmail($mailConfig);
              return redirect()->route('seller.login')->with('success','Terminé ! Votre mot de passe a été modifié. Utilisez le nouveau mot de passe pour vous connecter au système.');

            } //End Method

            public function profileView(Request $request){
            $data = [
                'pageTitle'=>'Profil'
            ];
            return view('back.pages.seller.profile',$data);
            }

            public function changeProfilePicture(Request $request){

                // if (!$request->hasFile('sellerProfilePictureFile')) {
                //     return response()->json(['status' => 0, 'msg' => 'No file uploaded.']);
                // }

                // $file = $request->file('sellerProfilePictureFile');
                // if (!$file->isValid()) {
                //     return response()->json(['status' => 0, 'msg' => 'Uploaded file is not valid.']);
                // }

                $seller = Seller::findOrFail(auth('seller')->id());
                $path = 'style_assets/img/users/sellers/';
                $file = $request->file('sellerProfilePictureFile');
                $old_picture = $seller->getAttributes()['picture'];
                $file_path = $path.$old_picture;
                $filename = 'SELLER_IMG_'.rand(2,1000).$seller->id.time().uniqid().'.jpg';

                $upload = $file->move(public_path($path),$filename);

                if($upload){
                    if( $old_picture != null && File::exists(public_path($path.$old_picture)) ){
                        File::delete(public_path($path.$old_picture));
                    }
                    $seller->update(['picture'=>$filename]);
                    return response()->json(['status'=>1,'msg'=>'Votre photo de profil a été mise à jour avec succès.']);
                }else{
                    return response()->json(['status'=>0,'msg'=>'Quelque chose s\'est mal passé.']);
                }
            }


            // public function shopSettings(Request $request){
            // $seller = Seller::findOrFail(auth('seller')->id());
            // $shop = Shop::where('seller_id',$seller->id)->first();
            // $shopInfo = '';

            // if( !$shop ){
            //     //Create shop for this seller when not exists
            //     Shop::create(['seller_id'=>$seller->id]);
            //     $nshop = Shop::where('seller_id',$seller->id)->first();
            //     $shopInfo = $nshop;
            // }else{
            //     $shopInfo = $shop;
            // }

            // $data = [
            //     'pageTitle'=>'Paramètres de la boutique',
            //     'shopInfo'=>$shopInfo
            // ];

            // return view('back.pages.seller.shop-settings',$data);
            // }

            // public function shopSetup(Request $request){
            // $seller = Seller::findOrFail(auth('seller')->id());
            // $shop = Shop::where('seller_id',$seller->id)->first();
            // $old_logo_name = $shop->shop_logo;
            // $logo_name = '';
            // $path = 'images/shop/';

            // //Validate the form
            // $request->validate([
            //     'shop_name'=>'required|unique:shops,shop_name,'.$shop->id,
            //     'shop_phone'=>'required|numeric',
            //     'shop_address'=>'required',
            //     'shop_description'=>'required',
            //     'shop_logo'=>'nullable|mimes:jpeg,png,jpg'
            // ]);

            // if( $request->hasFile('shop_logo') ){
            //     $file = $request->file('shop_logo');
            //     $filename = 'SHOPLOGO_'.$seller->id.uniqid().'.'.$file->getClientOriginalExtension();

            //     $upload = $file->move(public_path($path),$filename);

            //     if( $upload ){
            //     $logo_name = $filename;

            //     //Delete an existing shop logo
            //     if( $old_logo_name != null && File::exists(public_path($path.$old_logo_name)) ){
            //         File::delete(public_path($path.$old_logo_name));
            //     }
            //     }
            // }

            // //Update Seller Shop Details
            // $data = array(
            //     'shop_name'=>$request->shop_name,
            //     'shop_phone'=>$request->shop_phone,
            //     'shop_address'=>$request->shop_address,
            //     'shop_description'=>$request->shop_description,
            //     'shop_logo'=>$logo_name != null ? $logo_name : $old_logo_name
            // );

            // $update = $shop->update($data);

            // if( $update ){
            //     return redirect()->route('seller.shop-settings')->with('success','Les informations de votre boutique ont été mises à jour.');
            // }else{
            //     return redirect()->route('seller.shop-settings')->with('fail','Erreur lors de la mise à jour des informations de votre boutique.');
            // }
            // }
}
