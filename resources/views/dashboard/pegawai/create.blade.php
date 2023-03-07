@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="/pegawai" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password">
            </div>
            <div class="mb-3">
                <select class="form-select mb-4" name="jabatan_pegawais_id" id="select_jabatan">
                    <option selected>Select Jabatan</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select mb-4" name="kontraks_id" id="select_kontrak">
                    <option selected>Select Kontrak</option>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">BUAT</button>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/getjabatan',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#select_jabatan').append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            }
        });
    });
    $(document).ready(function() {
        $.ajax({
            url: '/getkontrak',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $.each(data, function(key, value) {
                    $('#select_kontrak').append('<option value="' + value.id + '">' + value.jenis_kontrak + '</option>');
                });
            }
        });
    });
</script>
@endsection