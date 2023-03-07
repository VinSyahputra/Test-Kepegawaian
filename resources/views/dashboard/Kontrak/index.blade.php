@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header d-flex align-items-center">
                    <a href="/kontrak/create" class="text-decoration-none btn btn-primary ms-auto">BUAT</a>
                </div>
                <div class="card-body py-2">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Kontrak</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $kontrak)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $kontrak->jenis_kontrak }}</td>
                                <td>
                                    <a href="/kontrak/{{ $kontrak->id }}/edit" class="btn btn-warning">EDIT</a>
                                    <form action="/kontrak/{{ $kontrak->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Delete kontrak data ?');"
                                            class="btn btn-danger">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection