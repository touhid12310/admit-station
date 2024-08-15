<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard | Profile')]
class StudentProfile extends Component
{
    public function render()
    {
        return view('livewire.student.student-profile');
    }
}
