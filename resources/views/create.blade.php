@extends('layouts/main')
@section('title', 'Add Mahasiswa')

@section('content')

    <div class="card">
        <div class="card-header">
            Add Mahasiswa
        </div>
        <div class="card-body">
            <form action="/save" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="NIM" name="NIM" required>
                </div>
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Nama" name="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="Alamat" required>
                </div>
                <div class="mb-3">
                    <label for="IPK" class="form-label">IPK</label>
                    <input type="number" min=0 max=4 step=0.01 class="form-control" id="IPK" name="IPK" required>
                </div>
                <div class="mb-3">
                    <label for="Foto" class="form-label">Foto</label>
                    <input type="file" class="form-control-file mb-3" id="Foto" name="Foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
