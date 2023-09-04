<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name'];
    protected $dates = ['deleted_at'];

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    public function models()
    {
        return $this->hasMany(PrinterModel::class);
    }
}
