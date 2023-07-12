<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use App\Models\backend\ProductModel;
use App\Models\frontend\ProductCartModel;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        $data['product'] = ProductModel::all();
        $data['category1s'] = Category1Model::all();
        $data['category2s'] = Category2Model::all();
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->user())->id)->get();
        return view('frontend.element.home.homepage', $data);
    }

    public function productDetails($category, $id){
        $product = ProductModel::find($id);
        $carts = ProductCartModel::all();
        return view('frontend.element.product.product-details', compact('product', 'carts'));
    }

    public function productCart(){
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->user())->id)->get();
        return view('frontend.element.product.product-cart', $data);
    }

    public function productCheckout(){
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->user())->id)->get();
        return view('frontend.element.product.product-checkout', $data);
    }

}
