<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard | Student')]
class StudentDashboard extends Component
{
    public function render()
    {
        return view('livewire.student.student-dashboard');
    }
}
