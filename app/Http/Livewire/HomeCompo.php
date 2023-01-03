<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;

class HomeCompo extends Component
{
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }
    
    // public function AddToWishlist($product_id,$product_name,$product_price){
    //     Cart::instance('Wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
    //     $this->emitTo('wishlist-icon-component', 'refreshComponent');
    // }
    // public function removeFromWishlist($product_id){
    //     foreach(Cart::instance('Wishlist')->content() as $witem){
    //         if($witem->id==$product_id){
    //             Cart::instance('Wishlist')->remove($witem->rowId);
    //             $this->emitTo('wishlist-icon-component', 'refreshComponent');
    //             return;
    //         }
    //     }
    // }
   

    public function render()
    {
        
        $slides = HomeSlider::where('status',1)->get();
        $lprodects = Product::orderBy('created_at','DESC')->get()->take(8);
        $nprodects = Product::orderBy('created_at','DESC')->get()->take(8);
        $fprodects = Product::where('featured',1)->get()->take(8);
        $cprodects = Product::where('category_id',1)->orderBy('category_id','DESC')->get()->take(8);
        $mprodects = Product::where('category_id',2)->orderBy('category_id','DESC')->get()->take(8);
        $wprodects = Product::where('category_id',4)->orderBy('category_id','DESC')->get()->take(8);
        $laprodects = Product::where('category_id',10)->orderBy('category_id','DESC')->get()->take(8);
        $tprodects = Product::where('category_id',5)->orderBy('category_id','DESC')->get()->take(8);
        return view('livewire.home-compo',['slides'=>$slides,'lproducts'=>$lprodects,'fproducts'=>$fprodects, 'cproducts'=>$cprodects, 'mproducts'=>$mprodects, 'wproducts'=>$wprodects, 'laproducts'=>$laprodects, 'tproducts'=>$tprodects,'nproducts'=>$nprodects]);
    }
}
