<?php

namespace App\Livewire\Frontend;

use App\Models\Vendor;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Institute Details | Admit-Station')]
class InstituteDetails extends Component
{

    public $vendor_id;

    public function mount($id){
        $vendor = Vendor::find($id);
        $this->vendor_id = $id;
    }

    public function render()
    {
        return view('livewire.frontend.institute-details', [
            'vendor' => Vendor::find($this->vendor_id)
        ]);
    }
}
