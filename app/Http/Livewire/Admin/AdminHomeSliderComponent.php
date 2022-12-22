<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class AdminHomeSliderComponent extends Component
{
    public $slide_id;

    use LivewireAlert;

    public function deleteslide(){
        $slide = HomeSlider::find($this->slide_id);
        $slide->delete();
        $this->alert('success','Slider has been delete successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect('/admin/slider')->back();   
         }
    public function render()
    {
        $slides = HomeSlider::orderBy('created_at','DESC')->get();  
        return view('livewire.admin.admin-home-slider-component',['slides'=>$slides]);
    }
}
