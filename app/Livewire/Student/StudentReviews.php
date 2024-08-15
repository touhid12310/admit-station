<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard | Reviews')]
class StudentReviews extends Component
{
    public function render()
    {
        return view('livewire.student.student-reviews');
    }
}
