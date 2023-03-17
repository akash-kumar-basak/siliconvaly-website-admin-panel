@extends('layout.app')
@section('title', 'Company Settings')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                    <div class="row">
                        <div class="col">



                        <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Edit Company Settings</h4>
                                                <p class="text-muted mb-0">You can controll your website icon, logo, name, address etc from here</p>
                                            </div>
                                            <br>
                    <form class="form-horizontal mt-2" action="{{ route('companySettings.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="">
                        {{-- <div class="d-flex align-items-lg-center flex-lg-row flex-column"> --}}
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 align="center" class="header black">Company Info</h4>
                                <HR>
                                <div align="center" class="row">
                                    <div align="right" class="col-sm-3">
                                        <br>Favicon
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">
                                            <input type="file" name="favicon">
                                        </div>
                                    </div>
                                    <div align="center" class="col-sm-3">
                                        <br><img src="{{ asset($CompanyInformation->favicon)}}" style="width: 100%;height: auto;" alt="">
                                    </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Company Name</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="name" id="name" aria-describedby="basic-addon1" value="{{$CompanyInformation->name}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="title" aria-describedby="basic-addon1" value="{{$CompanyInformation->title}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Phone 1</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="phone_one" aria-describedby="basic-addon1" value="{{$CompanyInformation->phone_one}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Phone 2</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="phone_two" aria-describedby="basic-addon1" value="{{$CompanyInformation->phone_two}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text  col-sm-3" id="basic-addon1">Hotline</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="hotline" aria-describedby="basic-addon1" value="{{$CompanyInformation->hotline}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Primary Email</span>
                                                        <input type="text" class="form-control aria-label="Name" name="email_one" aria-describedby="basic-addon1" value="{{$CompanyInformation->email_one}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Secondary Email</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="email_two" aria-describedby="basic-addon1" value="{{$CompanyInformation->email_two}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Primary Address</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="address_one" aria-describedby="basic-addon1" value="{{$CompanyInformation->address_one}}">
                                                    </div>
                                                </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <h4 align="center" class="header black">Company Details Info</h4>
                                <HR>
                                <div align="center" class="row">
                                    <div align="right" class="col-sm-3">
                                        <br>Company Logo
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="file" name="company_logo"/>
                                </div> <!-- end col -->
                                    <div align="left" class="col-sm-3">
                                        <br><img src="{{ asset($CompanyInformation->company_logo)}}" style="width: 100%;height: auto;" alt="">
                                    </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Website</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="website" aria-describedby="basic-addon1" value="{{$CompanyInformation->website}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Bin No</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="bin_no" aria-describedby="basic-addon1" value="{{$CompanyInformation->bin_no}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Google Map</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="google_map" aria-describedby="basic-addon1" value="{{$CompanyInformation->google_map}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Facebook Page ID</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="facebook_page_id" aria-describedby="basic-addon1" value="{{$CompanyInformation->facebook_page_id}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Secondary Address</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="address_two" aria-describedby="basic-addon1" value="{{$CompanyInformation->address_two}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Meta Keyword</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="meta_keyword" aria-describedby="basic-addon1" value="{{$CompanyInformation->meta_keyword}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-3" id="basic-addon1">Meta Description</span>
                                                        <input type="text" class="form-control" aria-label="Name" name="meta_description" aria-describedby="basic-addon1" value="{{$CompanyInformation->meta_description}}">
                                                    </div>
                                                </div>
                                </div>
                        </div>
                


                    </div>
                    <br>
                    <div align="right">
                        <button class="btn btn-success" type="submit" id="uploadPercent">
                            <i class="bx bx-save text-light"></i>
                        Update
                        </button>
                                        
                    </div>
                    <br>
                    </div>
                    </div>
                </div>
            </div>
        </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
