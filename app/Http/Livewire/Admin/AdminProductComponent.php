<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminProductComponent extends Component
{
    public $product_id;

    use WithPagination;
    use LivewireAlert;

    
    public function deleteProduct(){
        $product = Product::find($this->product_id);
        $product->delete();
        $this->alert('success','Product has been delete successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect('/admin/products')->back();   
         }
    public function render()
    {
        $products = Product::orderBy('created_at','ASC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }
}
