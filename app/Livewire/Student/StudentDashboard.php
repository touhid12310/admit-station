<?php

namespace App\Livewire\Student;

use App\Models\ApplicationHistory;
use App\Models\Review;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Dashboard')]
class StudentDashboard extends Component
{
    public $totalApplied;
    public $totalReviews;

    public function render()
    {   
        $this->totalApplied = ApplicationHistory::where('user_id', auth()->id())->count();
        $this->totalReviews = Review::where('user_id', auth()->id())->count();
        return view('livewire.student.student-dashboard');
    }
}
