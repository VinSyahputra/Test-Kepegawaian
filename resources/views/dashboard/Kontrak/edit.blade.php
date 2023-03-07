@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="/kontrak/{{ $data->id }}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Jenis Kontrak</label>
                <input type="text" name="jenis_kontrak"
                    class="form-control @error('jenis_kontrak') is-invalid @enderror" id="nama"
                    value="{{ $data->jenis_kontrak }}">
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" type="submit">EDIT</button>
            </div>
        </form>
    </div>
</div>

@endsection