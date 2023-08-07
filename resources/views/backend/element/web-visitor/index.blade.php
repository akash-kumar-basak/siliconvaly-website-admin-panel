@extends('backend.layout.app')
@section('title', 'Web Visitor')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Web Visitor List</h4>

                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted mb-4"></p>

                                <div class="live-preview">
                                    <div class="table-responsive table-card">
                                        <table class="table table-hover align-middle table-nowrap table-striped-columns mb-0">
                                            <thead class="table-light">
                                            <tr>
                                                <th scope="col" width="5%">SI</th>
                                                <th scope="col">IP Address</th>
                                                <th scope="col">Visiting Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($web_visitors as $web_visitor)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $web_visitor->ip_address }}</td>
                                                    <td>{{ $web_visitor->created_at }}</td>
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
