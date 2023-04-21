@extends('auth.layouts.admin')

@section('title')
    Clients
@endsection

@section('styles')
    <!-- DataTables css -->
    <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Our Clients</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Our Clients</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Clients</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary-rgba" data-toggle="modal" data-target="#exampleModalCenter"><i class="feather icon-plus mr-2"></i>Add New</button>
            </div>
        </div>
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
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">

                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td><img src="{{asset('/uploads/clients/'.$client->logo)}}" alt="Rounded Image" class="rounded-circle"></td>
                                    <td><strong>{{$client->name}}</strong></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" onclick="editt({{$client->id}});" class="btn btn-outline-success"><i class="feather icon-upload mr-2"></i> Update</button>
                                            &nbsp;
                                            <button type="button" onclick="del({{$client->id}});" class="btn btn-outline-danger"><i class="feather icon-trash-2 mr-2"></i> Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('admin.clients.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group mb-3">
                             <label for="">Client Name</label>
                             <input type="text" class="form-control" name="name" value="" id="inputText" placeholder="Enter Client Name" required>
                         </div>
                     </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                             <label for="">Client Logo</label><br>
                             <img src="{{asset('assets/images/ui-images/image-thumbnail.jpg')}}" alt="Thumbnail Image" id="d_logo" class="img-thumbnail">
                             <input type="file" class="form-control" id="logo" name="logo">
                         </div>
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenter1Title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data" class="editform">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="form-group mb-3">
                             <label for="">Client Name</label>
                             <input type="text" class="form-control cname" name="name" value="" id="inputText" placeholder="Enter Client Name" required>
                         </div>
                     </div>
                    <div class="col-12">
                        <div class="form-group mb-3">
                             <label for="">Client Logo</label><br>
                             <img src="{{asset('assets/images/ui-images/image-thumbnail.jpg')}}" alt="Thumbnail Image" id="cd_logo" class="img-thumbnail">
                             <input type="file" class="form-control" id="logo" name="logo">
                         </div>
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Contentbar -->
@endsection
@section('scripts')
    <!-- Datatable js -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/custom/custom-table-datatable.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script>
        $('#logo').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#d_logo').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    function editt(value) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "get",
                url: "{{url('admin/get-clients')}}/"+value,
                success: function (response) {
                    $('#exampleModalCenter1').modal('show');
                    $('.cname').val(response['data']['name']);
                    $('#cd_logo').attr('src', "/uploads/clients/"+response['data']['logo']);
                    $('.editform').attr('action', "{{url('admin/update-client')}}/"+value);
                    // console.log(response);
                }
            });

    }

    function del(value) {
            $.confirm({
                title: 'Confirm!',
                content: 'Are you Sure?',
                type: 'blue',
                autoClose: 'cancelAction|8000',
                buttons: {
                    tryAgain: {
                        text: 'Delete',
                        btnClass: 'btn-red',
                        action: function(){
                          window.open("{{url('admin/delete-clients')}}/"+value, "_self");
                        }
                    },
                    cancelAction: {
                        text: 'Cancel',
                        btnClass: 'btn-blue',
                        action: function(){
                            //do nothing
                        }
                    }
                }
            });
        }
    </script>
@endsection
