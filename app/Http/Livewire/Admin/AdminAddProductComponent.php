<?php

namespace App\Http\Livewire\Admin;

use livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status ;
    public $featured;
    public $quantity;
    public $image;
    public $the_quality;
    public $encapsulation;
    public $size;
    public $category_id;
    public $scategory_id; 
    
    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }
    
    public function changeSubcategory(){
        $this->scategory_id = 0;
        }
    

   
    public function addProduct(){
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'short_description'=> 'required',
            'description'=> 'required',
            'regular_price'=> 'required',
            'sale_price'=> 'required',
            'SKU'=> 'required',
            'stock_status'=> 'required',
            'featured'=> 'required',
            'quantity'=> 'required',
            'image'=> 'required',
            'category_id'=> 'required',
            'scategory_id'=> 'required',
            'the_quality'=> 'required',
            'encapsulation'=> 'required',
            'size'=> 'required'

        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->the_quality = $this->the_quality;
        $product->encapsulation = $this->encapsulation;
        $product->size = $this->size;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        if ($this->scategory_id) {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();
        $this->alert('success','Product has been created successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->to('/admin/products/add');
    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories]);
    }
}