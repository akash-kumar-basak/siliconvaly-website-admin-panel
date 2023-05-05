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
                                    <h4 class="fs-16 mb-1">Edit Product</h4>
                                    <p class="text-muted mb-0">You can upload single product from here. Save button for fast upload, Proceed To Next button for details upload</p>
                                </div>
                                <br>
                                <form class="form-horizontal mt-2" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
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
                                                                            <option value="{{ $product->category_id }}|{{ $product->category_table }}" selected> {{ CategoryName($product->category_table, $product->category_id) }} </option>
                                                                            @php
                                                                                use App\Models\backend\Category1Model;
                                                                                use App\Models\backend\Category2Model;
                                                                            @endphp
                                                                            @foreach ($allCategory1 as $allCategory1s)
                                                                                <option value="{{ $allCategory1s->id }}|{{(new Category1Model())->getTable()}}"> {{ $allCategory1s->name }} </option>
                                                                            @endforeach
                                                                            @foreach ($allCategory2 as $allCategory2s)
                                                                                <option value="{{ $allCategory2s->id }}|{{(new Category2Model())->getTable()}}"> {{ $allCategory2s->category1->name }}&rarr;{{ $allCategory2s->name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Product Name</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="name" value="{{ $product->name }}" required >
                                                                                <div class="invalid-feedback">Please enter a product name</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-basePath3">
                                                                                <label class="form-label" for="gen-info-username-input">Sale Price</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="salePrice" value="{{ $product->sale_price }}" placeholder="Enter sale price" required >
                                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Reguler Price</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="regularPrice" value="{{ $product->regular_price }}" placeholder="Enter reguler price" >
                                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-username-input">Discount</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="discount" value="{{ $product->discount }}" placeholder="Enter discount" >
                                                                                <div class="invalid-feedback">Please enter discount</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-basePath3">
                                                                                <label class="form-label" for="gen-info-username-input">Brand</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="brand" value="{{ $product->brand }}" placeholder="Enter sale price" >
                                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Stock</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="stock" value="{{ $product->stock }}" placeholder="Enter reguler price" >
                                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-username-input">Inside Box</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="insideBox" value="{{ $product->inside_box }}" placeholder="Enter discount" >
                                                                                <div class="invalid-feedback">Please enter discount</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">SKU</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="sku" value="{{ $product->sku }}" placeholder="Enter sku" >
                                                                                <div class="invalid-feedback">Please enter a sku code</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <div>
                                                                                    <label class="form-label" for="gen-info-description-input">Short Description</label>
                                                                                    <textarea class="form-control" placeholder="Enter Short Description" id="gen-info-description-input" name="shortDescription" rows="2">{{ $product->short_description }}</textarea>
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
                                                                                    <textarea class="form-control" placeholder="Enter Long Description" id="gen-info-description-input" name="longDescription" rows="6">{{ $product->long_description }}</textarea>
                                                                                    <div class="invalid-feedback">Please enter a long description</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-basePath3">
                                                                                <label class="form-label" for="gen-info-username-input">Package Weight</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="packageWeight" value="{{ $product->package_weight }}" placeholder="Package Weight" >
                                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Package Dimension</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="packageDimensions" value="{{ $product->package_dimensions }}" placeholder="Package Dimensions" >
                                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-basePath3">
                                                                                <label class="form-label" for="gen-info-username-input">Warrenty Type</label>
                                                                                <input type="text" class="form-control" id="gen-info-username-input" name="warrentyType" value="{{ $product->warranty_type }}" placeholder="Enter sale price" >
                                                                                <div class="invalid-feedback">Please enter sale price</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Warrenty Period</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="warrentyPeriod" value="{{ $product->warranty_period }}" placeholder="Enter reguler price" >
                                                                                <div class="invalid-feedback">Please enter reguler price</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <div>
                                                                                    <label class="form-label" for="gen-info-description-input">Warrenty Policy</label>
                                                                                    <textarea class="form-control" placeholder="Enter Long Description" id="gen-info-description-input" name="warrentyPolicy" rows="2">{{ $product->warranty_policy }}</textarea>
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
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <div>
                                                                                                    <label class="form-label" for="gen-info-description-input">Product Image1</label>
                                                                                                    <input type="file" name="image[0]" id="image1Value">
                                                                                                    <img src="{{ asset($product->image_one) }}" width="auto" height="50" id="image1">
{{--                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-danger" onclick="deleteImage1()"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>--}}
                                                                                                    <div class="invalid-feedback">Images Preview</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <div>
                                                                                                    <label class="form-label" for="gen-info-description-input">Product Image2</label>
                                                                                                    <input type="file" name="image[1]">
                                                                                                    <img src="{{ asset($product->image_two) }}" width="auto" height="50">
{{--                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>--}}
                                                                                                    <div class="invalid-feedback">Images Preview</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <div>
                                                                                                    <label class="form-label" for="gen-info-description-input">Product Image3</label>
                                                                                                    <input type="file" name="image[2]">
                                                                                                    <img src="{{ asset($product->image_three) }}" width="auto" height="50">
{{--                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>--}}
                                                                                                    <div class="invalid-feedback">Images Preview</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <div>
                                                                                                    <label class="form-label" for="gen-info-description-input">Product Image4</label>
                                                                                                    <input type="file" name="image[3]">
                                                                                                    <img src="{{ asset($product->image_four) }}" width="auto" height="50">
{{--                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>--}}
                                                                                                    <div class="invalid-feedback">Images Preview</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                            <div class="mb-3">
                                                                                                <div>
                                                                                                    <label class="form-label" for="gen-info-description-input">Product Image5</label>
                                                                                                    <input type="file" name="image[4]">
                                                                                                    <img src="{{ asset($product->image_five) }}" width="auto" height="50">
{{--                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-line label-icon align-middle fs-16"></i></button>--}}
                                                                                                    <div class="invalid-feedback">Images Preview</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Video Url</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" name="videoUrl" value="{{ $product->video_url }}" placeholder="Enter name" >
                                                                                <div class="invalid-feedback">Please enter a product name</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <div class="mb-3">
                                                                                <div>
                                                                                    <label class="form-label" for="gen-info-description-input">Dangerous Goods</label>
                                                                                    <div class="form-check form-radio-success mb-2">
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="liquid" {{ dangerousGoodsChecke('liquid', $product->dangerous_goods) }}>
                                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                                            Liquid
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
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="breakable" {{ dangerousGoodsChecke('breakable', $product->dangerous_goods) }}>
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
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="flammable" {{ dangerousGoodsChecke('flammable', $product->dangerous_goods) }}>
                                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                                            Flammable
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
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="gas" {{ dangerousGoodsChecke('gas', $product->dangerous_goods) }}>
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
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="battery" {{ dangerousGoodsChecke('battery', $product->dangerous_goods) }}>
                                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                                            Battery
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
                                                                                        <input class="form-check-input" type="radio" name="dangerousGoods" id="flexRadioDefault1" value="none" {{ dangerousGoodsChecke('none', $product->dangerous_goods) }}>
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
                                                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Update</button>
                                                                </div>
                                                            </div>
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
{{--    <script>--}}
{{--        function deleteImage1(){--}}
{{--            document.getElementById('image1').src = "{{ asset('assets/images/no-image.jpeg') }}";--}}
{{--        }--}}
{{--    </script>--}}
@endsection
