<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\ProductModel;

class ProductCartModel extends Model
{
    protected $table = 'product_carts';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(ProductModel::class, 'product_id');
    }
}
