<?php

namespace App\Livewire\Student;

use App\Models\User;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
#[Title('Student | Profile-Password')]
class StudentPasswordSetting extends Component
{
    public $old_password;
    public $password;
    public $password_confirmation;

    public function update()
    {
       
        if ($this->old_password && $this->password) {
            $password = $this->validate([
                'old_password' => 'required',
                'password' => 'required|confirmed|min:6',
            ]);

            if (!Hash::check($this->old_password, auth()->user()->password)) {
                $this->dispatch('swal', [
                    'title' => 'The old password is incorrect.',
                    'icon' => 'error',
                ]);

                return;
            }
        }

        $user = User::find(auth()->user()->id)->update([
            'password' => $password['password'] ?? auth()->user()->password,
        ]);

        auth()->logout(); // Log the user out
        
        $this->dispatch('swal', [
            'title' => 'Password updated successfully.',
            'icon' => 'success',
        ]);
    }

    public function render()
    {
        return view('livewire.student.student-password-setting');
    }
}
