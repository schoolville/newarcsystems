@extends('auth.layouts.admin')

@section('title')
    Settings
@endsection

@section('styles')
<link href="{{asset('assets/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Website Settings</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Website Settings</li>
                </ol>
            </div>
        </div>
        {{-- <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div>
        </div> --}}
    </div>
</div>
<!-- End Breadcrumbbar -->

<!-- Start Contentbar -->
<div class="contentbar">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->

        <!-- End col -->
        <!-- Start col -->
        <div class="col-12">
            <div class="card m-b-30">

                <div class="card-body">
                    <form action="{{url('admin/update-settings/'.$settings->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">App Name</label>
                                <input type="text" class="form-control" name="app_name" value="{{$settings->app_name}}" id="inputText" placeholder="Enter App Name" required>
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">Company Address</label>
                                <input type="text" class="form-control" name="address" value="{{$settings->address}}" id="inputText" placeholder="Enter Address" required>
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">Company Phone</label>
                                <input type="text" class="form-control" value="{{$settings->phone_number}}" name="phone_number" id="inputText" placeholder="Enter Company Phone" required>
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">Company Email</label>
                                <input type="email" class="form-control" name="email" value="{{$settings->email}}" id="inputText" placeholder="Enter Company Email" required>
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">Copywrite Text</label>
                                <input type="text" class="form-control" value="{{$settings->copywrite_text}}" name="copywrite_text" id="inputText" placeholder="Enter Copywrite Text">
                            </div>
                        </div>
                        <div class="col-6">
                           <div class="form-group mb-3">
                                <label for="">Company Description</label>
                                <textarea type="text" class="form-control" name="app_description" id="inputText" rows="4">{{$settings->app_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                 <label for="">Company Logo</label><br>
                                 <img src="{{asset('/uploads/settings/'.$settings->logo)}}" alt="Thumbnail Image" id="d_logo" class="img-thumbnail">
                                 <input type="file" class="form-control" id="logo" name="logo">
                             </div>
                         </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                 <label for="">Footer Logo</label><br>
                                 <img src="{{asset('/uploads/settings/'.$settings->footer_logo)}}" alt="Thumbnail Image" id="d_footer_logo" class="img-thumbnail">
                                 <input type="file" class="form-control" name="footer_logo" id="footer_logo">
                             </div>
                         </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                 <label for="">Favicon</label><br>
                                 <img src="{{asset('/uploads/settings/'.$settings->favicon)}}" alt="Thumbnail Image" id="d_favicon" class="img-thumbnail">
                                 <input type="file" class="form-control" name="favicon" id="favicon">
                             </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" value="Update" class="btn btn-primary btn-lg w-100">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <!-- End col -->

    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection

@section('scripts')
<!-- Dropzone js -->
<script src="{{asset('assets/plugins/dropzone/dist/dropzone.js')}}"></script>

<script>
    $('#logo').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#d_logo').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    $('#footer_logo').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#d_footer_logo').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    $('#favicon').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#d_favicon').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
@endsection
