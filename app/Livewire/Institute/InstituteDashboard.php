<?php

namespace App\Livewire\Institute;

use App\Models\ApplicationHistory;
use App\Models\Institute;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Institute Dashboard')]
class InstituteDashboard extends Component
{
    public $instituteAdded;
    public $totalStudentApplied;

    public function render()
    {
        $this->instituteAdded = Institute::where('user_id', auth()->id())->first();
        $this->totalStudentApplied = ApplicationHistory::where('institute_id', $this->instituteAdded->id)->count();
        return view('livewire.institute.institute-dashboard');
    }
}
