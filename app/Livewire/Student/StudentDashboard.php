<?php

namespace App\Livewire\Student;

use App\Models\ApplicationHistory;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Dashboard')]
class StudentDashboard extends Component
{
    public $totalApplied;
    public $totalReviews;
    public function mount()
    {
        $this->totalApplied = 0;
        $this->totalReviews = 0;
    }
    public function render()
    {   
        $this->totalApplied = ApplicationHistory::where('user_id', auth()->id())->count();

        return view('livewire.student.student-dashboard');
    }
}
