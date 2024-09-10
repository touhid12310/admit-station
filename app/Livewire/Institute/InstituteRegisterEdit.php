<?php

namespace App\Livewire\Institute;

use App\Models\Institute;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

#[Title('Institute Register Edit')]
class InstituteRegisterEdit extends Component
{
    use WithFileUploads;
    public $institute_id;

    public $name;
    public $mobile_no;
    public $email;
    public $institute_type;
    public $E_year;
    public $country;
    public $city;
    public $address;
    public $description;
    public $pdf;
    public $logo;
    public $thumb_img;
    
    public function mount($id)
    {
        $institute = Institute::find($id);
        if (!$institute) {
            return redirect()->route('institute-register');
        }
        $this->institute_id = $id;
        $this->name = $institute->name;
        $this->mobile_no = $institute->mobile_no;
        $this->email = $institute->email;
        $this->institute_type = $institute->institute_type;
        $this->E_year = $institute->E_year;
        $this->country = $institute->country;
        $this->city = $institute->city;
        $this->address = $institute->address;
        $this->description = $institute->description;
        $this->logo = $institute->logo;
        $this->thumb_img = $institute->thumb_img;

        $this->pdf =$institute->pdf;
    }       

    public function update()
    {
        
        $data = $this->validate([
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


        $institute = Institute::find($this->institute_id);
        $institute->name = $this->name;
        $institute->mobile_no = $this->mobile_no;
        $institute->email = $this->email;
        $institute->institute_type = $this->institute_type;
        $institute->E_year = $this->E_year;
        $institute->country = $this->country;
        $institute->city = $this->city;
        $institute->address = $this->address;
        $institute->description = $this->description;
        if(@$this->pdf){
            $institute->pdf = $this->pdf->store('uploads/institute/pdf', 'real_public');
        }
        

        $institute->save();
    

        
        $this->dispatch('swal', [
            'title' => 'Institute Register Updated successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);

        return redirect()->route('institute.register');
    }
    function updatedLogo()
    {

        $this->validate([
            'logo' => 'image|max:1024', // 1MB Max
        ]);

        $logo_img_Path = $this->logo->store('uploads/institute/logo', 'real_public');
        $institute = Institute::where('id', $this->institute_id)->update([
            'logo' => $logo_img_Path
        ]);

        $this->dispatch('swal', [
            'title' => 'Logo updated successfully.',
            'icon' => 'success',
        ]);

        return redirect()->route('institute.register-edit', $this->institute_id);
    }
    function updatedThumbImg()
    {

        $this->validate([
            'thumb_img' => 'image|max:1024', // 1MB Max
        ]);

        $thumb_img_Path = $this->thumb_img->store('uploads/institute/thumb_img', 'real_public');
        $institute = Institute::where('id', $this->institute_id)->update([
            'thumb_img' => $thumb_img_Path
        ]);

        $this->dispatch('swal', [
            'title' => 'Institute Images updated successfully.',
            'icon' => 'success',
        ]);
        return redirect()->route('institute.register-edit', $this->institute_id);
    }
    
    
    public function delete($id)
    {
        $institute=Institute::find($id);
        $institute->delete();
        $this->dispatch('swal', [
            'title' => 'Institute Register Deleted Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
        return redirect()->route('institute.register');
    }
    public function render()
    {
        return view('livewire.institute.institute-register-edit');
    }
}
