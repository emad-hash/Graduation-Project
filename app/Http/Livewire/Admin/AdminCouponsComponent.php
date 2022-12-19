<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AdminCouponsComponent extends Component
{
    public $coupons_id;
    use WithPagination;
    use LivewireAlert;

    public function deletecoupon(){
        $coupons = Coupon::find($this->coupons_id);
        $coupons->delete();
        $this->alert('success','Coupon  has been delete successfully', [
            'position' => 'center',
            'timer' => 8000,
            'toast' => false,
            'showConfirmButton' => true,
            'onConfirmed' => '',
            'timerProgressBar' => true,

           ]);
           return redirect('/admin/coupons')->back();
    }
    public function render()
    {
        $coupons = Coupon::orderBy('created_at','ASC')->paginate(5);
        return view('livewire.admin.admin-coupons-component',['coupons'=>$coupons]);
    }
}
