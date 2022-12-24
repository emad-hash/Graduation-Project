<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminEditCouponsComponent extends Component
{
    use LivewireAlert;
    
    public $coupon_id;
    public $code;
    public $type;
    public $value ;
    public $cart_value;
    public $expiry_date;

    public function mount($coupon_id){
        $coupon = Coupon::find($coupon_id);
        $this->coupons_id = $coupon->id;
        $this->code =  $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->expiry_date = $coupon->expiry_date;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'code'=> 'required',
            'type'=> 'required',
            'value'=> 'required',
            'cart_value'=> 'required',
            'expiry_date'=> 'required'
        ]);
    }
    public function UpdateCoupon(){
        $this->validate([
            'code'=> 'required|unique:coupons',
            'type'=> 'required',
            'value'=> 'required|numeric',
            'cart_value'=> 'required|numeric',
            'expiry_date'=> 'required'
        ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->save();
        $this->alert('success','Coupon  has been Update successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect()->back();
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component');
    }
}
