@extends('layout.app')
@section('title', 'Company Settings')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Main Category List</h4>

                                    <div class="flex-shrink-0">
                                        <a href="{{ route('category1.create') }}"><button type="button" class="btn btn-sm btn-info">Add More</button></a>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <p class="text-muted mb-4">Use .<code>table-striped-columns</code> to add zebra-striping to any table column.</p>

                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">SI</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Slug</th>
                                                        <th scope="col">Sub Category</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($category1 as $category1s)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $category1s->name }}</td>
                                                        <td>{{ $category1s->slug }}</td>
                                                        <a href="/category2Read"><td><span class="badge bg-success">Sub Category</span></td></a>
                                                        <td><span class="badge bg-success">Active</span></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                                                            <button type="button" class="btn btn-sm btn-danger">Delete</button>
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
