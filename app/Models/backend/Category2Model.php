<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category2Model extends Model
{
    protected $table = 'category_two';
    protected $guarded = [];


    public function category1(){
        return $this->belongsTo(Category1Model::class, 'category_one_id');
    }
}
