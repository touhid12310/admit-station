<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('University Details | Admit-Station')]
class UniversityListDetails extends Component
{
    public function render()
    {
        return view('livewire.frontend.university-list-details');
    }
}
