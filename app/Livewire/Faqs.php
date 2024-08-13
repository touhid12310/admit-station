<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Faqs | Admit-Station')]
class Faqs extends Component
{
    public function render()
    {
        return view('livewire.faqs');
    }
}
