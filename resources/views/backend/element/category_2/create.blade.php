@extends('backend.layout.app')
@section('title', 'Company Settings')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">



                        <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Create Sub Category</h4>
                                                <p class="text-muted mb-0">You can create different types of sub category for products</p>
                                            </div>
                                            <br>
                    <form class="form-horizontal mt-2" action="{{ route('category2.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        {{-- <div class="d-flex align-items-lg-center flex-lg-row flex-column"> --}}
                        <div class="row">

                            <div class="col-sm-12">
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <select class="form-control" name="mainMenu">
                                                            <option value="">-Select Main Category-</option>
                                                            @foreach ($allCategory1 as $allCategory1s)
                                                                <option value="{{ $allCategory1s->id }}">{{ $allCategory1s->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-2" id="basic-addon1">Name</span>
                                                        <input type="text" class="form-control" aria-label="Name" id="name" name="name" onkeyup="handle()"  aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text col-sm-2" id="basic-addon1">Slug</span>
                                                        <input type="text" class="form-control" aria-label="Slug" id="slug" name="slug" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                        <div class="form-check form-switch form-switch-info mb-3">
                                                            <input class="form-check-input" type="checkbox" role="switch" name="status" checked>
                                                            <label class="form-check-label" for="SwitchCheck6">Switch Info</label>
                                                        </div>
                                                </div>
                                            </div>
                        </div>
                


                    </div>
                    <div align="right">
                        <button class="btn btn-success" type="submit" id="uploadPercent">
                            <i class="bx bx-save text-light"></i>
                        Save
                        </button>
                                        
                    </div>
                    <br>
                </div>
            </div>
        </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var tag_input = $('#form-field-tags');
            try {
                tag_input.tag({
                    placeholder: tag_input.attr('placeholder'),
                })
    
                var $tag_obj = $('#form-field-tags').data('tag');
                var index = $tag_obj.inValues('some tag');
                $tag_obj.remove(index);
            } catch (e) {
                tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' +
                    tag_input.val() + '</textarea>').remove();
            }
        </script>
    
        <script>
            function handle(e){
                let pageNameValue = document.getElementById('name').value;
                console.log(pageNameValue)
                document.getElementById('slug').value = "/"+pageNameValue.replaceAll(" ", "-");
            }
        </script>
@endsection
