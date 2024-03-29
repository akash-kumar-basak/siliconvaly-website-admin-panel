<?php

namespace App\Http\Controllers\backend;;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use App\Models\backend\ProductModel;
use Illuminate\Http\Request;
use App\Models\backend\CompanyModel;
use App\Traits\FileSaver;
use Intervention\Image\Facades\Image;

define('liquid', 'liquid');
define('breakable', 'breakable');
define('flammable', 'flammable');
define('gas', 'gas');
define('battery', 'battery');
define('none', 'none');

class ProductController extends Controller
{

    use FileSaver;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['allProducts'] = ProductModel::all();
        return view('backend.element.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['allCategory1'] = Category1Model::all();
        $data['allCategory2'] = Category2Model::all();
        return view('backend.element.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['product'] = ProductModel::find($id);
        $data['allCategory1'] = Category1Model::all();
        $data['allCategory2'] = Category2Model::all();
        return view('backend.element.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->storeOrUpdate($request, $id);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $product = ProductModel::find($id);
            if(file_exists($product->image_one)){
                unlink($product->image_one);
            }
            if(file_exists($product->image_two)){
                unlink($product->image_two);
            }
            if(file_exists($product->image_three)){
                unlink($product->image_three);
            }
            if(file_exists($product->image_four)){
                unlink($product->image_four);
            }
            if(file_exists($product->image_five)){
                unlink($product->image_five
                );
            }
            $product->delete();

            return redirect()->route("product.index")->with('success','Product Deleted!');
        } catch (\Throwable $th) {
            return redirect()->route("product.index")->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        try {
            $category= explode('|', $request->category);
            $categoryId = $category[0];
            $categoryTable = $category[1];
            $product = ProductModel::updateOrCreate(
                [
                    'id'        =>$id
                ],
                [
                    'category_id'           =>$categoryId,
                    'category_table'        =>$categoryTable,
                    'name'                  =>$request->name,
                    'sale_price'            =>$request->salePrice,
                    'regular_price'         =>$request->regularPrice,
                    'discount'              =>$request->discount,
                    'short_description'     =>$request->shortDescription,
                    'long_description'      =>$request->longDescription,
                    'brand'                 =>$request->brand,
                    'video_url'             =>$request->videoUrl,
                    'inside_box'            =>$request->insideBox,
                    'stock'                 =>$request->stock,
                    'warranty_type'         =>$request->warrentyType,
                    'warranty_period'       =>$request->warrentyPeriod,
                    'warranty_policy'       =>$request->warrentyPolicy,
                    'package_weight'        =>$request->packageWeight,
                    'package_dimensions'    =>$request->packageDimensions,
                    'sku'                   =>$request->sku,
                    'dangerous_goods'       =>$request->dangerousGoods,
                    'serial'                =>1,
                    'status'                =>1,
            ]);

            if(isset($request->image[0])){
                $this->upload_file($request->image[0], $product, 'image_one', 'product/image1');
            }
            if(isset($request->image[1])){
                $this->upload_file($request->image[1], $product, 'image_two', 'product/image2');
            }
            if(isset($request->image[2])){
                $this->upload_file($request->image[2], $product, 'image_three', 'product/image3');
            }
            if(isset($request->image[3])){
                $this->upload_file($request->image[3], $product, 'image_four', 'product/image4');
            }
            if(isset($request->image[4])){
                $this->upload_file($request->image[4], $product, 'image_five', 'product/image5');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
}
}
