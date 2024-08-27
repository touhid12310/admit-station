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

   
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'email',
            'phone_no' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'user_type' => $this->user_type,
            'password' => Hash::make($this->password),
        ]);

        if ($this->user_type === 'student') {
            auth()->login($user);
            return redirect()->route('student-dashboard');
        }else{
            
            $this->dispatch('swal', [
                'title' => 'Apply for Institute Register Successfully.',
                'icon' => 'success',
                'iconColor' => 'blue',
            ]);
            return redirect()->route('login');
        }

       
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
