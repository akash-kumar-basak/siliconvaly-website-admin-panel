<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\BannerModel;
use App\Traits\FileSaver;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use FileSaver;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['banners'] = BannerModel::all();
        return view('backend.element.banner.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.element.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect(route('banner.index'));
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
        $data['banner'] = BannerModel::find($id);
        return view('backend.element.banner.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->storeOrUpdate($request, $id);
        return redirect(route('banner.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $banner = BannerModel::find($id);
            if(file_exists($banner->image)){
                unlink($banner->image);
            }
            $banner->delete();

            return redirect()->route("banner.index")->with('success','Banner Deleted!');
        } catch (\Throwable $th) {
            return redirect()->route("banner.index")->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        try {
            $banner = BannerModel::updateOrCreate(
                [
                    'id'            => $id
                ],
                [

                    'title'         =>$request->title,
                    'description'   =>$request->description,
                    'link'          =>$request->link,
                    'status'        =>1,
                ]);

            if(isset($request->image)){
                $this->upload_file($request->image, $banner, 'image', 'banner/image');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
