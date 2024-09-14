<?php

namespace App\Livewire\Frontend;

use App\Models\Faqs as FaqsModel;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Faqs | Admit-Station')]
class Faqs extends Component
{
    public function render()
    {
        $faqs = FaqsModel::all();
        return view('livewire.frontend.faqs', [
            'faqs' => $faqs
        ]);
    }
}
