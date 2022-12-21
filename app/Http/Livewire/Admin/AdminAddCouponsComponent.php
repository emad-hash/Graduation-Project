<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminAddCouponsComponent extends Component
{
    use LivewireAlert;

    public $code;
    public $type;
    public $value ;
    public $cart_value;


    public function updated($fields){
        $this->validateOnly($fields,[
            'code'=> 'required',
            'type'=> 'required',
            'value'=> 'required',
            'cart_value'=> 'required'
        ]);
    }
    public function storeCoupon(){
        $this->validate([
            'code'=> 'required|unique:coupons',
            'type'=> 'required',
            'value'=> 'required|numeric',
            'cart_value'=> 'required|numeric'
        ]);
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;

        $coupon->save();
        $this->alert('success','Coupon  has been created successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->to('/admin/coupons/add');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component');
    }
}
