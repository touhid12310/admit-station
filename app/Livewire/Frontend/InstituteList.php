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
        $this->country   = Institute::select('country')->where('app_status', 'Approved')->distinct()->get('country');
        if ($this->country_name) {
            $this->city = Institute::where('country', $this->country_name)->distinct()->pluck('city');
        }
        $SchoolCount     = Institute::where('institute_type', 'School')->count();
        $CollegeCount     = Institute::where('institute_type', 'College')->count();
        $UniversityCount     = Institute::where('institute_type', 'University')->count();

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
            $query->whereIn('institute_type', $vendorTypes);
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
            $Institutes = $query->where('app_status', 'Approved')->orderBy('id', 'desc')->paginate($this->rows);
        } else {
            $Institutes = Institute::where('app_status', 'Approved')->orderBy('id', 'desc')->paginate($this->rows);
        }

        $this->dispatch('picker', [
            'status' => 'yes',
            'countries' => $this->country,
            'country_name' => $this->country_name,
        ]);


        seo()
            ->title('Institute Infromation | Admit-Station')
            ->description("Explore top-ranked schools and universities worldwide for your educational journey. Discover institutes that align with your academic goals and ambitions. Start your path to success with us today.")
            ->image(url('/assets/images/hero/hero-image-1.jpg'))
            ->url(url()->current())
            ->twitter();


        return view('livewire.frontend.institute-list', [
            'institutes' => $Institutes,
            'SchoolCount' =>  $SchoolCount,
            'CollegeCount' =>  $CollegeCount,
            'UniversityCount' =>  $UniversityCount,
        ]);
    }
}
