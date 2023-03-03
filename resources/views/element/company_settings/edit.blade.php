@extends('layout.app')
@section('title', 'Company Settings')
@section('content')
<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">



                        <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">Edit Company Settings</h4>
                                                <p class="text-muted mb-0">You can controll your website icon, logo, name, address etc from here</p>
                                            </div>
                                            <br>
                    <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 align="center" class="header black">Company Info</h4>
                                <div align="center" class="row">
                                    <div align="left" class="col-sm-3">
                                        <br>Favicon
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-sm-12">

                                    <div class="dropzone">
                                        
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                            </div>

                                            <h5>Drop files here or click to upload.</h5>
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

                                        </div>
                                    </div>
                                    <div align="center" class="col-sm-3">
                                        <br><img src="{{$CompanyInformation->favicon}}" style="width: 150px;height:150px" alt="">
                                    </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Name</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->name}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Title</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->title}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Phone 1</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->phone_one}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Phone 2</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->phone_two}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Hotline</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->hotline}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Primary Email</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->primary_email}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Secondary Email</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->secondary_email}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Primary Address</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->address}}">
                                                    </div>
                                                </div>
                                </div>

                            </div>

                            <div class="col-sm-6">
                                <h4 align="center" class="header black">Company Details Info</h4>
                                <div align="center" class="row">
                                    <div align="right" class="col-sm-3">
                                        <br>Company Logo
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">Profile Picture Selection</h4>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="avatar-xl mx-auto">
                                                <input type="file" class="filepond filepond-input-circle" name="filepond" accept="image/png, image/jpeg, image/gif" />
                                            </div>

                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->
                                    <div align="left" class="col-sm-3">
                                        <br><img src="{{$CompanyInformation->company_logo}}" style="width: 150px;height:150px" alt="">
                                    </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Website</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->website}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Bin No</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->bin_no}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Goole Map</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->google_map}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Facebook Page Id</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->facebook_page_id}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Secondary Address</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->name}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Meta Keyword</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->meta_keyword}}">
                                                    </div>
                                                </div>
                                </div>
                                <br>
                                <div align="center" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="basic-addon1">Meta Description</span>
                                                        <input type="text" class="form-control" aria-label="Name" aria-describedby="basic-addon1" value="{{$CompanyInformation->meta_description}}">
                                                    </div>
                                                </div>
                                </div>
                                <br><br><br><br>
                                <div align="right" class="row">
                                    <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <button class="btn btn-success" type="button" id="uploadPercent" onclick="updateCompany()">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Update
                                </button>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div>
                


                    </div>
            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


<script>
    function updateCompany(){
        let favicon = document.getElementById("favicon").files[0];
        let name = document.getElementById("name").value;
        let title = document.getElementById("title").value;
        let phoneOne = document.getElementById("phoneOne").value;
        let phoneTwo = document.getElementById("phoneTwo").value;
        let hotLine = document.getElementById("hotLine").value;
        let primaryEmail = document.getElementById("primaryEmail").value;
        let secondaryEmail = document.getElementById("secondaryEmail").value;
        let primaryAddress = document.getElementById("primaryAddress").value;
        let websiteLogo = document.getElementById("companyLogo").files[0];
        let website = document.getElementById("website").value;
        let binNO = document.getElementById("binNo").value;
        let googleMap = document.getElementById("googleMap").value;
        let facebookPageId = document.getElementById("facebookPageId").value;
        let secondaryAddress = document.getElementById("secondaryAddress").value;
        let metaKeyword = document.getElementById("metaKeyword").value;
        let metaDescription = document.getElementById("metaDescription").value;


        let url = "{{ route('companySettings.update', '1') }}";
        let allData = new FormData();
        allData.append("Favicon", favicon);
        allData.append("Name", name);
        allData.append("Title", title);
        allData.append("PhoneOne", phoneOne);
        allData.append("PhoneTwo", phoneTwo);
        allData.append("HotLine", hotLine);
        allData.append("PrimaryEmail", primaryEmail);
        allData.append("SecondaryEmail", secondaryEmail);
        allData.append("PrimaryAddress", primaryAddress);
        allData.append("CompanyLogo", websiteLogo);
        allData.append("Website", website);
        allData.append("BinNO", binNO);
        allData.append("GoogleMap", googleMap);
        allData.append("FacebookPageId", facebookPageId);
        allData.append("SecondaryAddress", secondaryAddress);
        allData.append("MetaKeyword", metaKeyword);
        allData.append("MetaDescription", metaDescription);
        let configuration = {headers:{"content-type" : "multipart/form-data"},
            onUploadProgress: function (progressEvent) {
                let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
                document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
            }
        };

        axios.post(url, allData, configuration).then(
            function () {
                location.reload();
            }
        ).catch(
            function (error) {
                alert("Error...try again");
                location.reload();
            }
        )

    }
</script>
@endsection
