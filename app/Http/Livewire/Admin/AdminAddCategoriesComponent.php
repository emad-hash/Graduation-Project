<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class AdminAddCategoriesComponent extends Component
{
    use LivewireAlert;

    public $name;
    public $slug ;

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=> 'required',
            'slug'=> 'required'
        ]);
    }
    public function storeCategory(){
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required'
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        $this->alert('success','Product has been created successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect('/admin/categories/add')->back();
    }

    public function render()
    {
        return view('livewire.admin.admin-add-categories-component');
    }
}
