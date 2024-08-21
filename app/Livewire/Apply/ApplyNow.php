<?php

namespace App\Livewire\Apply;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Apply | Admission')]
class ApplyNow extends Component
{
    public function render()
    {
        return view('livewire.apply.apply-now');
    }
}
