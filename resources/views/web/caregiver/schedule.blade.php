@extends('web.layout')

@section('title')
    Schedule
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
                    <li class="breadcrumb-item"><a href="{{ url('caregiver/home') }}">{{ __('web.home') }}</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('caregiver/schedule') }}">{{ __('web.schedule') }}</a></li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ __("web.Your schedule with Dr.") }} <strong> {{ Auth::user()->specialist->name }}</strong></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Patient Name</th>
                                            <th>Session Date</th>
                                            <th>Session Time</th>
                                            <th>Finished</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $appointment->name }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $appointment->appointment)->format('d-m-Y') }}</td>
                                                <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $appointment->appointment)->format('H:i') }}</td>
                                                <td>
                                                    @if ($appointment->finished == 1)
                                                        <span class="badge badge-success">{{ __('web.finished') }}</span>
                                                    @else
                                                        <span class="badge badge-danger">{{ __('web.not_finished') }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
     <!-- /.content-wrapper -->

@endsection