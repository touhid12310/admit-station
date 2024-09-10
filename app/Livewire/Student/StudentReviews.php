<?php

namespace App\Livewire\Student;

use App\Models\ApplicationHistory;
use App\Models\Review;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Student | Reviews')]
class StudentReviews extends Component
{
    public $reviews;
    public $institutes;
    public $institute_id;
    public $reviews_content;

    public function mount()
    {
        $this->institutes = ApplicationHistory::with('institute')->where('user_id', auth()->id())->get();
        $this->reviews = Review::where('user_id', auth()->id())->get();
    }
    public function addReview()
    {
        $this->validate([
            'institute_id' => 'required',
            'reviews_content' => 'required'
        ]);

        Review::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'institute_id' => $this->institute_id,
                'reviews_content'  => $this->reviews_content,
            ]
        );

        $this->institutes = ApplicationHistory::with('institute')->where('user_id', auth()->id())->get();
        $this->reviews = Review::where('user_id', auth()->id())->get();
        
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
