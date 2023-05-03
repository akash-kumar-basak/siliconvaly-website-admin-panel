@extends('backend.layout.app')
@section('title', 'Products')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Product List</h4>

                                    <div class="flex-shrink-0">
                                        <a href="{{ route('product.create') }}"><button type="button" class="btn btn-sm btn-info"><i class="ri-add-line label-icon align-middle fs-16"></i>Add More</button></a>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted mb-4"></p>

                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">SI</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Sale Price</th>
                                                        <th scope="col">Discount</th>
                                                        <th scope="col">Stock</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allProducts as $allProduct)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $allProduct->name }}</td>
                                                        <td>
                                                            <img src="{{ asset($allProduct->image_one) }}" width="auto" height="30">
                                                            <img src="{{ asset($allProduct->image_two) }}" width="auto" height="30">
                                                            <img src="{{ asset($allProduct->image_three) }}" width="auto" height="30">
                                                            <img src="{{ asset($allProduct->image_four) }}" width="auto" height="30">
                                                            <img src="{{ asset($allProduct->image_five) }}" width="auto" height="30">
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">
                                                            @if($allProduct->category_table == "category_one")
                                                                {{ $allProduct->category1->name }}
                                                            @elseif($allProduct->category_table == "category_two")
                                                                {{ $allProduct->category2->name }}
                                                            @endif
                                                            </span>
                                                        </td>
                                                        <td>{{ $allProduct->sale_price }}</td>
                                                        <td>{{ $allProduct->discount}}</td>
                                                        <td>{{ $allProduct->stock }}</td>
                                                        <td><div class="form-check form-switch form-switch-info mb-3">
                                                            <input class="form-check-input" type="checkbox" role="switch" name="status" checked>
                                                        </div></td>
                                                        <td>
                                                            <div class="btn-group">
                                                            <a href="{{ route('product.edit', $allProduct->id) }}"><i class="btn btn-sm btn-success ri-edit-box-line label-icon align-middle fs-16"></i></a>&nbsp;
                                                            <form action="{{ route('product.destroy', $allProduct->id) }}" onsubmit="return confirm('You want to delete this product?');" method="POST">
                                                                @csrf @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>
                                                            </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
@endsection
