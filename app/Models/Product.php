<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    protected $fillable = [
        'name', 'slug', 'description', 'quantity', 'price', 'promotional', 'idCategory', 'idProductType', 'status',
    ];

    public function ProductType(){
        return $this->belongsTo('App\Models\ProductType','idProductType','id');
    }

    public function Category(){
        return $this->belongsTo('App\Models\Categories','idCategory','id');
    }

}
