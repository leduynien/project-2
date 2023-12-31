<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $primarykey = 'id';
    protected $guarded = [];

    public function products(){
        return $this->belongsTo( Product::class, 'product_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
