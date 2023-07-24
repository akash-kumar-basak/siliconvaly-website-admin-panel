<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\backend\ProductModel;
use App\Models\frontend\CustomerModel;

class ProductCartModel extends Model
{
    protected $table = 'product_carts';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(ProductModel::class, 'product_id');
    }

    public function customer(){
        return $this->belongsTo(CustomerModel::class, 'customer_id');
    }
}
