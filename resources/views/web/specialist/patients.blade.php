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
                  @include('inc.messages')
                    <div class="card">
                        <div class="card-header">      
                            <div class="card-tools">
                              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_new">
                                Add new patient
                              </button>
                            </div>
                            <div class="modal fade" id="add_new" style="display: none;" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Add new patient</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ url('patient/store') }}" method="POST" id="add_new_form" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" name="name">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Date of birth</label>
                                            <input type="date" name="dob" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Select gender</label>
                                            <select class="form-control" name="gender">
                                              <option value="male">Male</option>
                                              <option value="female">Female</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Number of brothers</label>
                                            <input type="number" name="no_of_bros" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Rank among brothers</label>
                                            <input type="number" name="arr_btw_bros" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Caregiver name</label>
                                            <input type="text" name="cg_name" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Caregiver Relationship with patient</label>
                                            <input type="text" name="cg_relation" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-6">
                                          <div class="form-group">
                                            <label>Caregiver Phone number</label>
                                            <input type="text" name="cg_phone" class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-12">
                                          <div class="form-group">
                                            <label for="exampleInputFile">Image for patoent</label>
                                            <div class="input-group">
                                              <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <input type="hidden" name="specilaist_id" value="{{ $specialist_id}}">
                                    </form>
                                  </div>
                                  <div class="modal-footer float-right">
                                    <button type="submit" form="add_new_form" class="btn btn-primary">Add</button>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                                <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          @if($patients->isEmpty())
                            @include('inc.no-data')
                          @else
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
                                              <a href="{{ url("patient/delete/{$patient->id}") }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                            </table>
                          @endif
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