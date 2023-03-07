@extends('layouts.app')
@section('content')
<section class="section dashboard">
    <div class="row gap-2 justify-content-center">
        <div class="card mb-3 bg-primary" style="width: 15rem;">
            <div class="card-body text-center text-white">
                <h5 class="card-title text-white m-0">Jumlah Pegawai</h5>
                <h1 class="card-text "><b>20</b></h1>
            </div>
        </div>
        <div class="card mb-3 bg-warning" style="width: 15rem;">
            <div class="card-body text-center text-white">
                <h5 class="card-title text-white m-0">Jumlah Jabatan</h5>
                <h1 class="card-text "><b>{{ $jabatan }}</b></h1>
            </div>
        </div>
        <div class="card mb-3 bg-success" style="width: 15rem;">
            <div class="card-body text-center text-white">
                <h5 class="card-title text-white m-0">Jumlah Purna</h5>
                <h1 class="card-text "><b>20</b></h1>
            </div>
        </div>
    </div>
</section>
@endsection