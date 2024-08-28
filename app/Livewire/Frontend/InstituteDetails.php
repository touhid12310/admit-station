<?php

namespace App\Livewire\Frontend;

use App\Models\ApplicationHistory;
use App\Models\Institute;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
#[Title('Institute Details | Admit-Station')]
class InstituteDetails extends Component
{

    public $user_id;
    public $institute_id;
    
    public function apply(){
        
        if(!ApplicationHistory::where('user_id', Auth::user()->id)->where('institute_id', $this->institute_id)->exists()){
            ApplicationHistory::create([
                'user_id'     => Auth::user()->id,
                'institute_id'   => $this->institute_id,
            ]);
            
            $this->dispatch('swal', [
                'title' => 'Apply Successfully.',
                'icon' => 'success',
                'iconColor' => 'blue',
            ]);
        }else{
            $this->dispatch('swal', [
                'title' => 'You have already applied.',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
        }
        
    }
    public function mount($id){
        $vendor = Institute::find($id);
        $this->institute_id = $id;
    }

    public function render()
    {
        return view('livewire.frontend.institute-details', [
            'institute' => Institute::find($this->institute_id)
        ]);
    }
}
