@extends('backend.layout.app')
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
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="gen-info-email-input">Product Category</label>
                                                        <select class="form-select mb-3" aria-label="Default select example" name="category">
                                                            <option selected>Select Category</option>
                                                            @php
                                                               use App\Models\backend\Category1Model; 
                                                               use App\Models\backend\Category2Model; 
                                                            @endphp
                                                            @endphp
                                                            @foreach ($allCategory1 as $allCategory1s)
                                                                <option value="{{ $allCategory1s->id }}|{{(new Category1Model())->getTable()}}"> {{ $allCategory1s->name }} </option>
                                                            @endforeach
                                                            @foreach ($allCategory2 as $allCategory2s)
                                                                <option value="{{ $allCategory2s->id }}|{{(new Category2Model())->getTable()}}"> {{ $allCategory2s->name }} </option>
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
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="regularPrice" placeholder="Enter reguler price" >
                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">Discount</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="discount" placeholder="Enter discount" >
                                                                <div class="invalid-feedback">Please enter discount</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-basePath3">
                                                                <label class="form-label" for="gen-info-username-input">Brand</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="brand" placeholder="Enter sale price" >
                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Stock</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="stock" placeholder="Enter reguler price" >
                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-username-input">Inside Box</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="insideBox" placeholder="Enter discount" >
                                                                <div class="invalid-feedback">Please enter discount</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">SKU</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="sku" placeholder="Enter sku" required >
                                                                <div class="invalid-feedback">Please enter a sku code</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input">Short Description</label>
                                                                    <textarea class="form-control" placeholder="Enter Short Description" id="gen-info-description-input" name="shortDescription" rows="2"></textarea>
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
                                                                    <textarea class="form-control" placeholder="Enter Long Description" id="gen-info-description-input" name="longDescription" rows="6"></textarea>
                                                                    <div class="invalid-feedback">Please enter a long description</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-basePath3">
                                                                <label class="form-label" for="gen-info-username-input">Package Weight</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="packageWeight" placeholder="Enter sale price" >
                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Package Dimension</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="packageDimensions" placeholder="Enter reguler price" >
                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-basePath3">
                                                                <label class="form-label" for="gen-info-username-input">Warrenty Type</label>
                                                                <input type="text" class="form-control" id="gen-info-username-input" name="warrentyType" placeholder="Enter sale price" >
                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Warrenty Period</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="warrentyPeriod" placeholder="Enter reguler price" >
                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input">Warrenty Policy</label>
                                                                    <textarea class="form-control" placeholder="Enter Long Description" id="gen-info-description-input" name="warrentyPolicy" rows="2"></textarea>
                                                                    <div class="invalid-feedback">Please enter a long description</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3" style="border:1px dashed rgb(192, 192, 192);">
                                                                <div class="mt-3 mb-3">
                                                                    <label class="form-label" for="gen-info-description-input">Upload Multiple Images (maximum 5 images Support) <span class="text-danger">Note: Image size 230.5*230.5 recommended</span></label><br>
                                                                    <input type="file" name="image[]"  multiple="multiple">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gen-info-email-input">Video Url</label>
                                                                <input type="text" class="form-control" id="gen-info-email-input" name="videoUrl" placeholder="Enter name" >
                                                                <div class="invalid-feedback">Please enter a product name</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input">Dangirous Goods</label>
                                                                        <div class="form-check form-radio-success mb-2">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Liquide
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input"></label>
                                                                        <div class="form-check form-radio-success mb-2">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Breakable
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input"></label>
                                                                        <div class="form-check form-radio-success mb-2">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Flammengo
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input"></label>
                                                                        <div class="form-check form-radio-success mb-2">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                Gas
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="mb-3">
                                                                <div>
                                                                    <label class="form-label" for="gen-info-description-input"></label>
                                                                        <div class="form-check form-radio-success mb-2">
                                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                                None
                                                                            </label>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div align="right" class=" align-items-start gap-0 mt-4">
                                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Save</button>
                                                </div>
                                            </div>
                                            

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
