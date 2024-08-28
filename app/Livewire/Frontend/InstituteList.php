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


        // if ($this->search && $this->selected_schools && $this->selected_colleges && $this->selected_universitis) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->where('vendors_types', 'School')
        //         ->where('vendors_types', 'College')
        //         ->where('vendors_types', 'University')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_schools && $this->selected_colleges) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'School')
        //         ->orWhere('vendors_types', 'College')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_colleges && $this->selected_universitis) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'College')
        //         ->orWhere('vendors_types', 'University')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_schools && $this->selected_universitis) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'School')
        //         ->orWhere('vendors_types', 'University')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_universitis) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'University')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_colleges) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'College')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search && $this->selected_schools) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orWhere('vendors_types', 'School')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_schools && $this->selected_colleges && $this->selected_universitis) {
        //     $vendors = Vendor::where('vendors_types', 'School')->orWhere('vendors_types', 'College')->orWhere('vendors_types', 'University')->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_colleges && $this->selected_universitis) {
        //     $vendors = Vendor::where('vendors_types', 'College')->orWhere('vendors_types', 'University')->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_schools && $this->selected_universitis) {
        //     $vendors = Vendor::where('vendors_types', 'School')->orWhere('vendors_types', 'University')->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_schools && $this->selected_colleges) {
        //     $vendors = Vendor::where('vendors_types', 'School')->orWhere('vendors_types', 'College')->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_schools) {
        //     $vendors = Vendor::where('vendors_types', 'School')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_colleges) {
        //     $vendors = Vendor::where('vendors_types', 'College')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->selected_universitis) {
        //     $vendors = Vendor::where('vendors_types', 'University')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } elseif ($this->search) {
        //     $vendors = Vendor::where('name', 'like', '%' . $this->search . '%')
        //         ->orWhere('mobile_no', 'like', '%' . $this->search . '%')
        //         ->orWhere('address', 'like', '%' . $this->search . '%')
        //         ->orWhere('country', 'like', '%' . $this->search . '%')
        //         ->orWhere('city', 'like', '%' . $this->search . '%')
        //         ->orderBy('id', 'desc')->paginate($this->rows);
        // } else {
        //     $vendors = Vendor::orderBy('id', 'desc')->paginate($this->rows);
        // }


            $Institutes = Institute::orderBy('id', 'desc')->paginate($this->rows);

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
