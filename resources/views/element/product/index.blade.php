@extends('layout.app')
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
                                        <a href="{{ route('product.create') }}"><button type="button" class="btn btn-sm btn-info">Add More</button></a>
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
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($allProduct as $allProducts)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $allProducts->name }}</td>
                                                        <td><img src="{{ asset($allProducts->image_one) }}" width="auto" height="30"></td>
                                                        <td>{{ $allProducts->category }}</td>
                                                        <td>{{ $allProducts->sale_price }}</td>
                                                        <td><span class="badge bg-success">Active</span></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success"><i class=" ri-edit-box-line label-icon align-middle fs-16"></i></button>
                                                            <a href="{{ route('product.destroy', $allProducts->id) }}"><button type="button" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button></a>
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
