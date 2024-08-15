<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Become-a-Agent | Admin Station')]
class BecomeAAgent extends Component
{
    public function render()
    {
        return view('livewire.frontend.become-a-agent');
    }
}
