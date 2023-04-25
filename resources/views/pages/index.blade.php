@extends('layouts.home')

@section('title')
    Home
@endsection

@section('content')

    <section class="welcome-section" id="#home">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-7 mt-5">
                    <div class="d-flex align-item-center">
                        <div class="welcome-text">
                            {!!$hero->title!!}
                            {!!$hero->subtitle!!}
                            <a href="" class="btn btn-lg btn-outline-light">{{$hero->button}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <div>
                        <img src="{{asset('/uploads/hero/'.$hero->image)}}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-bg pt-5" id="about">
        <div class="container about-container">
            <div class="about-heading-wrapper">
                <p class="about-heading">About <span class="arc">ARC</span><span class="system">System</span></p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-us">

                            {!!$about->text!!}

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="imgs-from-ui">
                        <div class="img-top" style="background: url({{asset('/uploads/about/'.$about->image1)}})"></div>
                        <div class="img-behind" style="background: url({{asset('/uploads/about/'.$about->image2)}})"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="features" style="background: url({{ asset('home/images/bkg.png') }}); height: 461px"  id="features">
        <div class="">
            <div class="text-center features-main-heading">
                <p class="text-white text-center our-features-heading">Features</p>
            </div>
            <div class="row my-5">
                <div class="owl-carousel owl-theme">
                    @foreach ($features as $feature)
                      <div class="owl-stage-outer">
                        <div class="features-card mb-5" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{asset('/uploads/features/'.$feature->icon)}}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">{{$feature->title}}</p>
                                    </div>
                                    <p>
                                        {{$feature->text}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="owl-stage-outer">
                        <div class="features-card mb-5" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{ asset('home/images/feature1.svg') }}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">Demand Notice</p>
                                    </div>
                                    <p>
                                        ARCSystems generate electronic invoices that can be sent directly to taxpayers via email, reducing the need for paper-based invoices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-stage-outer">
                        <div class="features-card mb-5" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{ asset('home/images/feature4.svg') }}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">Robost Reporting</p>
                                    </div>
                                    <p>
                                        The system provides robust reporting capabilities, enabling administrators to track revenue collection, identify trends, and generate reports for analysis and planning.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-stage-outer">
                        <div class="features-card mb-5" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{ asset('home/images/feature3.svg') }}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">Security</p>
                                    </div>
                                    <p>
                                        The system provides  robust security measures to protect taxpayer data and prevent fraud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-stage-outer">
                        <div class="features-card mb-5 mx-4" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{ asset('home/images/feature2.svg') }}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">Scalability</p>
                                    </div>
                                    <p>
                                        The system is capable of handling a high volume of transactions and be easily scalable as the number of taxpayers and revenue sources grows.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>

    <section class="my-5 revenue-section" id="revenue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4 rev-heading">
                        <h3>Revenue</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            {!!$revenues->text!!}
                        </div>
                        <div class="col-lg-4 revenue-section-img">
                            <img src="{{asset('/uploads/revenue/'.$revenues->image)}}" alt="">
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 my-5" id="collection">
                    <div class="mb-4 rev-heading">
                        <h3>Collection</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            {!!$collections->text!!}
                        </div>
                        <div class="col-lg-4 revenue-section-img">
                            <img src="{{asset('/uploads/collections/'.$collections->image)}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" id="clients">
                    <div class="mb-4 text-center">
                        <h3 class="our-clients-heading">Our Clients</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="our-clients"  style="height: 285px">
           <div class="row">
                <div class="loop owl-carousel owl-theme pt-5">
                    @foreach ($clients as $client)
                       <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{asset('/uploads/clients/'.$client->logo)}})"></div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
                    <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
                    <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
                    <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
                    <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
                    <div class="item clients-circle mt-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div> --}}
                </div>
           </div>
        </div>
    </section>

    <section id="contacts">
        <div class="container">
            <div class="my-5 text-center">
                <p class="transform-text">
                    "Transform Your Revenue Collection Process with Our Automated Solution
                    - Streamline Payments, Increase Efficiency and Boost Revenue"
                </p>
            </div>

            <div class="my-5 text-center">
                <h3 class="get-touch mb-0">Get in touch</h3>
                <p class="description">A short description goes here</p>
            </div>

            <div class="row px-3">
                <div class="col-lg-9 position-relative">
                    <img class="bell" src="{{ asset('home/images/bell.svg') }}" alt="" style="
                    width: 300px;
                    position: absolute;
                    left: -154px;
                    top: -167px;">
                    <form action="{{route('admin.contactus')}}" class="get-intouch-form" style=" position: inherit; z-index: 100" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control p-3" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control p-3" name="email" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-12 my-3">
                                <textarea name="message" placeholder="Your Message" class="p-3"></textarea>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary py-3 fs-4" style="background: #022539 !important">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="contact-details-block p-4">
                        <div class="address-heading">
                            <p>Email</p>
                            <p><strong>{{$settings->email}}</strong></p>
                        </div>

                        <div class="address-heading">
                            <p>Phone</p>
                            <p>
                                <strong>
                                    {{$settings->phone_number}}
                                </strong>
                            </p>
                        </div>

                        <div class="address-heading">
                            <p>Fax</p>
                            <p>
                                <strong>
                                    {{$settings->phone_number}}
                                </strong>
                            </p>
                        </div>

                        <div class="address-heading">
                            <p>Address</p>
                            <p>
                                <strong>
                                    {{$settings->address}}
                                </strong
                            ></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <footer class="">
            <div class="footer-wrapper">
                <div class="container-fliud text-white">
                    <div class="d-flex justify-content-center py-3" style="border-bottom: solid 1px #fff">
                        <img src="{{asset('/uploads/settings/'.$settings->footer_logo)}}" alt="logo" height="150px" width="200px">
                    </div>
                    <div class="footer-two-content py-5 px-3 mb-5 d-flex justify-content-md-center justify-content-xxl-center justify-content-lg-center" style="border-bottom: solid 1px #fff">
                        <div class="address-block mb-3">
                            <div class="">
                                {{-- <p><strong>Schoolville Training Centre, North-Central Region</strong></p> --}}
                                <div class="d-flex justify-content-start pb-3">
                                    <div class="d-flex align-items-baseline pt-1">
                                        <img src="{{ asset('home/images/MapPin.svg') }}" alt="">
                                    </div>
                                    <p class="ps-2"> {{$settings->address}}</p>
                                </div>
                                <p class="pb-3"><img src="{{ asset('home/images/PhoneCall.svg') }}" alt=""> {{$settings->phone_number}};</p>
                                <p><img src="{{ asset('home/images/EnvelopeSimple.svg') }}" alt=""> {{$settings->email}}</p>
                            </div>
                        </div>
                        <div class="footer-two-news-letter">
                            <div class="subscribe-form">
                                <form method="POST" action="">
                                    <p>Subscribe to our Newsletter</p>
                                    <input type="email" placeholder="Enter your email address">
                                    <input type="submit" value="Subscribe">
                                    <div class="pt-4 social-icon-wrapper">
                                        <a href="https://instagram.com/schoolville_" target="_blank"><img src="{{ asset('home/images/bxl_instagram-alt.svg') }}" alt=""></a>
                                        <a href="https://facebook.com/schoolville" target="_blank"><img src="{{ asset('home/images/akar-icons_facebook-fill.svg') }}" alt=""></a>
                                        <a href="https://twitter.com/infoschoolville?s=11" target="_blank"><img src="{{ asset('home/images/codicon_twitter.svg') }}" alt=""></a>
                                        <a href="" target="_blank"><img src="{{ asset('home/images/typcn_social-youtube-circular.svg') }}" alt=""></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-lg-4">
                            <div class="text-center">
                                <span>Support:</span>
                                <a href="mailto:info@schoolville.com">{{$settings->email}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center footer-policy-links">
                                A Product of Schoolville
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center">
                                <span>{{$settings->copywrite_text}} - {{\Carbon\Carbon::now()->format('Y')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-4 footer-color-bars-1"></div>
                <div class="col-lg-4 col-4 footer-color-bars-2"></div>
                <div class="col-lg-4 col-4 footer-color-bars-3"></div>
            </div>
        </div>
    </section>
@endsection
