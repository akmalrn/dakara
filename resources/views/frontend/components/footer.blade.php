<footer class="srex-footer-one"
    style="background:  url({{ asset('assetsfront/images/background/pohon.png') }});overflow-x: hidden;background-size: 100% 600px; ">
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
                                        @if (!empty($contact->youtube))
                                            <a href="{{ $contact->youtube }}" class="text-dark fs-4">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        @endif
                                    </li>
                                    <li>
                                        @if (!empty($contact->instagram))
                                        <a href="{{ $contact->instagram }}" class="text-dark fs-4">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        @endif
                                    </li>
                                    <li>
                                        @if (!empty($contact->facebook))
                                        <a href="{{ $contact->facebook }}" class="text-dark fs-4">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                        @endif
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
                                            <a href="https://wa.me/{{ $contact->phone_number_2 ?? '' }}">+{{ $contact->phone_number_2 ?? '' }}</a>
                                        </p>
                                        <p>
                                            <a href="https://wa.me/{{ $contact->phone_number_3 ?? '' }}">+{{ $contact->phone_number_3 ?? '' }}</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                    <p>
                                        <a href="https://wa.me/{{ $contact->phone_number ?? '' }}">+{{ $contact->phone_number ?? '' }}</a>
                                    </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-solid fa-paper-plane"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                        <p>
                                            {{ $contact->address ?? '' }}
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="srex-footer__contact__icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="srex-footer__contact__text">
                                        <p>
                                            <a href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a>
                                        </p>
                                        <p>
                                            <a href="mailto:{{ $contact->email_address_2 ?? '' }}">{{ $contact->email_address_2 ?? '' }}</a>
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
                       {{ $configuration->footer ?? '' }}
                    </p>
                </div>
            </div>
        </div>
</footer>
