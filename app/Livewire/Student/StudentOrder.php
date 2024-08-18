<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Orders')]
class StudentOrder extends Component
{
    public function render()
    {
        return view('livewire.student.student-order');
    }
}
