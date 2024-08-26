<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Register')]
class Register extends Component
{
    public $name;
    public $email;
    public $phone_no;
    public $password;
    public $conform_password;

    public $user_type;
    public $html;

   
    public function userRegister(){

        $this->validate([
            'name'     => 'required | min:3',
            'email'         => 'email|unique:users',
            'phone_no'      => 'required | min:11',
            'password'      => 'required | min:8 ',
        ]);

        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'phone_no' => $this->phone_no,
            'password' => Hash::make($this->password)           
        ]);

        auth()->login($user);

        return redirect()->route('student-dashboard');
       
    }

    public function vendorRegister(){
        $this->validate([
            'name'     => 'required | min:3',
            'email'         => 'email|unique:users',
            'phone_no'      => 'required | min:11',
            'password'      => 'required | min:8 ',
        ]);
      
        $user = User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'phone_no' => $this->phone_no,
            'user_type' => 'institute',
            'password' => Hash::make($this->password)           
        ]);

        $this->dispatch('swal', [
            'title' => 'Apply for Institute Register Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);

       
    }

    public function render()
    {
        
        if ($this->user_type == 'student') {
            $this->html = view('livewire.auth.student-form')->render();
            
        }elseif($this->user_type == 'institute') {
            $this->html = view('livewire.auth.institute-from')->render();
        }
        return view('livewire.auth.register');
    }
}
