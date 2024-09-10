<?php

namespace App\Livewire\Student;

use Illuminate\Support\Facades\Storage;
use App\Models\User; // Assuming User model is in App directory
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Student | Profile-Setting')]
class StudentSettingProfile extends Component
{

    use WithFileUploads;
    public $user_id;
    public $name;
    public $email;
    public $phone_no;
    public $occupation;
    public $bio;
    public $photo;
    public $cover_photo;

    public $certificates_img = [];
    
    public function mount()
    {
        $user = auth()->user();

        $this->user_id = $user ? $user->id : null;
        $this->name = $user ? $user->name : null;
        $this->email = $user ? $user->email : null;
        $this->phone_no = $user ? $user->phone_no : null;
        $this->occupation = $user ? $user->occupation : null;
        $this->bio = $user ? $user->bio : null;
        $this->photo = $user ? $user->photo : null;
        $this->cover_photo = $user ? $user->cover_photo : null;
        $this->certificates_img = $user ? $user->certificates_img : null;
    }

    public function update(){
    
        User::where('id', $this->user_id)->update([
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
        $user = User::where('id', $this->user_id)->update([
            'photo' => $upload
        ]);

        $this->dispatch('swal', [
            'title' => 'Photo updated successfully.',
            'icon' => 'success',
        ]);
        return redirect()->route('student-setting-profile', $this->user_id);
    }
    
    function updatedCoverPhoto()
    {

        $this->validate([
            'cover_photo' => 'image|max:1024', // 1MB Max
        ]);

        $cover_upload = $this->cover_photo->store('uploads/Users', 'real_public');
        $user = User::where('id', $this->user_id)->update([
            'cover_photo' => $cover_upload
        ]);

        $this->dispatch('swal', [
            'title' => 'Cover Photo updated successfully.',
            'icon' => 'success',
        ]);
        return redirect()->route('student-setting-profile', $this->user_id);
    }

    
    public function updatedCertificatesImg()
    {

        $this->validate([
            'certificates_img.*' => 'image|max:2048', // 2MB Max
        ]);

        $certificates_upload = [];
        foreach ($this->certificates_img as $img) {
            $certificates_upload[] = $img->store('uploads/Users/certificates_img', 'real_public');
        }
        $user = User::where('id', $this->user_id)->update([
            'certificates_img' => json_encode($certificates_upload)
        ]);

        $this->dispatch('swal', [
            'title' => 'Certificates updated successfully.',
            'icon' => 'success',
        ]);
        return redirect()->route('student-setting-profile', $this->user_id);
    }
    
    public function render()
    {
        return view('livewire.student.student-setting-profile');
    }
}
