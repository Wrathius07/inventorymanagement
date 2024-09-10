<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_model',
        'product_brand',
        'product_category',
        'product_description',
        'storage_capacity',
        'price',
    ];

    public function preorders()
    {
        return $this->hasMany(Preorder::class);
    }
}
