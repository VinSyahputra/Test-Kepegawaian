@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="/pegawai/{{ $pegawai->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    value="{{ $pegawai->nama }}">
            </div>
            <div class="mb-3">
                <select class="form-select mb-4" name="jabatan_pegawais_id">
                    <option selected>Select Jabatan</option>
                    @foreach ($data_pegawai as $jabatan)
                    @if (old('jabatan_pegawais_id', $pegawai->jabatan_pegawais_id) == $jabatan->id)
                    <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama }}
                    </option>
                    @else
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select mb-4" name="kontraks_id">
                    <option selected>Select Kontrak</option>
                    @foreach ($data_kontrak as $kontrak)
                    @if (old('kontraks_id', $pegawai->kontraks_id) == $kontrak->id)
                    <option value="{{ $kontrak->id }}" selected>{{ $kontrak->jenis_kontrak }}</option>
                    @else
                    <option value="{{ $kontrak->id }}">{{ $kontrak->jenis_kontrak }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">EDIT</button>
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