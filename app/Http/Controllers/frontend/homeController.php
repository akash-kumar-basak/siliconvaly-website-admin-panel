<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use App\Models\backend\ProductModel;
use App\Models\backend\SliderModel;
use App\Models\frontend\ProductCartModel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $data['sliders'] = SliderModel::all();
        $data['product'] = ProductModel::inRandomOrder()->get();
        $data['category1s'] = Category1Model::all();
        $data['category2s'] = Category2Model::all();
        return view('frontend.element.home.homepage', $data);
    }

    public function productDetails($category, $id){
        $product = ProductModel::find($id);
        return view('frontend.element.product.product-details', compact('product'));
    }

    public function productCart(){
        return view('frontend.element.product.product-cart');
    }

    public function productCheckout(){
        return view('frontend.element.product.product-checkout');
    }

}
