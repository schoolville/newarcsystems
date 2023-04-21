@extends('auth.layouts.admin')

@section('title')
    Hero
@endsection

@section('styles')
    <!-- Summernote css -->
    <link href="{{asset('assets/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">
    <!-- Code Mirror css -->
    <link href="{{asset('assets/plugins/code-mirror/codemirror.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Hero</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hero</li>
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
                    <form action="{{url('admin/update-hero/'.$hero->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-12">
                           <div class="form-group mb-3">
                                <label for="">Title</label>
                                <textarea id="tinymce-example" name="title">{{$hero->title}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group mb-3">
                                <label for="">Subtitle</label>
                                <textarea id="tinymce-example" name="subtitle">{{$hero->subtitle}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group mb-3">
                                <label for="">Button Text</label>
                                <input type="text" name="button" id="" class="form-control" value="{{$hero->button}}">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mb-3">
                                 <label for="">Image</label><br>
                                 <img src="{{asset('/uploads/hero/'.$hero->image)}}" alt="Thumbnail Image" id="d_logo" class="img-thumbnail">
                                 <input type="file" class="form-control" id="logo" name="image">
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
     <!-- Wysiwig js -->
     <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
      <!-- Code Mirror JS -->
    <script src="{{asset('assets/plugins/code-mirror/codemirror.js')}}"></script>
    <script src="{{asset('assets/plugins/code-mirror/htmlmixed.js')}}"></script>
    <script src="{{asset('assets/plugins/code-mirror/css.js')}}"></script>
    <script src="{{asset('assets/plugins/code-mirror/javascript.js')}}"></script>
    <script src="{{asset('assets/plugins/code-mirror/xml.js')}}"></script>
    <script src="{{asset('assets/js/custom/custom-form-editor.js')}}"></script>
    <script>
        $('#logo').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#d_logo').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });

    </script>

@endsection
