<footer class="srex-footer-one"
    style="background:  url({{ asset('assetsfront/images/background/pohon.png') }});overflow-x: hidden;">
    <div class="container">

        <hr>
        <div class="srex-footer__links">
            <div class="row">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="srex-footer__links__wrapper d-flex flex-column align-items-center text-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset($configuration->path ?? '') }}"
                                alt="{{ $configuration->website_name ?? '' }}" width="150px" height="auto">
                        </a>
                        <div class="srex-footer__links__content">
                            <div class="srex-footer__newsletter">
                                <ul class="list-unstyled d-flex justify-content-center gap-3">
                                    <li>
                                        <a href="#" class="text-dark fs-4">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-dark fs-4">
                                            <i class="fa-brands fa-x"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-dark fs-4">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-dark fs-4">
                                            <i class="fa-brands fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-6 col-lg-3 col-md-6">
                    <div class="srex-footer__links__wrapper">
                        <h4>{{ $configuration->title ?? '' }}</h4>
                        <div class="srex-footer__links__content">
                            <p>{{ $about->overview ?? '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="srex-footer__links__wrapper">
                        <h4>More Service</h4>
                        <div class="srex-footer__links__content">
                            <ul class="srex-footer__links__list">
                                <li>
                                    <a href="#">Accounting</a>
                                </li>
                                <li>
                                    <a href="#">Risk Management</a>
                                </li>
                                <li>
                                    <a href="#">Accounting</a>
                                </li>
                                <li>
                                    <a href="#">Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Financial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="srex-footer__links__wrapper">
                        <h4>Contact US</h4>
                        <div class="srex-footer__links__content">
                            <ul class="srex-footer__contact">
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                        <p>
                                            <a href="tel:+11234567890">+(1) 123 456 7890</a>
                                        </p>
                                        <p>
                                            <a href="tel:+10987654321">+(1) 098 765 4321</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                        <p>
                                            Burmsille Street, MN 55337,
                                            <br>
                                            United States
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                        <p>
                                            <a href="mailto:info@driller.com">info@driller.com</a>
                                        </p>
                                        <p>
                                            <a href="mailto:info.example@driller.com">info.example@driller.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="srex-footer__bottom">
            <div class="row">
                <div class="text-center">
                    <p>
                        &copy; 2024 Solarex | All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
</footer>
