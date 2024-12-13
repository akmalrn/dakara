@extends('frontend.layouts')

@section('title', 'Contact Us')
@section('title-page', 'Contact Us')

@section('content') <!-- Mulai section 'content' -->
@include('frontend.components.page-header')

    <section class="wedo-section"
        style="background: url({{ asset('assetsfront/images/background/tukang-struktur.jpg') }}); overflow-x: hidden; background-size: 150px; border-top: 1px solid #dbdbdb;">

        <!-- Menambahkan Google Maps -->
        <div class="container pad-top-md pad-bottom-md">
            <h3 class="text-center mb-4">Our Location</h3>
            <div class="maps-container">
                <iframe
                    src="{{ $contact->map ?? '' }}"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Menambahkan 3 kotak bersebelahan dengan jarak dari map -->
        <div class="container pad-top-md">
            <div class="row justify-content-between">
                <!-- Kotak Hubungi Kami -->
                <div class="col-md-4 contact-box-wrapper mb-3">
                    <div class="contact-box">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Hubungi Kami</h4>
						<br>
                        <p>
                            WhatsApp&nbsp; : &nbsp;<a href="https://wa.me/{{ $contact->phone_number ?? '' }}"
                                target="_blank">+{{ $contact->phone_number }}</a><br>
                            Telphone&nbsp; : &nbsp;<a style="color: white;" href="https://wa.me/{{ $contact->phone_number }}" target="blank">+{{ $contact->phone_number }}</a><br>
                            Telphone&nbsp; : &nbsp;<a style="color: white;" href="https://wa.me/{{ $contact->phone_number }}" target="blank">+{{ $contact->phone_number }}</a>
                        </p>
                    </div>
                </div>

                <!-- Kotak E-mail Kami -->
                <div class="col-md-4 contact-box-wrapper mb-3">
                    <div class="contact-box">
                        <i class="fas fa-envelope"></i>
                        <h4>E-mail Kami</h4>
                        <br>
                        <p>{{ $contact->email_address ?? '' }}</p>
                        <p>{{ $contact->email_address_2 ?? '' }}</p>
                    </div>
                </div>

                <!-- Kotak Kantor Kami -->
                <div class="col-md-4 contact-box-wrapper mb-3">
                    <div class="contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>Kantor Kami</h4>
						<br>
                        <p>{{ $contact->address ?? '' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Kontak -->
        <div class="container pad-top-md pad-bottom-md">
            <h3 class="text-center mb-4">Send Us a Message</h3>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <!-- Kolom Nama -->
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label text-white"></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
                            </div>

                            <!-- Kolom Email -->
                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label text-white"></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>

                            <!-- Kolom Subject -->
                            <div class="col-md-12 mb-3">
                                <label for="subject" class="form-label text-white"></label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                            </div>

                            <!-- Kolom Pesan -->
                            <div class="col-md-12 mb-3">
                                <label for="message" class="form-label text-white"></label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Pesan" required></textarea>
                            </div>

                            <!-- Tombol Kirim -->
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Kirim </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection <!-- Tutup section content -->

<!-- Tambahkan CSS -->
<style>
    .contact-box-wrapper {
        display: flex;
        justify-content: center;
        padding-top: 50px;
        color: white;
    }

    .contact-box {
        width: 100%;
        padding: 50px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        background-color: #16813e;
    }

    .contact-box h4 {
        font-size: 20px;
        margin-top: 15px;
        font-weight: bold;
        color: white;
    }

    .contact-box i {
        font-size: 50px;
        margin-bottom: 15px;
        color: white;
    }

    .contact-box p {
        font-size: 16px;
        margin: 0;
        color: white;
    }

    /* Responsif untuk ukuran kecil */
    @media (max-width: 768px) {
        .contact-box-wrapper {
            flex-direction: column;
        }

        .contact-box {
            margin-bottom: 15px;
        }
    }

    /* Styling form kontak */
    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 8px;
        padding: 12px;
        border: 1px solid #ddd;
    }

    .btn-success {
        background-color: #16813e;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
    }

    .btn-success:hover {
        background-color: #0e5b2f;
    }

    /* Styling form yang lebih kecil dan terpusat */
    .contact-form {
        border: 2px solid #16813e;
        padding: 30px;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .contact-form .form-control {
        margin-bottom: 15px;
    }
</style>

<!-- Menambahkan Font Awesome CDN untuk ikon -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
