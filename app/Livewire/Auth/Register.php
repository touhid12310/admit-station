<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register')]
class Register extends Component
{
    public $user_type = 'Student';
    public $institute_type;
    public $name;
    public $email;
    public $phone_no;
    public $password;
    public $confirmed_password;

    public $html;


    public function save()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'phone_no' => 'required',
            'password' => 'required|min:6',
            'confirmed_password' => 'required|same:password',
        ]);

        unset($data['confirmed_password']);
        $data['password'] = Hash::make($data['password']);
        $data['user_type'] = $this->user_type;
        $data['institute_type'] = $this->institute_type;
        User::create($data);
        // $this->reset('user_type', 'institute_type', 'name', 'email', 'phone_no', 'password', 'confirmed_password');
        $this->reset();
        // Dispatch the event
        $this->dispatch('swal', [
            'title' => 'Registered successfully, You can now login.',
            'icon' => 'success',
            'redirectUrl' => route('login'),
        ]);
    }


    public function render()
    {
        return view('livewire.auth.register');
    }
}
