<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use App\Models\backend\ProductModel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $data['product'] = ProductModel::all();
        $data['category1s'] = Category1Model::all();
        $data['category2s'] = Category2Model::all();
        return view('frontend.element.home.homepage', $data);
    }

    public function productDetails($category, $id){
        return view('frontend.element.product.product-details');
    }
}
