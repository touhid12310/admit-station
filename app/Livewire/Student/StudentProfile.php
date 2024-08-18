<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Profile')]
class StudentProfile extends Component
{
    public function render()
    {
        return view('livewire.student.student-profile');
    }
}
