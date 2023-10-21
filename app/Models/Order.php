<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'country',
        'address',
        'appartment',
        'city',
        'state',
        'zip_code',
        'phone',
        'email',
        'notes',
        'user_id',
        'price',
        'status',
        'shipping_amount',
        'grand_total',
    ];

    public function details(){
        return $this->hasMany(OrderDetails::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
