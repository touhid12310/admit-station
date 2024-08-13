<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Login | Admit-Station')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }
}
