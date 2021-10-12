@extends('web.layout')

@section('title')
    {{ __('web.patients') }}
@endsection

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ __('web.patients') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('specialist/home') }}">{{ __('web.home') }}</a></li>
              <li class="breadcrumb-item active">{{ __('web.patients') }}</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        {{-- <div class="card-header">      
                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
              
                                  <div class="input-group-append">
                                  <button type="submit" class="btn btn-default">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  </div>
                              </div>
                            </div>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                <th>{{ __('web.id') }}</th>
                                <th>{{ __('web.name') }}</th>
                                <th>{{ __('web.age') }}</th>
                                <th>{{ __('web.gender') }}</th>
                                <th>{{ __('web.actions') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $key => $patient)    
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td> <a href="{{ url("specialist/patient/$patient->id") }}"> {{ $patient->name }} </a></td>
                                    <td>{{ \Carbon\Carbon::parse($patient->dob)->diff(\Carbon\Carbon::now())->y }}</td>
                                    <td>{{ $patient->gender }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ url("specialist/patient/$patient->id") }}" class="btn btn-sm btn-primary"><i class="fas fa-info-circle text-white"></i></a>
                                            <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                            <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="paginate m-auto">
                            {{ $patients->links() }}
                        </div>
                    </div>
                  </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

@endsection