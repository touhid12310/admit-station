<?php

namespace App\Livewire\Institute;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
#[Title('Institute Profile Setting')]
class InstituteProfileSetting extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone_no;
    public $occupation;
    public $bio;
    public $photo;
    public $cover_photo;

    public $cartificates = [];
    
    public function mount()
    {
        $user = auth()->user();

        $this->name = $user ? $user->name : null;
        $this->email = $user ? $user->email : null;
        $this->phone_no = $user ? $user->phone_no : null;
        $this->occupation = $user ? $user->occupation : null;
        $this->bio = $user ? $user->bio : null;
        $this->photo = $user ? $user->photo : null;
        $this->cover_photo = $user ? $user->cover_photo : null;
    }

    public function update(){
    
        User::where('id', auth()->user()->id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'occupation' => $this->occupation,
            'bio' => $this->bio,
        ]);
      
        $this->dispatch('swal', [
            'title' => 'Update Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }

    function updatedPhoto()
    {

        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $upload = $this->photo->store('uploads/Users', 'real_public');
        $user = User::where('id', auth()->user()->id)->update([
            'photo' => $upload
        ]);

        $this->dispatch('swal', [
            'title' => 'Photo updated successfully.',
            'icon' => 'success',
        ]);
    }
    
    function updatedCoverPhoto()
    {

        $this->validate([
            'cover_photo' => 'image|max:1024', // 1MB Max
        ]);

        $cover_upload = $this->cover_photo->store('uploads/Users', 'real_public');
        $user = User::where('id', auth()->user()->id)->update([
            'cover_photo' => $cover_upload
        ]);

        $this->dispatch('swal', [
            'title' => 'Cover Photo updated successfully.',
            'icon' => 'success',
        ]);
    }
    public function render()
    {
        return view('livewire.institute.institute-profile-setting');
    }
}
