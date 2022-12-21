<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactComponent extends Component
{
    use LivewireAlert;
   
    public $name;
    public $email;
    public $telephone;
    public $subject;
    public $message;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'telephone' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        Contact::create($validatedData);

        $this->alert('success','Your message was sent successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);

        return redirect()->to('/contact');
    }



    public function render()
    {
        return view('livewire.contact-component');
    }
}
