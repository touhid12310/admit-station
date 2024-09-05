<?php

namespace App\Livewire\Frontend;

use App\Models\Agent;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Become-a-Agent | Admin Station')]
class BecomeAAgent extends Component
{
    public $full_name;
    public $phone_number;
    public $email;
    public $bio;

    public function applyForAgent()
    {

        $agent = $this->validate([
            'full_name'     => 'required',
            'phone_number'  => 'required',
            'email'         => 'email | unique:agents',
            'bio'           => 'required',
        ]);

        Agent::create($agent);

        $this->dispatch('swal', [
            'title' => 'Apply  for an Agent Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }
    public function render()
    {
        seo()
            ->title('Become a Agent | Admit-Station')
            ->description("Join our network of professional agents and help students connect with top-ranked schools and universities worldwide. Become an agent today and start guiding students towards their educational dreams.")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url()->current())
            ->twitter();

        return view('livewire.frontend.become-a-agent');
    }
}
