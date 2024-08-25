<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class LayoutsStudentBanner extends Component
{
    public $name;
    public $photo;
    public $cover_photo;

    public $facebook;
    public $twitter;
    public $linkedin;
    public $website;
    public $github;

    public function mount()
    {
        $user = auth()->user();
            $this->name = $user ? $user->name : null;
            $this->photo = $user ? $user->photo : null;
            $this->cover_photo = $user ? $user->cover_photo : null;

        $socialProfiles = optional($user->UserSocialProfiles);

        $this->facebook = $socialProfiles ? $socialProfiles->facebook : null;
        $this->twitter = $socialProfiles ? $socialProfiles->twitter : null;
        $this->linkedin = $socialProfiles ? $socialProfiles->linkedin : null;
        $this->website = $socialProfiles ? $socialProfiles->website : null;
        $this->github = $socialProfiles ? $socialProfiles->github : null;
    }
    
    public function render()
    {
        return view('livewire.partials.layouts-student-banner');
    }
}
