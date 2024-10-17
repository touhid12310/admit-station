<?php

namespace App\Livewire\Frontend;

use App\Models\ApplicationHistory;
use App\Models\Institute;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class InstituteDetails extends Component
{

    public $user_id;
    public $institute_id;
    public $institute;
    public $title;


    public function apply()
    {

        if (!ApplicationHistory::where('user_id', Auth::user()->id)->where('institute_id', $this->institute_id)->exists()) {
            ApplicationHistory::create([
                'user_id'     => Auth::user()->id,
                'institute_id'   => $this->institute_id,
            ]);

            $this->dispatch('swal', [
                'title' => 'Apply Successfully.',
                'icon' => 'success',
                'iconColor' => 'blue',
            ]);
        } else {
            $this->dispatch('swal', [
                'title' => 'You have already applied.',
                'icon' => 'error',
                'iconColor' => 'red',
            ]);
        }
    }
    public function mount($slug)
    {
        $this->institute = Institute::where('slug', $slug)->first();
        if ($this->institute) {
            $this->institute->description = preg_replace('/<img(.*?)>/i', '<img$1 class="img-fluid">', $this->institute->description);
        }
        $this->institute_id = $this->institute->id;
        $this->title = $this->institute->name;
    }

    public function render()
    {

        seo()
            ->title($this->institute->name . ' | Admit-Station')
            ->description(strip_tags(substr($this->institute->description, 0, 200)).'...')
            ->image(asset($this->institute->thumb_img))
            ->url(url()->current())
            ->twitter();

        return view('livewire.frontend.institute-details');
    }
}
