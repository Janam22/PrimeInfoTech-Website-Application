@extends('frontend.layouts.master')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="edu-contact-us-area eduvibe-contact-us edu-section-gap bg-color-white">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <span class="pre-title">Contact</span>
                        <h3 class="title">Get In Touch With us</h3>
                    </div>
                </div>
            </div>
            
            <div class="row g-5 mt--20">
                <div class="col-lg-7">
                    <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                        <div class="row g-5">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 phone">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-Headphone"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Call Us On</h6>
                                            <p><a href="tel:{{ $websitedata->primary_phone }}">{{ $websitedata->primary_phone }}</a></p>
                                            <p><a href="tel:{{ $websitedata->secondary_phone }}">{{ $websitedata->secondary_phone }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 website">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="ri-global-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Our Website</h6>
                                            <p><a href="{{ $websitedata->website_link }}"
                                                  target="_blank">{{ $websitedata->website_link }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 email">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-mail-open-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Email Us</h6>
                                            <p><a href="mailto:{{ $websitedata->primary_email }}" target="_blank">{{ $websitedata->primary_email }}</a>
                                            <p><a href="mailto:{{ $websitedata->secondary_email }}" target="_blank">{{ $websitedata->secondary_email }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 location">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-map-pin-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Our Location</h6>
                                            <p>{{ $websitedata->address }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <form class="rnt-contact-form rwt-dynamic-form row"  method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        @if (\Session::has('success-msg'))
                            <div class="alert alert-success">
                                {{ Session::get('success-msg') }}
                            </div>
                        @endif
                        @if (\Session::has('error-msg'))
                            <div class="alert alert-danger">
                                {{ Session::get('error-msg') }}
                            </div>
                        @endif
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input name="name" id="full_name" type="text"
                                       class="form-control form-control-lg" placeholder="Full Name*" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="email"
                                       name="email" placeholder="Email*" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="phone"
                                       id="phone" placeholder="Phone*" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message"
                                          placeholder="Other"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="rn-btn edu-btn w-100" type="submit">
                                <span>Submit Now</span><i class="icon-arrow-right-line-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image scene shape-image-1">
                    <span data-depth="-2.2">
                        <img src="{{ asset('frontend/assets/images/shapes/shape-04-01.png') }}" alt="Shape Thumb">
                    </span>
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend/assets/images/shapes/shape-02-08.png') }}" alt="Shape Thumb">
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('frontend/assets/images/shapes/shape-15.png') }}" alt="Shape Thumb">
                </div>
            </div>
        </div>
    </div>
<!-- 
    <div class="edu-contact-map-area edu-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map alignwide" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <iframe class="radius-small"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.518540916042!2d85.31987421487109!3d27.701271782794397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c75c2026e3%3A0x11359512711210a5!2sSunrise%20Education%20Network%20Pvt%20Ltd.!5e0!3m2!1sen!2snp!4v1658070992725!5m2!1sen!2snp"
                                height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

@endsection
