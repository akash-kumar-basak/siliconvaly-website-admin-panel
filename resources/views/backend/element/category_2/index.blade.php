@extends('backend.layout.app')
@section('title', 'Company Settings')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Sub Category List</h4>

                                    <div class="flex-shrink-0">
                                        <a href="{{ route('category2.create') }}"><button type="button" class="btn btn-sm btn-info">Add More</button></a>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    {{-- <p class="text-muted mb-4">Use .<code>table-striped-columns</code> to add zebra-striping to any table column.</p> --}}

                                    <div class="live-preview">
                                        <div class="table-responsive table-card">
                                            <table class="table table-hover align-middle table-nowrap table-striped-columns mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">SI</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Slug</th>
                                                        <th scope="col">Main Category</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($category2 as $category2s)
                                                    <tr>
                                                        <td><a href="#" class="fw-medium">{{ $loop->iteration }}</a></td>
                                                        <td>{{ $category2s->name }}</td>
                                                        <td>{{ $category2s->slug }}</td>
                                                        <td><span class="badge bg-success">{{ $category2s->category1->name }}</span></td>
                                                        <td><span class="badge bg-success">Active</span></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                                                            <a href="{{ route('category2.destroy', $category2s->id) }}"><button type="button" class="btn btn-sm btn-danger">Delete</button></a>
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
