<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $image;
    public $status;



    public function addHomeSlider(){
        $this->validate([
            'top_title'=> 'required',
            'title'=> 'required',
            'sub_title'=> 'required',
            'offer'=> 'required',
            'link'=> 'required',
            'image'=> 'required',
            'status'=> 'required'

        ]);
        $slide = new HomeSlider();
        $slide->top_title = $this->top_title;
        $slide->title = $this->title;
        $slide->sub_title = $this->sub_title;
        $slide->offer = $this->offer;
        $slide->link = $this->link;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('slider',$imageName);
        $slide->image = $imageName;
        $slide->status = $this->status;
        $slide->save();
        $this->alert('success','Slider has been created successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->to('/admin/slider/add');
        }

    public function render()
    {
        return view('livewire.admin.admin-add-home-slider-component');
    }
}
