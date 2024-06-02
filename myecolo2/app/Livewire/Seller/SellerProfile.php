<?php

namespace App\Livewire\Seller;

use Livewire\Component;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;

class SellerProfile extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    public $name, $email, $username, $phone, $address;
    public $current_password, $new_password, $new_password_confirmation;

    protected $queryString = ['tab'=>['keep'=>true]];

    protected $listeners = [
        'updateSellerProfilePage'=>'$refresh'
    ];
    public function selectTab($tab){
        $this->tab = $tab;
    }

    public function mount(){
       $this->tab = request()->tab ? request()->tab : $this->tabname;

       //POPULATE
       $seller = Seller::findOrFail(auth('seller')->id());
       $this->name = $seller->name;
       $this->email = $seller->email;
       $this->username = $seller->username;
       $this->phone = $seller->phone;
       $this->address = $seller->address;
    }

    public function updateSellerPersonalDetails(){
        //Validate the form
        $this->validate([
            'name'=>'required|min:5',
            'username'=>'nullable|min:5|unique:sellers,username,'.auth('seller')->id(),
        ]);
        $seller = Seller::findOrFail(auth('seller')->id());
        $seller->name = $this->name;
        $seller->username = $this->username;
        $seller->address = $this->address;
        $seller->phone = $this->phone;
        $update = $seller->save();

        if( $update ){
            session()->flash('message', 'Vos informations personnelles ont été mises à jour avec succès!');
            session()->flash('alert-type', 'success');

            return redirect()->route('seller.profile');
        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé');
            session()->flash('alert-type', 'error');

            return redirect()->route('seller.profile');
        }
    }

    public function updatePassword(){
        $seller = Seller::findOrFail(auth('seller')->id());

        //Validate the form

        $this->validate([
            'current_password'=>[
                'required',
                function($attribute, $value, $fail) use ($seller){
                    if( !Hash::check($value, $seller->password) ){
                        return $fail(__('Votre mot de passe actuel est incorrect'));
                    }
                }
            ],
            'new_password'=>'required|min:5|max:45|same:new_password_confirmation|different:current_password',
        ]);

        //Update password
        $update = $seller->update([
            'password'=>Hash::make($this->new_password)
        ]);

        if( $update ){
           //Send email notification to seller that contains new password
           $data['seller'] = $seller;
           $data['new_password'] = $this->new_password;

           $mail_body = view('email-templates.seller-reset-email-template',$data);

           $mailConfig = array(
              'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
              'mail_from_name'=>env('EMAIL_FROM_NAME'),
              'mail_recipient_email'=>$seller->email,
              'mail_recipient_name'=>$seller->name,
              'mail_subject'=>'Votre mot de passe a été réinitialisé',
              'mail_body'=>$mail_body
           );

           sendEmail($mailConfig);
           $this->current_password = null;
           $this->new_password = null;
           $this->new_password_confirmation = null;
           session()->flash('message', ' Votre mot de passe a été mis à jour avec succès!');
           session()->flash('alert-type', 'success');

            return redirect()->route('seller.profile');

        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé, veuillez réessayer');
            session()->flash('alert-type', 'error');

            return redirect()->route('seller.profile');
        }
    }

    public function messages(){
        return [
            'first_name.required' => 'Le champ prénom est obligatoire.',
            'first_name.min' => 'Le champ prénom doit contenir au moins 3 caractères.',
            'last_name.required' => 'Le champ nom est obligatoire.',
            'last_name.min' => 'Le champ nom doit contenir au moins 3 caractères.',
            'email.required' => 'Le champ adresse email est obligatoire.',
            'email.email' => 'Le champ adresse email doit être une adresse email valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'current_password.required' => 'Le mot de passe actuel est requis',
            'new_password.required' => 'Le mot de passe est requis',
            'new_password.min' => 'Le mot de passe doit comporter au moins 5 caractères',
            'new_password_confirmation.required' => 'La confirmation du mot de passe est requise',
            'new_password_confirmation.min' => 'La confirmation du mot de passe doit comporter au moins 5 caractères',
            'new_password_confirmation.same' => 'Le mot de passe et la confirmation du mot de passe doivent correspondre',
            'new_password.same' => 'Le mot de passe et la confirmation du mot de passe doivent correspondre',
            'new_password.different' => 'Le nouveau mot de passe doit être différent du mot de passe actuel.'

        ];
    }
    
    public function render()
    {
        return view('livewire.seller.seller-profile',[
            'seller'=>Seller::findOrFail(auth('seller')->id())
        ]);
    }
}
