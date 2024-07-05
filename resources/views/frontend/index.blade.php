@extends('frontend.layouts.master')
@section('content')
    <div class="slider-area banner-style-3 bg-image">
        <div class="d-flex align-items-center height-500">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="inner">
                            <div class="content text-start">
                                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                Leading Nepalese Tech Innovators</h3>
                                <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                A leading software company in Nepal, known for delivering innovative and cutting-edge technology solutions.</p>

                                   
                                        <a class="edu-btn btn-medium left-icon header-button"
                                           href="{{ route('front.contact') }} " data-sal-delay="450"data-sal="slide-up"
                                            data-sal-duration="800"><i
                                                class="ri-phone-line"></i>Get in Touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-sm-none d-lg-block">
                        <div class="banner-image">
                            <div class="banner-main-image">
                                <img class="img-01" style="height: 360px" data-sal-delay="450" data-sal="slide-up"
                                     data-sal-duration="800"
                                     src="{{ asset('frontend/assets/images/banner/dashboard.png') }} "
                                     alt="Banner Images"/>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="row g-5 align-items-center">
                    
                <div class="col-lg-6 d-sm-none d-lg-block">
                        <div class="banner-image">
                            <div class="banner-main-image">
                                <img class="img-01" style="height: 360px" data-sal-delay="450" data-sal="slide-up"
                                     data-sal-duration="800"
                                     src="{{ asset('frontend/assets/images/banner/dashboard_2.png') }} "
                                     alt="Banner Images"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="inner">
                            <div class="content text-start">
                                <h3 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                                Our Story</h3>
                                <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                We began serving a wide range of clients in 2021, including government investment boards, the pharmaceutical and automobile industries, and the travel industry. Originating from the digital sector, we recognize the significance of creative and user-friendly technology in the modern world. Additionally, we have worked with several national and international brands to help them realize a wave of profitable realities.</p>

                                   
                                        <a class="edu-btn btn-medium left-icon header-button"
                                           href="{{ route('front.about-us') }}" data-sal-delay="250"data-sal="slide-up"
                                            data-sal-duration="800"></i>LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>


    
    <div class="sercice-area eduvibe-service-five eduvibe-home-three-course service-wrapper-5 edu-section-gap bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <span class="pre-title">services</span>
                        <h3 class="title">Our Services</h3>
                    </div>
                </div>
            </div>

            <div class="row g-5 mt--25">
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Migration Counseling</a></h6>
                                <p class="description">Planning to travel to another country and settle, or wanting to
                                    migrate to another country</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Education Counseling</a></h6>
                                <p class="description">Applying for further education abroad is a major decision which
                                    can be emotionally and financially draining.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Career counseling</a></h6>
                                <p class="description">Students having a hard time figuring out what they want to do,
                                    how they should advance their career</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Scholarship Guidance</a></h6>
                                <p class="description">International students who are exemplary have the benefit of
                                    obtaining scholarships and financial aid.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Interview Preparation for departure</a></h6>
                                <p class="description">Interviews for visa approval can be daunting and one of the most
                                    difficult parts of the entire process of migration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 sal-animate" data-sal-delay="150" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="service-card service-card-5">
                        <div class="inner">
                            <div class="icon">
                                <i class="icon-Schoolbag"></i>
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Visa Service</a></h6>
                                <p class="description">Before proceeding with the application our visa experts make sure
                                    that the applicant’s documents are verified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">

                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend/assets/images/shapes/shape-21.png') }}" alt="Shape Thumb">
                </div>
            </div>




        </div>
    </div>


    <div class="sercice-area eduvibe-service-five eduvibe-home-three-course service-wrapper-5 edu-section-gap bg-image">
        <div class="container eduvibe-animated-shape">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center sal-animate" data-sal-delay="150" data-sal="slide-up"
                         data-sal-duration="800">
                        <span class="pre-title">Expertise</span>
                        <h3 class="title">Our Expertise</h3>
                    </div>
                </div>
            </div>



            <div class="row g-5 mt--20">
                <div class="col-lg-12">
                    <div class="contact-info pr--70 pr_lg--0 pr_md--0 pr_sm--0">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 phone">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-Headphone"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">All Sizes Business</h6>
                                            <p>For every business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 website">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="ri-global-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Awesome Design</h6>
                                            <p>Latest tools for your design.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 email">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-mail-open-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Effective Cost</h6>
                                            <p>Under your budget.</p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up"
                                 data-sal-duration="800">
                                <div class="contact-address-card-1 location">
                                    <div class="inner">
                                        <div class="icon">
                                            <i class="icon-map-pin-line"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Ontime Delivery</h6>
                                            <p>Project deadline is yours.</p>
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





    <div class="edu-newsletter-area bg-image edu-section-gap bg-color-primary">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-white text-start" data-sal-delay="150" data-sal="slide-up"
                             data-sal-duration="800">
                            <span class="pre-title">Let Us Help</span>
                            <h3 class="title">Finding Your Right Courses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="newsletter-right-content d-block d-sm-flex align-items-center justify-content-start justify-content-lg-end">
                        <div class="contact-btn">
                            <a class="edu-btn btn-white" href="">Get Started Now<i
                                    class="icon-arrow-right-line-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
