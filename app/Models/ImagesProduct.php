<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProduct extends Model
{
    use HasFactory;
    protected $table = 'images_product';
    protected $fillable = [
        'product_id',
        'image',
    ];
}
