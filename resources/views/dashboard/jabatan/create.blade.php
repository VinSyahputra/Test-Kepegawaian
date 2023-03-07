@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="/jabatan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Jabatan</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">BUAT</button>
            </div>
        </form>
    </div>
</div>

@endsection