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
    public $Institute;

    public $name;
    public $mobile_no;
    public $email;
    public $institute_type;
    public $E_year;
    public $country;
    public $city;
    public $logo;
    public $thumb_img;
    public $pdf;
    public $description;
    public $created_at;
    public $address;

    public function mount(){
        $this->Institute = Institute::where('user_id', auth()->user()->id)->exists();
    }
    
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'institute_type' => 'required',
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

        $check = Institute::where('email', $this->email)->orWhere('user_id', auth()->user()->id)->first();
        if($check){
            $this->dispatch('swal', [
                'title' => 'You Already Applied.',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
            return;
        }
        Institute::create([
            'user_id'       => auth()->user()->id,
            'name'          => $this->name,
            'slug'          => $slug,
            'email'         => $this->email,
            'mobile_no'     => $this->mobile_no,
            'institute_type'     => $this->institute_type,
            'E_year'          => $this->E_year,
            'country'       => $this->country,
            'city'          => $this->city,
            'address'       => $this->address,
            'description'   => $this->description,
            'logo'          => @$logoPath,
            'thumb_img'     => @$thumb_img_Path,
            'pdf' => @$this->pdf->store('uploads/institute/pdf', 'real_public'),
            
        ]);

        $this->dispatch('swal', [
            'title' => 'Institute Register successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);

        return redirect()->route('institute.register');
    }
    public function render()
    {   $applys = Institute::with('user')->where('user_id', auth()->id())->get();
        return view('livewire.institute.institute-register',[
            'applys' => $applys
        ]);
    }
}
