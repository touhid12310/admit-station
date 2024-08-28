<?php

namespace App\Livewire\Institute;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Institute Dashboard')]
class InstituteDashboard extends Component
{
    public function render()
    {
        return view('livewire.institute.institute-dashboard');
    }
}
