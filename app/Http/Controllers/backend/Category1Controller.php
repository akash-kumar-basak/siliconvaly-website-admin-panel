<?php

namespace App\Http\Controllers\backend;;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['category1'] = Category1Model::all();
        return view('backend.element.category_1.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.element.category_1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect(route('category1.index'));
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
        try {
            $category1= Category1Model::find($id);
            $category1->delete();
            return redirect('/');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        try {
            $category1 = Category1Model::updateOrCreate(
                [
                    'id'        =>$id
                ],
                [
                    'name'                  =>$request->name,
                    'slug'                  =>$request->slug,
                    'serial'                =>'1',
                    'status'                =>'1',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
}
}
