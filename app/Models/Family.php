<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='printer_families';
    protected $fillable = ['name', 'brand_id', 'type_id'];
    protected $dates = ['deleted_at'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function models()
    {
        return $this->hasMany(PrinterModel::class);
    }
}
