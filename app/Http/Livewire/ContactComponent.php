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
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'subject' => 'required',
            'comment' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->telephone = $this->telephone;
        $contact->subject = $this->subject;
        $contact->comment = $this->comment;
        $contact->save();
        $this->alert('success','Thanks, Your message has been sent successfully!', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,
        
           ]);
    }



    public function render()
    {
        return view('livewire.contact-component');
    }
}

