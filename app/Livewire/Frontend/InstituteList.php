<?php

namespace App\Livewire\Frontend;

use App\Models\Institute;
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
    public $country_name;
    public $city_name;
    public $country;
    public $city;
    public $pageReset = false; // Add this at the top of your component


    public function render()
    {
        $this->country   = Institute::select('country')->distinct()->get('country');

        $SchoolCount     = Institute::where('vendors_types', 'School')->count();
        $CollegeCount     = Institute::where('vendors_types', 'College')->count();
        $UniversityCount     = Institute::where('vendors_types', 'University')->count();



        if ($this->country_name) {
            $this->city = Institute::where('country', $this->country_name)->get();
        }

        $query = Institute::query();

        // Apply search filters if they are provided
        if ($this->search) {
            $query->where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
                    ->orWhere('address', 'like', '%' . $this->search . '%')
                    ->orWhere('country', 'like', '%' . $this->search . '%')
                    ->orWhere('city', 'like', '%' . $this->search . '%');
            });
        }
        
        // Apply vendors type filters for multiple selections
        $vendorTypes = [];
        if ($this->selected_schools) {
            $vendorTypes[] = 'School';
        }
        if ($this->selected_colleges) {
            $vendorTypes[] = 'College';
        }
        if ($this->selected_universitis) {
            $vendorTypes[] = 'University';
        }
        
        if (!empty($vendorTypes)) {
            $query->whereIn('vendors_types', $vendorTypes);
        }
        
        // Apply country filter if provided
        if ($this->country_name) {
            $query->where('country', $this->country_name);
        }
        
        // Apply city filter if provided
        if ($this->city_name) {
            $query->where('city', $this->city_name);
        }
        


        if ($this->search || $this->selected_schools || $this->selected_colleges || $this->selected_universitis || $this->country_name || $this->city_name) {
            $Institutes = $query->orderBy('id', 'desc')->paginate($this->rows);
            // $Institutes = $query->orderBy('id', 'desc')->toSql();
            // dd($Institutes);
        } else {
            $Institutes = Institute::orderBy('id', 'desc')->paginate($this->rows);
        }
        


        $this->dispatch('picker', [
            'status' => 'yes',
        ]);

        return view('livewire.frontend.institute-list', [
            'institutes' => $Institutes,
            'SchoolCount' =>  $SchoolCount,
            'CollegeCount' =>  $CollegeCount,
            'UniversityCount' =>  $UniversityCount,
        ]);
    }
}
