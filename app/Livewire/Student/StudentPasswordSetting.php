<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Profile-Password')]
class StudentPasswordSetting extends Component
{
    public function render()
    {
        return view('livewire.student.student-password-setting');
    }
}
