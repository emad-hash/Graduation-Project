<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class AdminEditCategoriesComponent extends Component
{
    use LivewireAlert;

    public $category_id;
    public $name;
    public $slug ;
    public $scategory_id;


    public function mount($category_id,$scategory_id=null){
        if($scategory_id)
        {
            $scategory = Subcategory::where('id',$scategory_id)->first();
            $this->scategory_id = $scategory->id;
            $this->category_id = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;
        }
        else
        {   
            $category = Category::find($category_id);
            $this->category_id =  $category->id;
            $this->name =  $category->name;
            $this->slug = $category->slug;
        } 

    }
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=> 'required',
            'slug'=> 'required'
        ]);
    }
    public function updateCategory(){
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required'
        ]);
        if($this->scategory_id)
	{
		$scategory = Subcategory::find($this->scategory_id);
		$scategory->name = $this->name;
		$scategory->slug = $this->slug;
		$scategory->category_id = $this->category_id;
		$scategory->save();
	}
	else
	{
		$category = Category::find($this->category_id);
		$category->name = $this->name;
		$category->slug = $this->slug;
		$category->save();
	}
        
        $this->alert('success','Category has been Update successfully', [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect('/admin/categories')->back();

    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-categories-component',['categories'=>$categories]);
    }
}