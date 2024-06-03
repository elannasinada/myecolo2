<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientProfile extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    public $name, $email, $username, $phone, $address;
    public $current_password, $new_password, $new_password_confirmation;

    protected $queryString = ['tab'=>['keep'=>true]];

    protected $listeners = [
        'updateClientProfilePage'=>'$refresh'
    ];
    public function selectTab($tab){
        $this->tab = $tab;
    }

    public function mount(){
       $this->tab = request()->tab ? request()->tab : $this->tabname;

       //POPULATE
       $client = Client::findOrFail(auth('client')->id());
       $this->name = $client->name;
       $this->email = $client->email;
       $this->username = $client->username;
       $this->phone = $client->phone;
       $this->address = $client->address;
    }

    public function updateClientPersonalDetails(){
        //Validate the form
        $this->validate([
            'name'=>'required|min:3',
            'username'=>'required|nullable|min:5|unique:clients,username,'.auth('client')->id(),
        ]);
        $client = Client::findOrFail(auth('client')->id());
        $client->name = $this->name;
        $client->username = $this->username;
        $client->address = $this->address;
        $client->phone = $this->phone;
        $update = $client->save();

        if( $update ){
            session()->flash('message', 'Vos informations personnelles ont été mises à jour avec succès!');
            session()->flash('alert-type', 'success');

            return redirect()->route('client.profile');
        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé');
            session()->flash('alert-type', 'error');

            return redirect()->route('client.profile');
        }
    }

    public function updatePassword(){
        $client = Client::findOrFail(auth('client')->id());

        //Validate the form

        $this->validate([
            'current_password'=>[
                'required',
                function($attribute, $value, $fail) use ($client){
                    if( !Hash::check($value, $client->password) ){
                        return $fail(__('Votre mot de passe actuel est incorrect'));
                    }
                }
            ],
            'new_password'=>'required|min:5|max:45|same:new_password_confirmation|different:current_password',
        ]);

        //Update password
        $update = $client->update([
            'password'=>Hash::make($this->new_password)
        ]);

        if( $update ){
           //Send email notification to client that contains new password
           $data['client'] = $client;
           $data['new_password'] = $this->new_password;

           $mail_body = view('email-templates.client-reset-email-template',$data);

           $mailConfig = array(
              'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
              'mail_from_name'=>env('EMAIL_FROM_NAME'),
              'mail_recipient_email'=>$client->email,
              'mail_recipient_name'=>$client->name,
              'mail_subject'=>'Votre mot de passe a été réinitialisé',
              'mail_body'=>$mail_body
           );

           sendEmail($mailConfig);
           $this->current_password = null;
           $this->new_password = null;
           $this->new_password_confirmation = null;
           session()->flash('message', ' Votre mot de passe a été mis à jour avec succès!');
           session()->flash('alert-type', 'success');

            return redirect()->route('client.profile');

        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé, veuillez réessayer');
            session()->flash('alert-type', 'error');

            return redirect()->route('client.profile');
        }
    }

    public function messages(){
        return [
            'name.required' => 'Le champ nom est obligatoire.',
            'name.min' => 'Le champ nom doit contenir au moins 3 caractères.',
            'username.required' => 'Le champ nom d\'utilisateur est obligatoire.',
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
        return view('livewire.client.client-profile',[
            'client'=>Client::findOrFail(auth('client')->id())
        ]);
    }
}
