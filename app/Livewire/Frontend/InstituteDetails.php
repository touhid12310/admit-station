<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Institute Details | Admit-Station')]
class InstituteDetails extends Component
{
    public function render()
    {
        return view('livewire.frontend.institute-details');
    }
}
