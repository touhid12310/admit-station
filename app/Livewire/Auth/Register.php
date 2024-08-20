<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Register')]
class Register extends Component
{
    public $full_name;
    public $email;
    public $phone_no;
    public $password;
    public $conform_password;

    public function userRegister(){

        $this->validate([
            'full_name'     => 'required | min:3',
            'email'         => 'email|unique:users',
            'phone_no'      => 'required | min:11',
            'password'      => 'required | min:8 ',
        ]);

        $user = User::create([
            'name'     => $this->full_name,
            'email'    => $this->email,
            'phone_no' => $this->phone_no,
            'password' => Hash::make($this->password)           
        ]);

        auth()->login($user);

        return redirect()->route('student-dashboard');
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
