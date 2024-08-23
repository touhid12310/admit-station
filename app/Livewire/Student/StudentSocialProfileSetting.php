<?php

namespace App\Livewire\Student;

use App\Models\UserSocialProfiles;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Social-Profile-Setting')]
class StudentSocialProfileSetting extends Component
{
    public $facebook;
    public $twitter;
    public $linkedin;
    public $website;
    public $github;

    public function save(){

        $this->validate([
            'facebook'  => 'required',
            'twitter'  => 'sometimes',
            'linkedin'  => 'sometimes',
            'website'  => 'sometimes',
            'github'  => 'sometimes',
        ]);

        UserSocialProfiles::updateOrCreate(
            ['user_id' => Auth::user()->id],
            [
                'facebook'  => $this->facebook,
                'twitter'   => $this->twitter,
                'linkedin'  => $this->linkedin,
                'website'   => $this->website,
                'github'    => $this->github,
            ]
        );

        $this->dispatch('swal', [
            'title' => 'Social Account Add Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }

    public function render()
    {
        return view('livewire.student.student-social-profile-setting');
    }
}
