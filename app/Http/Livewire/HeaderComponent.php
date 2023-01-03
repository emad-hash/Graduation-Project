<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use App\Models\Category;

class HeaderComponent extends Component
{
    public $slug;

    public function render()
    {
        $setting = Setting::find(1);
        $categories =  Category::orderBY('created_at' , 'ASC')->get();
        return view('livewire.header-component',['setting'=>$setting,'categories'=>$categories]);
    }
}
