<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $guarded = [];


    public function category1(){
        return $this->belongsTo(Category1Model::class, 'category_id');
    }
    public function category2(){
        return $this->belongsTo(Category2Model::class, 'category_id');
    }
}

