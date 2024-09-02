<?php

namespace App\Livewire\Student;

use App\Models\Review;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Reviews')]
class StudentReviews extends Component
{
    public $photo;
    public $name;
    public $reviews_content;
    public $created_at;

    public function mount()
    {   $user = auth()->user();
        $this->name = $user ? $user->name : null;
        $this->photo = $user ? $user->photo : null;
        $this->reviews_content = Review::where('user_id', auth()->id())->value('reviews_content');
        $this->created_at = Review::where('user_id', auth()->id())->value('created_at');
    }
    public function addReview()
    {
        $this->validate([
            'reviews_content' => 'required'
        ]);

        Review::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'reviews_content'  => $this->reviews_content,
            ]
        );

        $this->dispatch('swal', [
            'title' => 'Review given Successfully.',
            'icon' => 'success',
            'iconColor' => 'blue',
        ]);
    }
    public function render()
    {
        return view('livewire.student.student-reviews');
    }
}
