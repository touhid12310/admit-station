<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('404-Error')]
class Error extends Component
{
    public function render()
    {
        return view('livewire.error');
    }
}
