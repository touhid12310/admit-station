<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('About | Admit-Station')]
class About extends Component
{
    public function render()
    {
        seo()
            ->title('About Us | Admit-Station')
            ->description("Are you looking for admission in a renowned and world’s top-ranked school or university? You've come to the right place! Our platform is your gateway to explore some of the best educational institutions globally.")
            ->image(url('/assets/assets/images/mission/thumb-1.png'))
            ->url(url()->current())
            ->twitter();
        return view('livewire.frontend.about');
    }
}
