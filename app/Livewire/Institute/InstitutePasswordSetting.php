<?php

namespace App\Livewire\Institute;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Institute Password Setting')]
class InstitutePasswordSetting extends Component
{
    public $old_password;
    public $password;
    public $password_confirmation;

    public function update()
    {
        $this->validate([
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

        $user = User::find(auth()->user()->id)->update([
            'password' => $password['password'] ?? auth()->user()->password,
            //'password' => Hash::make($this->password),
        ]);

        auth()->logout(); // Log the user out
        
        $this->dispatch('swal', [
            'title' => 'Password updated successfully.',
            'icon' => 'success',
        ]);
    }

    public function render()
    {
        return view('livewire.institute.institute-password-setting');
    }
}
