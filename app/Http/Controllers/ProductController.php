<?php

namespace App\Http\Controllers;

use App\Models\Category1Model;
use App\Models\Category2Model;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CompanyModel;
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
        $data['allProduct'] = ProductModel::all();
        return view('element.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['allCategory1'] = Category1Model::all();
        $data['allCategory2'] = Category2Model::all();
        return view('element.product.create', $data);
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
            $product = ProductModel::updateOrCreate(
                [
                    'id'        =>$id
                ],
                [
                    'category'          =>$request->category,
                    'name'              =>$request->name,
                    'sale_price'        =>$request->salePrice,
                    'regular_price'     =>$request->regularPrice,
                    'discount'          =>$request->discount,
                    'status'            =>'1',
            ]);
            $this->upload_file($request->image, $product, 'image_one', 'product/image');
        } catch (\Throwable $th) {
            throw $th;
        }
}
}
