<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Dashboard | Orders')]
class StudentOrder extends Component
{
    public function render()
    {
        return view('livewire.student.student-order');
    }
}
