<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

use Illuminate\Http\Request;


class AdminProfileTabs extends Component
{
    public $tab = null;
    public $tabname = 'personal_details';
    protected $queryString = ['tab'=>['keep'=>true]];
    public $first_name, $last_name, $email, $admin_id;

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

        session()->flash('message', 'Vos informations personnelles ont été mises à jour avec succès!');
        session()->flash('alert-type', 'success');

        return redirect()->route('admin.profile');
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
        ];
    }

    public function render()
    {
        return view('livewire.admin-profile-tabs');
    }
}
