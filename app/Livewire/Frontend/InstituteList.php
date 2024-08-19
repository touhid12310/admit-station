<?php

namespace App\Livewire\Frontend;

use App\Models\Vendor;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Institute List | Admit-Station')]

class InstituteList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $rows = 10;

    public function render()
    {
        if($this->search){
            $vendors = Vendor::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('mobile_no', 'like', '%'.$this->search.'%')
            ->orWhere('address', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')->paginate($this->rows);
        }else{
            $vendors = Vendor::orderBy('id', 'desc')->paginate($this->rows);
        }

        return view('livewire.frontend.institute-list',['vendors' => $vendors]);
    }
}
