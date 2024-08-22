<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Social-Profile-Setting')]
class StudentSocialProfileSetting extends Component
{
    public function render()
    {
        return view('livewire.student.student-social-profile-setting');
    }
}
