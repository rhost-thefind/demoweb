<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $table = "category";
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Producto::class, 'id');
    }
}
