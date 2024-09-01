<?php

namespace App\Livewire\Frontend;

use App\Models\Contact;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Contact-Us | Admit-Station')]
class ContactUs extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    public function sendMessage()
    {
        $msg = $this->validate([
            'name' => 'required',
            'email' => 'email| unique:contacts',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($msg);

        $checkEmail = Contact::where('email', $this->email)->first();
        
        $this->dispatch('swal', [
            'title' => 'Thank You For Contacting Us.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }
    public function render()
    {
        return view('livewire.frontend.contact-us');
    }
}
