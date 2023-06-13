<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\CustomerModel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.element.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->storeOrUpdate($request);
        return redirect('/');
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
            $product = CustomerModel::updateOrCreate(
                [
                    'id'            => $id
                ],
                [
                    'first_name'    => $request->firstname,
                    'last_name'     => $request->lastname,
                    'email'         => $request->email,
                    'phone'         => $request->phone,
                    'password'      => $request->password,
                    'status'        => 1,
            ]);
        }
        catch (\Throwable $th) {
            throw $th;
    }
}

}
