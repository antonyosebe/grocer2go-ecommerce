{{-- This page is rendered by contact() method inside Front/CmsController.php --}}
@extends('front.layout.layout')


@section('content')
    <!-- Page Introduction Wrapper -->
    <div class="page-style-a">
        <div class="container">
            <div class="page-intro">
                <h2>Contact Us</h2>
                <ul class="bread-crumb">
                    <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Introduction Wrapper /- -->
    <!-- Contact-Page -->
    <div class="page-contact u-s-p-t-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="touch-wrapper">
                        <h1 class="contact-h1">Get In Touch With Us</h1>


                        {{-- Displaying Laravel Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors --}}    
                        {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                        @if (Session::has('error_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error:</strong> {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif



                        {{-- Displaying Laravel Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors --}}    
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                @php
                                    echo implode('', $errors->all('<div>:message</div>'))
                                @endphp

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        {{-- Displaying The Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors AND https://laravel.com/docs/9.x/blade#validation-errors --}} 
                        {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                        {{-- Our Bootstrap success message in case of updating admin password is successful: --}}
                        {{-- Displaying Success Message --}}
                        @if (Session::has('success_message')) <!-- Check vendorRegister() method in Front/VendorController.php -->
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success:</strong> {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <form action="{{ url('contact') }}" method="post">
                            @csrf {{-- Preventing CSRF Requests: https://laravel.com/docs/9.x/csrf#preventing-csrf-requests --}}

                            <div class="group-inline u-s-m-b-30">
                                <div class="group-1 u-s-p-r-16">
                                    <label for="contact-name">Your Name
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="text" id="contact-name" class="text-field" placeholder="Name" name="name" value="{{ old('name') }}"> {{-- Retrieving Old Input: https://laravel.com/docs/9.x/requests#retrieving-old-input --}}
                                </div>
                                <div class="group-2">
                                    <label for="contact-email">Your Email
                                        <span class="astk">*</span>
                                    </label>
                                    <input type="email" id="contact-email" class="text-field" placeholder="Email" name="email" value="{{ old('email') }}"> {{-- Retrieving Old Input: https://laravel.com/docs/9.x/requests#retrieving-old-input --}}
                                </div>
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-subject">Subject
                                    <span class="astk">*</span>
                                </label>
                                <input type="text" id="contact-subject" class="text-field" placeholder="Subject" name="subject" value="{{ old('subject') }}"> {{-- Retrieving Old Input: https://laravel.com/docs/9.x/requests#retrieving-old-input --}}
                            </div>
                            <div class="u-s-m-b-30">
                                <label for="contact-message">Message:</label>
                                <span class="astk">*</span>
                                <textarea class="text-area" id="contact-message" name="message">{{ old('message') }}</textarea> {{-- Retrieving Old Input: https://laravel.com/docs/9.x/requests#retrieving-old-input --}}
                            </div>
                            <div class="u-s-m-b-30">
                                <button type="submit" class="button button-outline-secondary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="information-about-wrapper">
                        <h1 class="contact-h1">Information About Us</h1>
                        <p>
                            At Grocer2Go, we’re redefining the way you shop for groceries. Founded with the vision to make fresh food and household essentials more accessible, we deliver directly from your favorite local stores straight to your doorstep - quickly, reliably, and affordably.
                        </p>
                        <p>
                            Whether you're a busy professional, a parent juggling schedules, or simply want to avoid long lines, Grocer2Go is here to save you time and effort. Our platform connects you to a wide selection of fresh produce, pantry staples, snacks, and even specialty items - all available at your fingertips.
                        </p>
                        <p>
                            We believe in supporting local communities, promoting healthy living, and delivering convenience without compromise. With a user-friendly app, real-time tracking, and excellent customer support, your grocery shopping experience has never been easier.
                        </p>
                        <p>
                            Grocer2Go - Freshness at Your Fingertips.
                        </p>
                    </div>
                    <div class="contact-us-wrapper">
                        <h1 class="contact-h1">Contact Us</h1>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Location</h6>
                            <span>Sammer Lane</span>
                            <span>Ohio, US</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Email</h6>
                            <span>test@grocer2go.com</span>
                        </div>
                        <div class="contact-material u-s-m-b-16">
                            <h6>Telephone</h6>
                            <span>+0123456789</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="u-s-p-t-80">
            <div id="map"></div>
        </div> -->
    </div>
    <!-- Contact-Page /- -->
@endsection