@extends('layouts.index')
@section('content')
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="card mb-3" style="background: #011B56;">

                        <div class="card-body text-white">
                            @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center text-white pb-0 fs-4">Login to Your Account
                                </h5>
                            </div>

                            <form class="row g-3" action="/login" method="post">
                                @csrf
                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control @error('username') is-invalid
                                            
                                        @enderror" id="yourUsername" required autofocus>
                                        <div class=""></div>
                                        @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid
                                        
                                    @enderror" id="yourPassword" required>
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mt-5">
                                    <button class="btn w-100" style="background: #FF9D04" type="submit"><i
                                            class="bi bi-box-arrow-in-right"></i> LOGIN</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

</div>
@endsection