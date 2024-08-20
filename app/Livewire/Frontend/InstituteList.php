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

    public $selected_schools;
    public $selected_colleges;
    public $selected_universitis;

   

    public function render()
    {
        $SchoolCount     = Vendor::where('vendors_types', 'School')->count();
        $CollegeCount     = Vendor::where('vendors_types', 'College')->count();
        $UniversityCount     = Vendor::where('vendors_types', 'University')->count();
        if($this->search){
            $vendors = Vendor::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('mobile_no', 'like', '%'.$this->search.'%')
            ->orWhere('address', 'like', '%'.$this->search.'%')
            ->orderBy('id', 'desc')->paginate($this->rows);
        }elseif($this->selected_schools){
            $vendors = Vendor::where('vendors_types', 'School')->paginate($this->rows);
        }elseif($this->selected_colleges){
            $vendors = Vendor::where('vendors_types', 'College')->paginate($this->rows);
        }elseif($this->selected_universitis){
            $vendors = Vendor::where('vendors_types', 'University')->paginate($this->rows);
        }else{
            $vendors = Vendor::orderBy('id', 'desc')->paginate($this->rows);
        }

        return view('livewire.frontend.institute-list',[
            'vendors' => $vendors,
            'SchoolCount' =>  $SchoolCount,
            'CollegeCount' =>  $CollegeCount,
            'UniversityCount' =>  $UniversityCount
        ]);
    }
}
