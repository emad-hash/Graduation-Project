<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class AdminAddCategoriesComponent extends Component
{
    use LivewireAlert;

    public $name;
    public $slug ;
    public $category_id;

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
        
        if($this->category_id)
	{
		$scategory = new Subcategory();
		$scategory->name = $this->name;
		$scategory->slug = $this->slug;
		$scategory->category_id = $this->category_id;
		$scategory->save();
	}
	else{
		$category = new Category();
		$category->name = $this->name;
		$category->slug = $this->slug;
		$category->save();
	}
        $this->alert('success','Category has been created successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->to(route('admin.category.add'));
           
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-categories-component',['categories'=>$categories]);
    }
}
