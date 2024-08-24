<?php

namespace App\Livewire\Student;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Student | Profile-Setting')]
class StudentSettingProfile extends Component
{

    use WithFileUploads;

    public $name;
    public $phone_no;
    public $occupation;
    public $bio;
    
    public function mount()
    {
        $user = auth()->user();

        $this->name = $user ? $user->name : null;
        $this->phone_no = $user ? $user->phone_no : null;
        $this->occupation = $user ? $user->occupation : null;
        $this->bio = $user ? $user->bio : null;
        $this->photo = $user ? $user->photo : null;
    }

    public function update(){
        
        User::where('id', auth()->user()->id)
            ->update([
                'name'       => $this->name,
                'phone_no'   => $this->phone_no,
                'occupation' => $this->occupation,
                'bio'        => $this->bio,
        ]);


        $this->dispatch('swal', [
            'title' => 'Update Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
       
    }

    public function render()
    {
        return view('livewire.student.student-setting-profile');
    }
}
