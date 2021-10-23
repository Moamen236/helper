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

                <form method="POST" action="{{ url('/reset-password') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ request()->route('token') }}">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password">
                        <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
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
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>    
@endsection

        
        