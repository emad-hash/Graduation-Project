<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $product_id;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $newimage;
    public $scategory_id; 
    public $the_quality; 
    public $encapsulation; 
    public $size; 



    public function mount($product_id){
        $product = Product::find($product_id);
        $this->product_id =  $product->id;
        $this->name =  $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->SKU = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->scategory_id;
        $this->the_quality = $product->the_quality;
        $this->encapsulation = $product->encapsulation;
        $this->size = $product->size;

    }

    public function changeSubcategory(){
        $this->scategory_id = 0;
        }

    public function generateSlug(){
        $this->slug = Str::slug($this->name);
    }

 

    public function UpdateProduct(){
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
        
        $product = Product::find($this->product_id);
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
        if($this->newimage){
            unlink('assets/imgs/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;
        if ($this->scategory_id) {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();

        $this->alert('success','Product has been Update successfully', [
            'position' => 'center',
            'timer' => 5000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->to('/admin/products');

    }

    public function render()
    {
        $categories = Category::orderBy('name','ASC')->get();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories,'scategories'=>$scategories]);
    }
}
