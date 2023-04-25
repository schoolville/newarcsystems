<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$settings->app_description}}">
    <meta name="keywords" content="ARCSystems">
    <meta name="author" content="Schoolville">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{$settings->app_name}}</title>
     <!-- Fevicon -->
     <link rel="shortcut icon" href="{{asset('/uploads/settings/'.$settings->favicon)}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{-- 1. Owl carousel min.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- 2. Owl carousel theme.min.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container-fluid p-0">
        {{-- Navbar here--}}
        @include('includes.header')
        {{-- Navbar ends --}}

        @yield('content')

        @include('includes.footer')

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"  style="border: 2px 0 0 0 solid #FB991C;">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Book Consultation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('admin.contactus')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="name"> Name: </label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Please Enter Your Fullname" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email"> Email: </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Please Enter Your Email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message"> Message: </label>
                            <textarea name="message" class="form-control" name="message" id="message" rows="4" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn" style="background-color: #FB991C; color:#fff;">Send</button>
                    </div>
                </form>
            </div>
            </div>
        </div>

   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
   {{-- Owl Carousel min.js --}}
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <script>
       $('.owl-carousel').owlCarousel({
            loop:false,
            margin:15,
            nav:true,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });

        $('.loop').owlCarousel({
            loop:true,
            margin:15,
            nav:true,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
   </script>
   @if (session('success'))
   <script>
    Command: toastr["success"]("{{session('success')}}", "Success")
        toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
   </script>
   @endif
</body>
</html>
