<?php

namespace App\Livewire\Student;

use App\Models\ApplicationHistory;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Title('Student | Apply')]
class StudentApplyFor extends Component
{

    public function render()
    {
        $applys = ApplicationHistory::with(['vendor', 'user'])->where('user_id', auth()->id())->get();
        //dd($applys);
        return view('livewire.student.student-order',[
            'applys' => $applys
        ]);
    }
}
