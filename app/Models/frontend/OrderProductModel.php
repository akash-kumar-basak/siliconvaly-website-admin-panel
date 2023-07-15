<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\ProductModel;

class OrderProductModel extends Model
{
    use HasFactory;
    protected $table = 'order_products';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(ProductModel::class);
    }
}
