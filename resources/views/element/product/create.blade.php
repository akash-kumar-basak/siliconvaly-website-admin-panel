@extends('layout.app')
@section('title', 'Product Upload')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                    <div class="row">
                        <div class="col">



                        <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Upload Product</h4>
                                                <p class="text-muted mb-0">You can upload single product from here. Save button for fast upload, Proceed To Next button for details upload</p>
                                            </div>
                                            <br>
                    <form class="form-horizontal mt-2" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#" class="form-steps" autocomplete="off">
                                        <div id="custom-progress-bar" class="progress-nav mb-4">
                                            <div class="progress" style="height: 1px;">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar" id="pills-gen-info-tab" data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button" role="tab" aria-controls="pills-gen-info" aria-selected="true">1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc" type="button" role="tab" aria-controls="pills-info-desc" aria-selected="false">2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success" type="button" role="tab" aria-controls="pills-success" aria-selected="false">3</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">Basic Information</h5>
                                                            <p class="text-muted">Fill all Information as below</p>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-email-input">Product Category</label>
                                                        <select class="form-select mb-3" aria-label="Default select example" name="category">
                                                            <option selected>Select Category</option>
                                                            @foreach ($allCategory1 as $allCategory1s)
                                                                <option value="{{ $allCategory1s->id }}"> {{ $allCategory1s->name }} </option>
                                                            @endforeach
                                                            @foreach ($allCategory2 as $allCategory2s)
                                                                <option value="{{ $allCategory2s->id }}"> {{ $allCategory2s->name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Product Name</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="name" placeholder="Enter name" required >
                                                                <div class="invalid-feedback">Please enter a product name</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-basePath3">
                                                                <label class="form-label" for="gen-info-username-input">Sale Price</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="salePrice" placeholder="Enter sale price" required >
                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Reguler Price</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="regularPrice" placeholder="Enter reguler price" required >
                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">Discount</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="discount" placeholder="Enter discount" required >
                                                                <div class="invalid-feedback">Please enter discount</div>
                                                                <input type="file" name="image" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card">
                                                                    <div class="card-body">                                    
                                                                        <div class="dropzone">
                                                                            <div class="fallback">
                                                                                
                                                                            </div>
                                                                            <div class="dz-message needsclick">
                                                                                <div class="mb-3">
                                                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                                </div>
                                    
                                                                                <h4>Drop files here or click to upload.</h4>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                                            <li class="mt-2" id="dropzone-preview-list">
                                                                                <!-- This is used as the file preview template -->
                                                                                <div class="border rounded">
                                                                                    <div class="d-flex p-2">
                                                                                        <div class="flex-shrink-0 me-3">
                                                                                            <div class="avatar-sm bg-light rounded">
                                                                                                <img data-dz-thumbnail class="img-fluid rounded d-block" src="assets/images/new-document.png" alt="Dropzone-Image" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1">
                                                                                            <div class="pt-1">
                                                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                                                <strong class="error text-danger" data-dz-errormessage></strong>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-shrink-0 ms-3">
                                                                                            <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- end dropzon-preview -->
                                                                    </div>
                                                                    <!-- end card body -->
                                                                </div>
                                                                <!-- end card -->
                                                            </div> <!-- end col -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div align="right" class=" align-items-start gap-0 mt-4">
                                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Proceed To Next</button>
                                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Save</button>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->

                                            {{-- <div class="tab-pane fade" id="pills-info-desc" role="tabpanel" aria-labelledby="pills-info-desc-tab">
                                                <div>
                                                    <div class="text-center">
                                                        <h5 class="fs-14">Details Product Information</h5>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input">Short Description</label>
                                                                    <textarea class="form-control" placeholder="Enter Short Description" id="gen-info-description-input" name="shortDescription" rows="2" required></textarea>
                                                                    <div class="invalid-feedback">Please enter a short description</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input">Long Description</label>
                                                                    <textarea class="form-control" placeholder="Enter Long Description" id="gen-info-description-input" name="longDescription" rows="2" required></textarea>
                                                                    <div class="invalid-feedback">Please enter a long description</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button" class="btn btn-link text-decoration-none btn-label previestab" data-previous="pills-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to General</button>
                                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-success-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Save</button>
                                                </div>
                                            </div> --}}
                                            <!-- end tab pane -->

                                            <div class="tab-pane fade" id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab">
                                                <div>
                                                    <div class="text-center">
                                                        <div class="mb-4">
                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                        </div>
                                                        <h5>Well Done !</h5>
                                                        <p class="text-muted">Successfully Product Upload</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        
                        
                


                    </div>
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
