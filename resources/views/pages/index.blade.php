@extends('layouts.home')

@section('title')
    Arcsystem
@endsection

@section('content')

    <section class="welcome-section" id="#home">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-lg-7 mt-5">
                    <div class="d-flex align-item-center">
                        <div class="welcome-text">
                            <h1>
                                Streamline Your Revenue Collection with
                                <span class="welcome-heading">our Automated Payment Solutions</span>
                            </h1>
                            <p class="py-3">An essential tool for modern organizations looking to stay competitive in a fast-paced, technology-driven business environment.</p>
                            <a href="" class="btn btn-lg btn-outline-light">Book consultation</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <div>
                        <img src="{{ asset('home/images/computers.svg') }}" alt="" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-bg pt-5" id="about">
        <div class="container about-container">
            <div class="">
                <p class="about-heading">About <span class="arc">ARC</span><span class="system">System</span></p>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-us">
                        <p>
                            Automated Revenue & Collection System (ARCSystems) is a technology-based solution that enables the efficient and effective collection of revenue from various sources. Our systems used to streamline the process of revenue collection, reduce errors and fraud, and improve overall revenue management.
                            ARCSystems can be designed to handle various revenue collection tasks, including the collection of taxes, fees, fines, and other charges.
                            One of the key benefits of an ARCSystems is that it can reduce the burden on manual processes and the associated costs. For example, it can reduce the need for paper-based records and manual data entry, which can be time-consuming and error-prone. ARCSystems can also improve the accuracy of revenue collection, as automated systems can identify errors and discrepancies more quickly than manual processes.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="imgs-from-ui">
                        <div class="img-top" style="background: url({{ asset('home/images/bg-green.png') }})"></div>
                        <div class="img-behind" style="background: url({{ asset('home/images/bg-blue.png') }})"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background: url({{ asset('home/images/bkg.png') }})" class="features" id="features">
        <div class="text-center text-white features-main-heading">
            <p>Features</p>
        </div>
        <div class="container-fliud">
            <div class="row">
                <div class="loop owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="features-card mb-5" style="">
                            <div class="border-0 shadow rounded">
                                <div class="feature-body">
                                    <div class="d-flex align-items-center mb-2 features-heading">
                                        <img src="{{ asset('home/images/feature1.svg') }}" alt="" style="width: 40px !important">
                                        <p class="ps-2 mb-0">Online Payment</p>
                                    </div>
                                    <p>
                                        ARCSystems allows users to process online payments, enabling taxpayers to pay their taxes or fees using credit cards, debit cards, or other online payment methods.
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 revenue-section" id="revenue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-4">
                        <h3>Revenue</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>
                                Revenue in an Automated Revenue Collection Systems refers to the income generated by the government from various sources, such as taxes, fees, fines, and charges.
                                An Automated Revenue Collection Systems automates the process of collecting revenue by providing an electronic platform that enables taxpayers or customers to pay their taxes or fees online, The system then collects and processes the payment, updates the taxpayer's account, and generates reports to track revenue collection and monitor payment trends.
                            </p>
                        </div>
                        <div class="col-lg-4 revenue-section-img">
                            <img src="{{ asset('home/images/naira.svg') }}" alt="">
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 my-5" id="collection">
                    <div class="mb-4">
                        <h3>Collection</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>
                                In an Automated Revenue Collection Systems, a collection refers to the process of gathering payments or funds from individuals or entities that owe money to a government agency. A collection can include various forms of payment, such as cash, checks, credit card transactions, electronic funds transfers, or any other payment method accepted by the agency or organization.
                                Collections are a critical component of revenue generation for many organizations, and an automated revenue collection system streamlines the process by automating the collection of payments, reducing errors, and improving efficiency.
                            </p>
                        </div>
                        <div class="col-lg-4 revenue-section-img">
                            <img src="{{ asset('home/images/card.svg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-12" id="clients">
                    <div class="mb-4 text-center">
                        <p class="our-clients-heading">Our Clients</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fliud our-clients">
           <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item clients-circle my-4">
                        <div class="border-0 shadow rounded">
                            <div class="clients-circle" style="background: url({{ asset('home/images/client.svg') }})"></div>
                        </div>
                    </div>
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
                <p class="get-touch mb-0">Get in touch</p>
                <p class="description">A short description goes here</p>
            </div>

            <div class="row px-3">
                <div class="col-lg-9">
                    <form action="" class="get-intouch-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control p-3" placeholder="Enter your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control p-3" placeholder="Enter your email" required>
                            </div>

                            <div class="col-md-12 my-3">
                                <textarea name="" placeholder="Your Message" class="p-3"></textarea>
                            </div>

                            <div class="d-grid gap-2 mb-3">
                                <a href="#" class="btn btn-primary py-3 fs-4" style="background: #022539 !important">SEND MESSAGE</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 mb-3">
                    <div class="contact-details-block p-4">
                        <div class="address-heading">
                            <p>Email</p>
                            <p><strong>info@arcsystems.ng</strong></p>
                        </div>

                        <div class="address-heading">
                            <p>Phone</p>
                            <p>
                                <strong>
                                    +234 (0)803-741-6107 <br>
                                    +234 (0)803-741-6107 <br>
                                    +234 (0)803-741-6107
                                </strong>
                            </p>
                        </div>

                        <div class="address-heading">
                            <p>Fax</p>
                            <p>
                                <strong>
                                    +234 (0)803-741-6107 <br>
                                    +234 (0)803-741-6107 <br>
                                    +234 (0)803-741-6107
                                </strong>
                            </p>
                        </div>

                        <div class="address-heading">
                            <p>Address</p>
                            <p>
                                <strong>
                                    #110, 3rd Avenue, Gwarimpa,FCT, Abuja
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
                        <img src="{{ asset('home/images/logo-white.svg') }}" alt="logo">
                    </div>
                    <div class="footer-two-content py-5 px-3 mb-5 d-flex justify-content-md-center justify-content-xxl-center justify-content-lg-center" style="border-bottom: solid 1px #fff">
                        <div class="address-block mb-3">
                            <div class="">
                                {{-- <p><strong>Schoolville Training Centre, North-Central Region</strong></p> --}}
                                <div class="d-flex justify-content-start pb-3">
                                    <div class="d-flex align-items-baseline pt-1">
                                        <img src="{{ asset('home/images/MapPin.svg') }}" alt="">
                                    </div>
                                    <p class="ps-2"> #110, 3rd Avenue, Gwarimpa, FCT, Abuja</p>
                                </div>
                                <p class="pb-3"><img src="{{ asset('home/images/PhoneCall.svg') }}" alt=""> +234 09032432994;</p>
                                <p><img src="{{ asset('home/images/EnvelopeSimple.svg') }}" alt=""> info@schoolville.com</p>
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
                                <a href="mailto:info@schoolville.com">info@schoolville.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center footer-policy-links">
                                A Product of Schoolville
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center">
                                <span>All rights reserved &copy; Copyright 2013-2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection
