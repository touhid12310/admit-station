<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class LayoutsStudentDashboardMenu extends Component
{
    public $name;
    public $user_type;
    public $photo;
    
    public function mount()
    {
        $user = auth()->user();

        $this->name = $user ? $user->name : null;
        $this->user_type = $user ? $user->user_type : null;
        $this->photo = $user ? $user->photo : null;
    }

    public function render()
    {
        return view('livewire.partials.layouts-student-dashboard-menu');
    }
}
