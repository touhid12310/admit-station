<?php

namespace App\Livewire\Frontend;

use App\Models\ApplicationHistory;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
#[Title('Institute Details | Admit-Station')]
class InstituteDetails extends Component
{

    public $user_id;
    public $vendor_id;
    
    public function apply(){
        
        ApplicationHistory::create([
            'user_id'     => Auth::user()->id,
            'vendor_id'   => $this->vendor_id,
        ]);
        
        $this->dispatch('swal', [
            'title' => 'Apply Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
        
    }
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
