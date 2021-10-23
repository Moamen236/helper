@extends('auth.layout')

@section('title')
    verify email
@endsection

@section('main')
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="callout callout-danger">
                    <h5>Verify Your Email</h5>
    
                    <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire
                    soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <form action="{{ url('/email/verification-notification') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-block btn-primary btn-sm float-right" style="width: fit-content">Re-send Email</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection