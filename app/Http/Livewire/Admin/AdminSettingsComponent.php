<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class AdminSettingsComponent extends Component
{
    
    use WithFileUploads;


    public $email;
    public $phone;
    public $address;
    public $twiter;
    public $facebook;
    public $pinterest;
    public $instagram;
    public $youtube;
    public $image ;
    public $newimage;


    public function mount()
    {
        $setting = Setting::find(1);
        if($setting)
        {
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->address = $setting->address;
            $this->twiter = $setting->twiter;
            $this->facebook = $setting->facebook;
            $this->pinterest = $setting->pinterest;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
            $this->image = $setting->image;

        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'pinterest' => 'required',
            'instagram' => 'required',
            'image'=> 'required',
            'youtube' => 'required'
        ]);
    }

    public function saveSettings()
    {
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'pinterest' => 'required',
            'instagram' => 'required',
            'image'=> 'required',
            'youtube' => 'required'
        ]);

        $setting = Setting::find(1);
        if(!$setting)
        {
            $setting = new Setting();
        }
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->address = $this->address;
        $setting->twiter = $this->twiter;
        $setting->facebook = $this->facebook;
        $setting->pinterest = $this->pinterest;
        $setting->instagram = $this->instagram;
        $setting->youtube = $this->youtube;
        if($this->newimage){
            unlink('assets/imgs/theme/'.$setting->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('theme',$imageName);
            $setting->image = $imageName;
        }
        $setting->save();
        session()->flash('message','Settings has been saved successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-settings-component');
    }
}
