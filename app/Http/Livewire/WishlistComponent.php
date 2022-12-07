<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class WishlistComponent extends Component
{
    public function removeFromWishlist($product_id){
        foreach(Cart::instance('Wishlist')->content() as $witem){
            if($witem->id==$product_id){
                Cart::instance('Wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }
    public function render()
    {
        return view('livewire.wishlist-component');
    }
}
