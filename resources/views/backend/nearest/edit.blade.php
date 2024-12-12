@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Nearest Schedule</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('nearest_schedule.index') }}">Nearest Schedule</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Nearest Schedule</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('nearest_schedule.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Ini untuk memberitahukan bahwa ini adalah request update -->

                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group form-group-default">
                                            <label for="path">Upload Image</label>
                                            <input type="file" name="path" id="path" class="form-control @error('path') is-invalid @enderror" onchange="previewImage('path', 'pathPreview')">
                                            @error('path')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img id="pathPreview" src="{{ asset($schedule->path) }}" alt="Image Preview" class="img-thumbnail mt-2" style="display: block; width: 200px;">
                                    </div>

                                    <div class="col-md">
                                        <label for="date">Date</label>
                                        <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ $schedule->date }}" required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('nearest_schedule.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
