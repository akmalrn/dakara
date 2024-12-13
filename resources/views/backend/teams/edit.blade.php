@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Team</h3>
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
                        <a href="{{ route('teams.index') }}">Team</a>
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
                            <h4 class="card-title">Edit Team</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label for="path">Upload Image</label>
                                            <input type="file" name="path" id="path" class="form-control @error('path') is-invalid @enderror" onchange="previewImage('path', 'pathPreview')">
                                            @error('path')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <img id="pathPreview" src="{{ asset($team->path) }}" alt="Image Preview" class="img-thumbnail mt-2" style="width: 200px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" value="{{ $team->name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-group-default">
                                            <label for="position">Position</label>
                                            <input id="position" type="text" class="form-control" name="position" value="{{ $team->position }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" name="description" rows="4">{{ $team->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-group-default">
                                            <label for="pdf">Upload PDF</label>
                                            <input type="file" name="pdf" id="pdf" class="form-control @error('pdf') is-invalid @enderror" onchange="previewFileName('pdf', 'pdfPreview')">
                                            @error('pdf')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div id="pdfPreview" class="text-muted mt-2">
                                            @if($team->pdf)
                                                Current PDF: <a href="{{ asset($team->pdf) }}" target="_blank">{{ basename($team->pdf) }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="{{ route('teams.index') }}" class="btn btn-secondary ms-2">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function previewImage(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewFileName(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        if (input.files && input.files[0]) {
            const fileName = input.files[0].name;
            preview.style.display = 'block';
            preview.textContent = `PDF Selected: ${fileName}`;
        }
    }
</script>
