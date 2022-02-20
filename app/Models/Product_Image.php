<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    use HasFactory;
    protected $table = "product_images";
    protected $guarded = [];
    public function Product(){
        return $this->belongsTo(Product::class);
    }
}
