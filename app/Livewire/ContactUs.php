<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Contact-Us | Admit-Station')]
class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.contact-us');
    }
}
