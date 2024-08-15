<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Privacy-Policy | Admit-Station')]
class PrivacyPolicy extends Component
{
    public function render()
    {
        return view('livewire.frontend.privacy-policy');
    }
}
