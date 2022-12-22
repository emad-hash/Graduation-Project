<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeCompo extends Component
{
    public function render()
    {
        $slides = HomeSlider::where('status',1)->get();
        $lprodects = Product::orderBy('created_at','DESC')->get()->take(8);
        return view('livewire.home-compo',['slides'=>$slides,'lproducts'=>$lprodects]);
    }
}
