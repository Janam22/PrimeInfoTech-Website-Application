@if(Request::is('/'))
    <header class="edu-header header-sticky header-transparent header-style-2 header-default">
@else
    <header class="edu-header header-sticky disable-transparent header-style-2 header-default">
@endif


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('front.home') }}">
                        <img class="logo-image" src="{{ asset('storage/backend/company_logo/' . $websitedata->company_logo_header) }}" alt="{{ $websitedata->company_name }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-6 col-6 d-flex justify-content-end">
                <nav class="mainmenu-nav d-none d-lg-block ml-auto">
                <ul class="mainmenu d-flex">
                    <li class="active">
                        <a href="{{ route('front.home') }}">Home</a>
                    </li>
                    <li class="">
                        <a href="{{ route('front.about-us') }}">About Us</a>
                    </li>
                    <li class="">
                        <a href="{{ route('front.services') }}">Services</a>
                    </li>
                    <li class="">
                        <a href="{{ route('front.career') }}">Career</a>
                    </li>
                    
                    <li class="">
                        <a href="{{ route('front.contact') }}">Contact</a>
                    </li>
                </ul>

                </nav>
                <div class="header-right d-flex align-items-center">
                    <div class="header-menu-bar">

                        <div class="quote-icon quote-user d-block d-md-none ml--15 ml_sm--5">
                            <a class="white-box-icon" href=""><i class="ri-phone-line"></i></a>
                        </div>
                    </div>
                    <div class="mobile-menu-bar ml--15 ml_sm--5 d-block d-xl-none">
                        <div class="hamberger">
                            <button class="white-box-icon hamberger-button header-menu">
                                <i class="ri-menu-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo">
                <a href="">
                    <img src="{{ asset('storage/backend/company_logo/' . $websitedata->company_logo_header) }}" alt="{{ $websitedata->company_name }}">
                </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="ri-close-line"></i>
                </button>
            </div>
        </div>
        <ul class="mainmenu">
            <li><a href="{{ route('front.home') }}">Home</a></li>
            <li><a href="">About Us</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Career</a></li>
            <li><a href="#">Get in Touch</a></li>
        </ul>
    </div>
</div>
