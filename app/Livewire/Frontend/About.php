<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('About | Admit-Station')]
class About extends Component
{
    public function render()
    {
        return view('livewire.frontend.about');
    }
}
