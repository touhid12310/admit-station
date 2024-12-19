<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Forgot | Admit-Station')]
class ResetPass extends Component
{
    public $token;
    public $password;
    public $password_confirmation;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function render()
    {
        $user = \App\Models\User::where('forgot_password_token', $this->token)->first();
        if (!$user) {
            $this->redirect('login');
        }

        $token = $this->token;
        return view('livewire.auth.reset-pass', compact('token'));
    }


    public function updatePassword()
    {
        $this->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = \App\Models\User::where('forgot_password_token', $this->token)->first();
        if ($user) {
            $user->password = bcrypt($this->password);
            $user->forgot_password_token = null;
            $user->save();
            $this->dispatch('swal', [
                'title' => 'Password updated successfully',
                'icon' => 'success',
            ]);
            return;
        } else {
            $this->dispatch('swal', [
                'title' => 'Invalid token',
                'icon' => 'error',
            ]);
            return;
        }
   
    }
}
