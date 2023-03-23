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
                                    <h4 class="card-title mb-0 flex-grow-1">Main Category List</h4>

                                    <div class="flex-shrink-0">
                                        <a href="{{ route('category2.index') }}"><button type="button" class="btn btn-sm btn-info">Sub Category</button></a>
                                        <a href="{{ route('category1.create') }}"><button type="button" class="btn btn-sm btn-info">Add More</button></a>
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
                                                        <td><a href="/category_read/{{ $category1s->id }}"><span class="badge bg-success">Sub Category</span></a></td>
                                                        <td><div class="form-check form-switch form-switch-info mb-3">
                                                            <input class="form-check-input" type="checkbox" role="switch" name="status" checked>
                                                        </div></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-success"><i class=" ri-edit-box-line label-icon align-middle fs-16"></i></button>
                                                            <a href="{{ route('category1.destroy', $category1s->id) }}"><button type="button" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button></a>
                                                            
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
