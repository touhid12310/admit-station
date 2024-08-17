<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Home | Admit-Station')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.frontend.home');
    }
}
