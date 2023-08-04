@extends('backend.layout.app')
@section('title', 'Slider')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">



                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Insert Slider</h4>
                                    <p class="text-muted mb-0">You can insert slider from here. Give required information and click save button.</p>
                                </div>
                                <br>
                                <form class="form-horizontal mt-2" action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
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
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Image</label>
                                                                                <input type="file" class="form-control" id="gen-info-email-input" name="image" placeholder="Enter image" >
                                                                                <div class="invalid-feedback">Please enter a image</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Preview Image</label>
                                                                                <img src="{{ asset($slider->image) }}" width="auto" height="100px">
                                                                                <div class="invalid-feedback">Please enter a image</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label" for="gen-info-email-input">Title</label>
                                                                                <input type="text" class="form-control" id="gen-info-email-input" value="{{ $slider->title }}" name="title" placeholder="Enter title" required >
                                                                                <div class="invalid-feedback">Please enter a title</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <div>
                                                                                    <label class="form-label" for="gen-info-description-input">Description</label>
                                                                                    <textarea class="form-control summernote" placeholder="Enter description" name="description" rows="2">{{ $slider->description }}</textarea>
                                                                                    <div class="invalid-feedback">Please enter a description</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <div align="right" class=" align-items-start gap-0 mt-4">
                                                                    <button type="submit" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-save-line label-icon align-middle fs-16 ms-2"></i>Save</button>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('.summernote').summernote(
                {
                    height: 250,
                    focus: true
                }
            );
        });
    </script>
@endsection
