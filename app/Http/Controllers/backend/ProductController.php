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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
                    'dangerous_goods'       =>"",
                    'serial'                =>1,
                    'status'                =>1,
            ]);
            if(isset($request->image[0])){
                $this->upload_file($request->image[0], $product, 'image_one', 'product/image');
            }
            elseif(isset($request->image[1])){
                $this->upload_file($request->image[1], $product, 'image_two', 'product/image');
            }
            elseif(isset($request->image[2])){
                $this->upload_file($request->image[2], $product, 'image_three', 'product/image');
            }
            elseif(isset($request->image[3])){
                $this->upload_file($request->image[3], $product, 'image_four', 'product/image');
            }
            elseif(isset($request->image[4])){
                $this->upload_file($request->image[4], $product, 'image_five', 'product/image');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
}
}
