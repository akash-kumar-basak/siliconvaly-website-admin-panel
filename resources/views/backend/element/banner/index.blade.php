@extends('backend.layout.app')
@section('title', 'Banner')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Banner List</h4>

                                    <div class="flex-shrink-0">
                                        <a href="{{ route('banner.create') }}"><button type="button" class="btn btn-sm btn-info"><i class="ri-add-line label-icon align-middle fs-16"></i>Add More</button></a>
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
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Description</th>
                                                        <th scope="col">status</th>
                                                        <th scope="col" style="width: 150px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($banners as $banner)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><img src="{{ $banner->image }}" width="auto" height="30"></td>
                                                        <td>{{ $banner->title }}</td>
                                                        <td>{!! $banner->description !!}</td>
                                                        <td><div class="form-check form-switch form-switch-info mb-3">
                                                            <input class="form-check-input" type="checkbox" role="switch" name="status" checked>
                                                        </div></td>
                                                        <td>
                                                            <div class="btn-group">
                                                            <a href="{{ route('banner.edit', $banner->id) }}"><i class="btn btn-sm btn-success ri-edit-box-line label-icon align-middle fs-16"></i></a>&nbsp;
                                                            <form action="{{ route('banner.destroy', $banner->id) }}" onsubmit="return confirm('You want to delete this Banner?');" method="POST">
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
