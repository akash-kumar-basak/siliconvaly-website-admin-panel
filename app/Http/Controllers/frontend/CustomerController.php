<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\CustomerModel;
use App\Models\frontend\ProductCartModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerAccountVerificationMail;
use App\Models\frontend\OrderModel;
use Illuminate\Support\Facades\Auth;
use App\Traits\FileSaver;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class CustomerController extends Controller
{
    use FileSaver;

//    public function __construct()
//    {
//        $this->middleware('customer');
//    }

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
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->guard('customer')->user())->id)->get();
        return view('frontend.element.customer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Mail::to('akash.smartsoftware@gmail.com')->send(new CustomerAccountVerificationMail());
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
        $data['customer'] = CustomerModel::find($id);
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->guard('customer')->user())->id)->get();
        return view('frontend.element.customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = CustomerModel::updateOrCreate(
            [
                'id'            => $id
            ],
            [
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'password'      => Hash::make($request->password),
                'country'       => $request->country,
                'district'      => $request->district,
                'post_code'     => $request->post_code,
                'street'        => $request->street,
                'house_number'  => $request->house_number,
        ]);
        if($request->image){
            $this->upload_file($request->image, $customer, 'image', 'customer/image');
        }
        return redirect()->back();
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
                    'password'      => Hash::make($request->password),
                    'status'        => 1,
            ]);
        }
        catch (\Throwable $th) {
            throw $th;
    }
}

public function customerLoginForm(){
    if(auth()->guard('customer')->user()){
        return redirect('/');
    }

    else{
        $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->guard('customer')->user())->id)->get();
        return view('frontend.element.customer.login', $data);
    }
}

    public function customerLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'     => 'required',
            'password'        => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'data' => [],
                $validator->errors(),
                'message' => 'Validation Required',
            ]);
        }

        if (auth()->guard('web')->user()){
            Auth::logout();
        }

        if (Auth::guard('customer')->attempt($request->only(['email','password']))){
            return redirect('/');
        }

        return back();
    }

public function customerOrder(){
    $data['orders'] = OrderModel::where('customer_id', auth()->guard('customer')->user()->id)->with('customer')->get();
    $data['carts'] = ProductCartModel::where('customer_id', optional(auth()->guard('customer')->user())->id)->get();
    return view('frontend.element.customer.order', $data);
}

public function userLogout(){
    Auth::logout();
    return redirect()
        ->route('admin_logout');
}
public function customerLogout(){
    Auth::guard('customer')
        ->logout();
    return redirect('/');
}

}
