@php
    $sppsettings = DB::table('settings')->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{$sppsettings->app_description}}">
    <meta name="keywords" content="ARCSystems">
    <meta name="author" content="Schoolville">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin Login | {{$sppsettings->app_name}}</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('/uploads/settings/'.$sppsettings->favicon)}}">
    <!-- Start css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{route('admin.login')}}" method="POST">
                                        @csrf
                                        <div class="form-head">
                                            <a href="{{url('/')}}" class="logo"><img src="{{asset('/uploads/settings/'.$sppsettings->logo)}}" class="img-fluid" alt="logo"></a>
                                        </div>
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong>Error!</strong> {{ $error }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endforeach
                                        @endif

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="username" value="{{ old('email') }}" placeholder="Enter email here" required>
                                            @error('email')
                                                <small class="text-danger text-start"> {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password here" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-6">
                                              <div class="forgot-psw">
                                                <a id="forgot-psw" href="user-forgotpsw.html" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div> --}}
                                        </div>
                                      <button type="submit" class="btn btn-primary btn-lg btn-block font-18">Log in</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!-- End js -->
</body>
</html>
