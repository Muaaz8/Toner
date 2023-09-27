<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'product_price',
        'quantity',
    ];

    public function products(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
