<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;
    
    protected $table = "reviews"; 

    public function orerItem()
    {
        return $this->belongsTo(OrderItem::class);
    }
}
