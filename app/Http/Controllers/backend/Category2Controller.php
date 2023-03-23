<?php

namespace App\Http\Controllers\backend;;

use App\Http\Controllers\Controller;
use App\Models\backend\Category1Model;
use App\Models\backend\Category2Model;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['category2'] = Category2Model::all();
        return view('backend.element.category_2.index', $data);
    }

    public function category2Read(string $id){
        $data['category2'] = Category2Model::where("category_one_id", "=", $id)->get();
        return view('backend.element.category_2.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['allCategory1'] = Category1Model::all();
        return view('backend.element.category_2.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect('/category_read/'.$request->mainMenu);
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
            $category2 = Category2Model::find($id);
            $category2->delete();

            return redirect()->back()->with('success','Sub Menu Deleted Success');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error',$th->getMessage());
        }
    }

    public function storeOrUpdate(Request $request, $id = null){
        try {
            $category2 = Category2Model::updateOrCreate(
                [
                    'id'        =>$id
                ],
                [
                    'name'                  =>$request->name,
                    'slug'                  =>$request->slug,
                    'category_one_id'       =>$request->mainMenu,
                    'serial'                =>'1',
                    'status'                =>'1',
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
}
}
