@extends('backend.layout')
@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">DataTables</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Datatables</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Add Row</h4>
                                <button class="btn btn-primary btn-round ms-auto"
                                    onclick="window.location.href='{{ route('gallery.create') }}'">
                                    <i class="fa fa-plus"></i> Add gallery
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Categori</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $gallery->category }}</td>
                                                <td>
                                                    <img src="{{ asset($gallery->path) }}" alt="Gallery Image"
                                                        style="width: 100px;">
                                                </td>
                                                <td>{{ $gallery->title }}</td>
                                                <td>{!! \Str::words($gallery->description, 50) !!}</td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <form action="{{ route('gallery.edit', $gallery->id) }}"
                                                            method="GET" style="display: inline;">
                                                            @csrf
                                                            <button type="submit" data-bs-toggle="tooltip"
                                                                title="Edit Task" class="btn btn-link btn-primary">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </form>

                                                        <form action="{{ route('gallery.destroy', $gallery->id) }}"
                                                            method="POST" id="delete-form-{{ $gallery->id }}"
                                                            style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button" data-bs-toggle="tooltip"
                                                                title="Delete Task" class="btn btn-link btn-danger"
                                                                onclick="confirmDelete({{ $gallery->id }})">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
