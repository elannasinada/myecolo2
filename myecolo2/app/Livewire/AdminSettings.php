<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GeneralSetting;
use App\Models\SocialNetwork;

class AdminSettings extends Component
{
    public $tab = null;
    public $default_tab = 'general_settings';
    protected $queryString = ['tab'=>['keep'=>true]];
    public $site_name, $site_email, $site_phone, $site_meta_keywords, $site_meta_description, $site_logo, $site_favicon, $site_address;
    public $facebook_url, $twitter_url, $instagram_url, $youtube_url, $github_url, $linkedin_url;

    public function selectTab($tab){
        $this->tab = $tab;
    }

    public function mount(){
        $this->tab = request()->tab ? request()->tab : $this->default_tab;

        //Populate
        $this->site_name = get_settings()->site_name;
        $this->site_email = get_settings()->site_email;
        $this->site_phone = get_settings()->site_phone;
        $this->site_meta_keywords = get_settings()->site_meta_keywords;
        $this->site_meta_description = get_settings()->site_meta_description;

        $settings = GeneralSetting::first();
        $this->site_logo = $settings->site_logo;
        $this->site_favicon = $settings->site_favicon;

        $this->site_address = get_settings()->site_address;

        //Populate social networks
        $this->facebook_url = get_social_network()->facebook_url;
        $this->twitter_url = get_social_network()->twitter_url;
        $this->instagram_url = get_social_network()->instagram_url;
        $this->youtube_url = get_social_network()->youtube_url;
        $this->github_url = get_social_network()->github_url;
        $this->linkedin_url = get_social_network()->linkedin_url;
    }

    public function updateGeneralSettings(){
        $this->validate([
            'site_name'=>'required',
            'site_email'=>'required|email'
        ]);

        $settings = new GeneralSetting();
        $settings = $settings->first();
        $settings->site_name = $this->site_name;
        $settings->site_email = $this->site_email;
        $settings->site_phone = $this->site_phone;
        $settings->site_meta_keywords = $this->site_meta_keywords;
        $settings->site_meta_description = $this->site_meta_description;
        $settings->site_address = $this->site_address;
        $update = $settings->save();

        if( $update ){
            session()->flash('message', 'Les paramètres généraux ont été mis à jour avec succès.');
            session()->flash('alert-type', 'success');
            return redirect()->route('admin.settings');
        }else{
            session()->flash('message','Quelque chose s\'est mal passé. Réessayer');
            session()->flash('alert-type', 'error');
            return redirect()->route('admin.settings');
        }
    }

    public function updateSocialNetworks(){
        $social_network = new SocialNetwork();
        $social_network = $social_network->first();
        $social_network->facebook_url = $this->facebook_url;
        $social_network->twitter_url = $this->twitter_url;
        $social_network->instagram_url = $this->instagram_url;
        $social_network->youtube_url = $this->youtube_url;
        $social_network->github_url = $this->github_url;
        $social_network->linkedin_url = $this->linkedin_url;
        $update = $social_network->save();


        if( $update ){
            session()->flash('message', 'Les réseaux sociaux ont été mis à jour avec succès.');
            session()->flash('alert-type', 'success');
            return redirect()->route('admin.settings');
        }else{
            session()->flash('message','Quelque chose s\'est mal passé. Réessayer');
            session()->flash('alert-type', 'error');
            return redirect()->route('admin.settings');
        }
    }

    public function showToastr($type, $message){
        return $this->dispatch('showToastr',[
            'type'=>$type,
            'message'=>$message
        ]);
    }

    public function render()
    {

        return view('livewire.admin-settings', [
            'site_logo' => $this->site_logo,
            'site_favicon' => $this->site_favicon
        ]);
    }
}