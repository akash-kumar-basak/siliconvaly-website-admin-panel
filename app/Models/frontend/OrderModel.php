<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\frontend\CustomerModel;
use App\Models\frontend\OrderProductModel;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(CustomerModel::class);
    }

}
