<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login | Admit-Station')]
class Login extends Component
{

    public $email;
    public $password;

    public function save()
    {
        $this->validate([
            'email'     => 'required | email',
            'password'  => 'required|min:6',
        ]);

        // $student login normal and $institute login guard 
        if (auth()->attempt(['email' => $this->email, 'password' => bcrypt($this->password), 'user_type' => 'student'])) {
            return redirect()->route('student.dashboard');
        } elseif (auth()->guard('institute')->attempt(['email' => $this->email, 'password' => bcrypt($this->password), 'user_type' => 'institute'])) {
            return redirect()->route('institute.dashboard');
        } else {
            $this->dispatch('swal', [
                'title' => 'Invalidate Credentials.',
                'icon' => 'error',
            ]);
            return;
        }
    }
    public function render()
    {
        if (auth()->check()) {
            $this->redirect('student/dashboard');
        }elseif(auth()->guard('institute')->check()){
            $this->redirect('institute/dashboard');
        }

        return view('livewire.auth.login');
    }

    public function logout()
    {
        auth()->logout();
        auth()->guard('institute')->logout();
        return redirect('/');
    }
}
