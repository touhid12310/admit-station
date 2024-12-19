<?php

namespace App\Livewire\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Str;

#[Title('Forgot | Admit-Station')]
class Forgot extends Component
{

    public $email;


    public function render()
    {
        return view('livewire.auth.forgot');
    }


    public function forgotPassword()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $this->email)->first();

        if (!$user) {
            $this->dispatch('swal', [
                'title' => 'Email not found',
                'icon' => 'error',
            ]);
            return;
        }

        $user->update([
            'forgot_password_token' => Str::random(32),
        ]);

        $mail = new \App\Mail\ForgotPassword($user);

        $this->dispatch('swal', [
            'title' => 'Password reset link sent to your email',
            'icon' => 'success',
        ]);
    }


}
