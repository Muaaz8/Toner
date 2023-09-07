<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    use HasFactory;
    protected $table = 'model_product';
    protected $fillable = [
        'product_id',
        'model_id',
    ];
}
