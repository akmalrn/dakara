<header class="srex-header srex-header--home-one">
    <div class="container">
        <nav class="ud-main-menu ud-main-menu--home-one d-flex align-items-center justify-content-between"
            aria-label="Main Navigation" style="max-width: 1190px; width : 1190px;">
            <div class="ud-main-menu__logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset($configuration->path ?? '') }}" alt="{{ $configuration->title ?? '' }}" width="100px">
                </a>
            </div>
            <ul class="ud-main-menu__links d-none d-lg-flex">
                <li>
                    <a href="{{ route('index') }}" style="font-size: small">Home</a>
                </li>
                <li>
                    <a href="#" style="font-size: small">About Us <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="ud-main-menu__sub-menu">
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li><a href="{{ route('trainer') }}">Trainer</a></li>
                        <li><a href="index-3.html">Download Company Profile/Brochure</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" style="font-size: small">Training Activities <i
                            class="fa-solid fa-angle-down"></i></a>
                    <ul class="ud-main-menu__sub-menu">
                        <li><a href="{{ route('schedule') }}">Schedule Of Activities</a></li>
                        <li><a href="{{ route('registrasi') }}">Registration</a></li>
                        <li><a href="{{ route('certificate') }}">Certification</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" style="font-size: small">LCA Assistance & Arrangement <i
                            class="fa-solid fa-angle-down"></i></a>
                    <ul class="ud-main-menu__sub-menu">
                        <li><a href="{{ route('consultant') }}">consultant</a></li>
                        <li>
                            <a href="{{ route('pendampingan') }}">LCA Calculation Assistance</a>
                        </li>
                        <li>
                            <a href="{{ route('penyusun') }}">Preparation Of Proper LCA Documents</a>
                        </li>
                        <li>
                            <a href="{{route('galeri')}}">LCA Companion Gallery</a>
                        </li>
                        <li>
                            <a href="{{route('news')}}">LCA Assistance News</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('index')}}" style="font-size: small">LCA Indonesia Publishing</a>
                </li>
                <li>
                    <a href="{{ route('galeri') }}" style="font-size: small">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" style="font-size: small">Contact Us</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}" style="font-size: small">Blog</a>
                </li>
                <li>
                    <a href="{{ route('videos') }}" style="font-size: small">Videos</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Side Popup -->
    <div class="ud-side-popup ud-side-popup--home-one">
        <div class="ud-side-popup__header">
            <div class="ud-side-popup__header-logo">
                <img src="./{{ asset($configuration->path ?? '') }}" alt="{{ $configuration->title ?? '' }}">
            </div>
            <button class="side-popup-close">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="ud-side-popup__body">
            <ul class="metismenu" id="side-menu">
                <li>
                    <a href="#">
                        Home <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false">
                        <li>
                            <a href="{{ route('index') }}">Home 1</a>
                        </li>
                        <li>
                            <a href="index-2.html">Home 2</a>
                        </li>
                        <li>
                            <a href="index-3.html">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li>
                    <a href="#">
                        Services <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false">
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="services-details.html">Services Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Projects <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false">
                        <li>
                            <a href="projects.html">Projects</a>
                        </li>
                        <li>
                            <a href="projects-details.html">Projects Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Blog <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Pages <i class="fa-solid fa-plus"></i>
                    </a>
                    <ul class="sub-menu collapse" aria-expanded="false">
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <div class="ud-side-popup__bottom">
            <div class="ud-side-popup__bottom-info">
                <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                    <i class="fa-solid fa-phone"></i>
                    <div class="ud-header-info-box__details">
                        <span>Need Help?</span>
                        <h4>
                            <a href="tel:+3075550133">(307) 555-0133</a>
                        </h4>
                    </div>
                </div>
                <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                    <i class="fa-solid fa-paper-plane"></i>
                    <div class="ud-header-info-box__details">
                        <span>Shreekol, Dublia Bazar</span>
                        <h4>Pabna, Bangladesh</h4>
                    </div>
                </div>
                <div class="ud-side-popup__bottom-info-box d-flex align-items-center gap-3 py-0 m-0">
                    <i class="fa-solid fa-envelope"></i>
                    <div class="ud-header-info-box__details">
                        <span>Send email</span>
                        <h4>
                            <a href="mailto:hello@example.com">hello@example.com</a>
                        </h4>
                    </div>
                </div>
            </div>
            <ul class="ud-side-popup__bottom-socials">
                <li>
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
