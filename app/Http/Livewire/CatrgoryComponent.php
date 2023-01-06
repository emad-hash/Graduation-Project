<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class CatrgoryComponent extends Component
{
    use WithPagination;
    public $pageSize = 12 ;
    public $orderBy = "Default Sorting" ;
    public $slug;
    public $min_value = 0;
    public $max_value = 500;
    public $scategory_slug;

    
    public function mount($slug,$scategory_slug=null){
        $this->slug = $slug ;
        $this->scategory_slug = $scategory_slug;  
    }

    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('shop.cart');
    }

    public function changePageSize($size){
        $this->pageSize = $size ;
    }
    public function changeOrderBy($order){
        $this->orderBy = $order ;
    }

    public function render()
    { 
        $category_id = null;
	    $category_name = "";
	    $filter = "";

        if ($this->scategory_slug) {
        $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
		$category_id = $scategory->id;
		$category_name = $scategory->name;
		$filter = "sub";
        }else{
            $category = Category::where('slug',$this->slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";
        }
        
        if($this->orderBy == 'Price: Low to High'){
            $products = Product::where($filter.'category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        }
        elseif($this->orderBy == 'Price: High to Low'){
            $products = Product::where($filter.'category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        }
        elseif($this->orderBy == 'sort By Newness'){
            $products = Product::where($filter.'category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        }
        else{
            $products = Product::where($filter.'category_id',$category_id)->whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pageSize);
        }
        $categories =  Category::orderBY('name' , 'ASC')->get();
        $nproducts = Product::inRandomOrder()->latest()->take(4)->get();
        return view('livewire.catrgory-component', ['products'=> $products,'categories'=>$categories,'category_name'=>$category_name,'nproducts'=>$nproducts]);
    }
}
