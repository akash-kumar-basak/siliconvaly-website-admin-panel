<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\BannerModel;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use App\Models\backend\ProductModel;
use App\Models\backend\SliderModel;
use App\Models\frontend\ProductCartModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function home(){
        $this->locationTrack();
        $data['sliders'] = SliderModel::all();
        $data['banners'] = BannerModel::all();
        $data['product'] = ProductModel::inRandomOrder()->get();
        $data['category1s'] = Category1Model::all();
        $data['category2s'] = Category2Model::all();
        return view('frontend.element.home.homepage', $data);
    }

    public function productCategoryShow(){

        return view('frontend.element.product.product-show-by-category');
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

    public function locationTrack()
    {
        $IP_Address = $_SERVER["REMOTE_ADDR"];
        DB::table('web_visitor')->insertOrIgnore(
            [
                ['ip_address'=>$IP_Address, 'created_at'=>Carbon::now('Asia/Dhaka')->format('Y-m-d H:i:s')],
            ]
        );
        return 1;
    }

}
