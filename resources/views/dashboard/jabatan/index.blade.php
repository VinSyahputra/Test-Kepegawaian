@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4">
                <div class="card-header d-flex align-items-center">
                    <a href="/jabatan/create" class="text-decoration-none btn btn-primary ms-auto">BUAT</a>
                </div>
                <div class="card-body py-2">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Jabatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $jabatan)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $jabatan->nama }}</td>
                                <td>
                                    <a href="/jabatan/{{ $jabatan->id }}/edit" class="btn btn-warning">EDIT</a>
                                    <form action="/jabatan/{{ $jabatan->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return confirm('Delete jabatan data ?');"
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