@extends('web.layout')

@section('title')
    {{ __('web.schedule') }}
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css">
@endsection

@section('main')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">{{ __('web.schedule') }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('specialist/home') }}">{{ __('web.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('web.schedule') }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- Today Sessions --}}
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h5 class="m-0">Today Sessions</h5>
                            </div>
                            <div class="card-body">
                                @if($today_sessions->isNotEmpty())
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Patient Name</th>
                                                <th>Session Date</th>
                                                <th>Session Time</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($today_sessions as $key => $session) 
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $session->name }}</td>
                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('d-m-Y') }}</td>
                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('H:i') }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center">
                                            <span class="display-1 d-block">
                                                <i class="far fa-calendar-times"></i>
                                            </span>
                                            <div class="mb-4 lead">You don't have any sessions today</div>
                                            {{-- <a href="{{ url('specialist_home') }}" class="btn btn-link">
                                                Back to Home</a> The page you are looking for was not found.--}}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        {{-- All Sessions --}}
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h5 class="m-0">All Sessions</h5>
                            </div>
                            <div class="card-body">
                                @if($all_sessions->isNotEmpty())
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>{{ __('web.id') }}</th>
                                                <th>{{ __('web.patient') }}</th>
                                                <th>{{ __('web.date') }}</th>
                                                <th>{{ __('web.time') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_sessions as $session) 
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href="{{ url("specialist/patient/{$session->id}") }}" target="_blank">{{ $session->name }}</a></td>
                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('d/m/Y') }}</td>
                                                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('g:i a') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="paginate mt-4 float-right">
                                        {{ $all_sessions->links() }}
                                    </div>
                                    <div class="clearfix"></div>
                                @else
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 text-center">
                                            <span class="display-1 d-block">
                                                <i class="far fa-calendar-times"></i>
                                            </span>
                                            <div class="mb-4 lead">You don't have any sessions today</div>
                                            {{-- <a href="{{ url('specialist_home') }}" class="btn btn-link">
                                                Back to Home</a> The page you are looking for was not found.--}}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection