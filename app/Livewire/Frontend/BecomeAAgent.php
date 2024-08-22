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

    public function applyForAgent(){

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
        return view('livewire.frontend.become-a-agent');
    }
}
