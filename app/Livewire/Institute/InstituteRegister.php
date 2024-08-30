<?php

namespace App\Livewire\Institute;

use App\Models\Institute;
use Livewire\Attributes\Title;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;
#[Title('Institute Register')]	
class InstituteRegister extends Component
{
    use WithFileUploads;

    public $name;
    public $mobile_no;
    public $email;
    public $institute_type;
    public $EIIN;
    public $E_year;
    public $country;
    public $city;
    public $logo;
    public $thumb_img;
    public $description;
    public $address;
    
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'institute_type' => 'required',
            'EIIN' => 'required',
            'E_year' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);
        if ($this->logo) {
            $logoPath = $this->logo->store('uploads/institute/logo', 'real_public');
        }

        if ($this->thumb_img) {
            $thumb_img_Path = $this->thumb_img->store('uploads/institute/thumb_img', 'real_public');
        }
        $slug = Str::slug($this->name);
        Institute::create([
            'name'          => $this->name,
            'slug'          => $slug,
            'email'         => $this->email,
            'mobile_no'     => $this->mobile_no,
            'institute_type'     => $this->institute_type,
            'EIIN'          => $this->EIIN,
            'country'       => $this->country,
            'city'          => $this->city,
            'address'       => $this->address,
            'description'   => $this->description,
            'logo'          => @$logoPath,
            'thumb_img'     => @$thumb_img_Path,
            
        ]);

        $this->dispatch('swal', [
            'title' => 'Institute Register successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }
    public function render()
    {
        return view('livewire.institute.institute-register');
    }
}
