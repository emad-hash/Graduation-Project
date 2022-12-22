<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;

class HomeCompo extends Component
{
    public function render()
    {
        $slides = HomeSlider::where('status',1)->get();
        return view('livewire.home-compo',['slides'=>$slides]);
    }
}
