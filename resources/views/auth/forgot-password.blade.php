@extends('auth.layout')

@section('title')
    Confirm password
@endsection

@section('main')
    <!-- /.login-box -->
    <div class="login-box">
        <!-- /.login-logo -->
        @include('inc.messages')
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Confirm your password</p>

            <form method="POST" action="{{ url('/forgot-password') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-4">
                        {{-- <input type="submit" value="submit"> --}}
                        <button type="submit" class="btn btn-primary btn-block float-right">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links --> --}}
            <p class="mb-0">
                <a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
            </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>    
@endsection

        
        