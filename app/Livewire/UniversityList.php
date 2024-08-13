<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('University List | Admit-Station')]
class UniversityList extends Component
{
    public function render()
    {
        return view('livewire.university-list');
    }
}
