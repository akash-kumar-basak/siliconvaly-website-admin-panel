<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\OrderModel;
use App\Models\frontend\OrderProductModel;
use App\Models\frontend\ProductCartModel;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['orders'] = OrderModel::with('customer')->get();
        return view('backend.element.order.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = OrderModel::updateOrCreate(
            [
                'id'                => null
            ],
            [
                'uuid'              => Str::uuid(),
                'customer_id'       => auth()->user()->id,
                'time'              => now() ,
                'status'            => 1,
        ]);

        foreach($request->product_id as $key => $value){
        $orderProducts = OrderProductModel::updateOrCreate(
            [
                'id'                => null
            ],
            [
                'order_id'          => $order->id,
                'product_id'        => $request->product_id[$key],
                'quantity'          => $request->quantity[$key],
        ]);

        $cart = ProductCartModel::whereIn('id', $request->cart_id)->delete();
        
    }
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
}
