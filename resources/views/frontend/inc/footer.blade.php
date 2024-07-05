<footer class="eduvibe-footer-one edu-footer footer-style-default">
    <div class="footer-top">
        <div class="container eduvibe-animated-shape">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="edu-footer-widget">
                        <div class="logo">
                            <a href="{{ route('front.home') }}">
                                <img style="height: 100px" class="logo-light" src="{{ asset('storage/backend/company_logo/' . $websitedata->company_logo_footer) }}" alt="{{ $websitedata->company_name }}">
                            </a>
                        </div>
                        <h5 class="widget-title mt-5">{{ $websitedata->company_name }}</h5>
                        <ul class="social-share">
                            <li><a href="https://www.facebook.com/sen.edu.np"><i class="icon-Fb"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-Pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-Twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="edu-footer-widget">
                        <h5 class="widget-title">Contact Info</h5>
                        <div class="inner">
                            <div class="widget-information">
                                <ul class="information-list">
                                    <li><i class="icon-map-pin-line"></i>{{ $websitedata->address }}
                                    </li>
                                    <li><i class="icon-phone-fill"></i><a href="tel:{{ $websitedata->primary_phone }}">{{ $websitedata->primary_phone }}</a></li>
                                    <li><i class="icon-phone-fill"></i><a href="tel:{{ $websitedata->secondary_phone }}">{{ $websitedata->secondary_phone }}</a></li>
                                    <li><i class="icon-mail-line-2"></i><a target="_blank"
                                                                           href="mailto:{{ $websitedata->primary_email }}">{{ $websitedata->primary_email }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="edu-footer-widget explore-widget">
                        <h5 class="widget-title">Explore</h5>
                        <div class="inner">
                            <ul class="footer-link link-hover">
                                <li><a href="{{ route('front.home') }}"><i class="icon-Double-arrow"></i>Home</a></li>
                                <li><a href="{{ route('front.about-us') }}"><i class="icon-Double-arrow"></i>About Us</a></li>
                                <li><a href="{{ route('front.services') }}"><i class="icon-Double-arrow"></i>Services</a></li>
                                <li><a href="{{ route('front.career') }}"><i class="icon-Double-arrow"></i>Career</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('frontend/assets/images/shapes/shape-21-01.png') }}" alt="Shape Thumb"/>
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('frontend/assets/images/shapes/shape-35.png') }}" alt="Shape Thumb"/>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area copyright-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <p>Copyright &copy; {{ now()->year }} <a href="{{ $websitedata->website_link }}" target="_blank">{{ $websitedata->company_name }}</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
