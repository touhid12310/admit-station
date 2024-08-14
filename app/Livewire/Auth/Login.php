<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Login | Admit-Station')]
class Login extends Component
{

    public $email;
    public $password;

    public function save(){
         
        $this->validate([
            'email'     => 'required',
            'password'  => 'required|min:6',
        ]);

        if(!auth()->attempt(['email' => $this->email, 'password' => $this->password])){
            $this->dispatch('swal', [
                'title' => 'Invalidate Credentials.',
                'icon' => 'error',
            ]);
            return;
        }

        $this->redirect('/student-dashboard');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
