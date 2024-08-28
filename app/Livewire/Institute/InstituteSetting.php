<?php

namespace App\Livewire\Institute;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Institute Setting')]
class InstituteSetting extends Component
{
    public function render()
    {
        return view('livewire.institute.institute-setting');
    }
}
