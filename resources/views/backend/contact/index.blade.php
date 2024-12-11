@extends('backend.layout')

@section('content')
    <div class="container mt-10 ">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header bg-primary text-white">contact Settings</div>

                    <div class="card-body">
                        <form action="{{ route('contact.storeOrUpdate') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Website Name -->
                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        value="{{ old('phone_number', $contact->phone_number ?? '') }}">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="phone_number_2" class="form-label">Phone Number 2</label>
                                    <input type="text" name="phone_number_2"
                                        class="form-control @error('phone_number_2') is-invalid @enderror"
                                        value="{{ old('phone_number_2', $contact->phone_number_2 ?? '') }}">
                                    @error('phone_number_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="phone_number_3" class="form-label">Phone Number 3</label>
                                    <input type="text" name="phone_number_3"
                                        class="form-control @error('phone_number_3') is-invalid @enderror"
                                        value="{{ old('phone_number_3', $contact->phone_number_3 ?? '') }}">
                                    @error('phone_number_3')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md mb-3">
                                    <label for="email_address" class="form-label">Email Address</label>
                                    <textarea name="email_address" class="form-control @error('email_address') is-invalid @enderror">{{ old('email_address', $contact->email_address ?? '') }}</textarea>
                                    @error('email_address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md mb-3">
                                    <label for="email_address_2" class="form-label">Email Address 2</label>
                                    <textarea name="email_address_2" class="form-control @error('email_address_2') is-invalid @enderror">{{ old('email_address_2', $contact->email_address_2 ?? '') }}</textarea>
                                    @error('email_address_2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md mb-3">
                                <label for="map" class="form-label">Map</label>
                                <input type="text" name="map"
                                    class="form-control @error('map') is-invalid @enderror"
                                    value="{{ old('map', $contact->map ?? '') }}">
                                @error('map')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Tambahkan input lainnya sesuai kebutuhan -->

                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary w-100">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
