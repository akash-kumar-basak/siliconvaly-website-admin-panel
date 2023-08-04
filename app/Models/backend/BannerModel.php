<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    use HasFactory;
    protected $table = 'banners';
    protected $guarded = [];
}
