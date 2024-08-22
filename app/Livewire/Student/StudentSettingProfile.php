<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Profile-Setting')]
class StudentSettingProfile extends Component
{
    public function render()
    {
        return view('livewire.student.student-setting-profile');
    }
}
