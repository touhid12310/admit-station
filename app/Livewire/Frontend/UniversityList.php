<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('University List | Admit-Station')]
class UniversityList extends Component
{
    public function render()
    {
        return view('livewire.frontend.university-list');
    }
}
