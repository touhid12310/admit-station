<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Profile')]
class StudentProfile extends Component
{
    public $name;
    public $email;
    public $phone_no;
    public $occupation;
    public $bio;
    public $created_at;
    public $user_type;
    public $photo;
    public $cover_photo;

    public $certificates_img = [];
    
    public function mount()
    {
        $user = auth()->user();

        $this->name = $user ? $user->name : null;
        $this->email = $user ? $user->email : null;
        $this->phone_no = $user ? $user->phone_no : null;
        $this->occupation = $user ? $user->occupation : null;
        $this->bio = $user ? $user->bio : null;
        $this->created_at = $user ? $user->created_at : null;
        $this->user_type = $user ? $user->user_type : null;
        $this->photo = $user ? $user->photo : null;
        $this->cover_photo = $user ? $user->cover_photo : null;
        $this->certificates_img = $user ? $user->certificates_img : null;
    }

    public function render()
    {
        return view('livewire.student.student-profile');
    }
}
