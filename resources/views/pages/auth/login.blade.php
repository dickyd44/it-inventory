@extends('layouts.auth') @section('content')

<div class="login-box">
    @include('includes.error-card')
    <!-- /.login-logo -->
    <div class="card card-outline card-danger">
        <div class="card-header text-center">
            <a href="/"
                ><img
                    class="img-circle"
                    src="https://www.zoho.com/inventory/images/inventory-icon-preview.png"
                    alt="Logo"
                    width="90"
            /></a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="/login" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input
                        name="email"
                        type="email"
                        class="form-control"
                        placeholder="Email"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input
                        name="password"
                        type="password"
                        class="form-control"
                        placeholder="Password"
                    />
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button
                            type="submit"
                            class="btn btn-danger btn-block w-100"
                        >
                            Sign In
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@endsection
