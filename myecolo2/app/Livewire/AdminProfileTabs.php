<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;


class AdminProfileTabs extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab'=>['keep'=>true]];
    public $first_name, $last_name, $email, $admin_id;
    public $current_password, $new_password, $new_password_confirmation;

    public function selectTab($tab){
        $this->tab = $tab;
    }

    public function mount(){
        $this->tab = request()->tab ? request()->tab : $this->tabname;

        if(Auth::guard('admin')->check()){
            $admin = Admin::findOrFail(auth()->id());
            $this->admin_id = $admin->id;
            $this->first_name = $admin->first_name;
            $this->last_name = $admin->last_name;
            $this->email = $admin->email;
        }
    }

    public function updateAdminPersonalDetails(Request $request){
        $this->validate([
            'first_name'=> 'required|min:3',
            'last_name'=> 'required|min:3',
            'email'=> 'required|email|unique:admins,email,'.$this->admin_id,
        ]);

        Admin::find($this->admin_id)
            ->update([
            'first_name'=>$this->first_name,
            'last_name'=> $this->last_name,
            'email'=>$this->email,
            ]);

            $this->dispatch('updateAdminSellerHeaderInfo');
            $this->dispatch('updateAdminInfo',[
                'adminName'=>$this->first_name.' '.$this->last_name,
                'adminEmail'=>$this->email
            ]);

            session()->flash('message', 'Vos informations personnelles ont été mises à jour avec succès!');
            session()->flash('alert-type', 'success');

            return redirect()->route('admin.profile');
    }

    public function updatePassword(){
        $this->validate([
            'current_password'=>[
                'required', function($attribute, $value, $fail){
                    if(!Hash::check($value, Admin::find(auth('admin')->id())->password)){
                        return $fail(__('Votre mot de passe actuel est incorrect'));
                    }
                }
            ],
            'new_password'=>'required|min:5|max:45|same:new_password_confirmation|different:current_password',
        ],$this->messages());

        $query = Admin::findOrFail(auth('admin')->id())->update([
            'password'=>Hash::make($this->new_password)
        ]);

        if($query){
            //Send notification
            $_admin = Admin::findOrFail($this->admin_id);
            $data = array(
                'admin'=>$_admin,
                'new_password'=>$this->new_password
            );

            $mail_body = view('email-templates.admin-reset-email-template', $data)->render();

            $mailConfig = array(
                'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
                'mail_from_name'=>env('EMAIL_FROM_NAME'),
                'mail_recipient_email'=>$_admin->email,
                'mail_recipient_name'=>$_admin->name,
                'mail_subject'=>'Votre mot de passe a été réinitialisé',
                'mail_body'=>$mail_body
            );

            sendEmail($mailConfig);

            $this->current_password = $this->new_password = $this->new_password_confirmation = null;
            session()->flash('message', 'Vos informations personnelles ont été mises à jour avec succès!');
            session()->flash('alert-type', 'success');

            return redirect()->route('admin.profile');

        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé, veuillez réessayer');
            session()->flash('alert-type', 'error');

            return redirect()->route('admin.profile');
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
        return view('livewire.admin-profile-tabs');
    }
}
