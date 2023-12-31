<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id','id');
    }

    public function productCategory(){
        return $this->belongsTo(ProductCategory::class, 'category_id','id');
    }

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id','id');
    }

    public function productDetails(){
        return $this->hasMany(ProductDetail::class, 'product_id','id');
    }

    public function feedback(){
        return $this->hasMany(feedback::class, 'product_id','id');
    }

    public function orderDetails(){
        return $this->hasMany(OderDetail::class, 'product_id','id');
    }
}
