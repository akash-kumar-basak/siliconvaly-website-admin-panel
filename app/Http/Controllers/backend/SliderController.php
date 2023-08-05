<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\SliderModel;
use App\Traits\FileSaver;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use FileSaver;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sliders'] = SliderModel::all();
        return view('backend.element.slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.element.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect(route('slider.index'));
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
        $data['slider'] = SliderModel::find($id);
        return view('backend.element.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->storeOrUpdate($request, $id);
        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $slider = SliderModel::find($id);
            if(file_exists($slider->image)){
                unlink($slider->image);
            }
            $slider->delete();

            return redirect()->route("slider.index")->with('success','Slider Deleted!');
        } catch (\Throwable $th) {
            return redirect()->route("slider.index")->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        try {
            $slider = SliderModel::updateOrCreate(
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
                $this->upload_file($request->image, $slider, 'image', 'slider/image');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
