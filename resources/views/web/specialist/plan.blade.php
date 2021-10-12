@extends('web.layout')

@section('title')
    {{ __('web.plan') }}
@endsection

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Paln</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('specialist/home') }}">{{ __('web.home') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url('specialist/patients') }}">{{ __('web.patients') }}</a></li>
                <li class="breadcrumb-item"><a href="{{ url("specialist/patient/$patient_id") }}">{{ __('web.patient_profile') }}</a></li>
                <li class="breadcrumb-item active">{{ __('web.plan') }}</li>
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
                    {{-- Current level --}}
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">{{ __('web.current_level') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header p-2">
                                  <ul class="nav nav-pills">
                                      @for($i = 0; $i <= 1; $i++)
                                        @if($i == 0)
                                            <li class="nav-item active">
                                                <a class="nav-link active" href="#{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name()))}}" data-toggle="tab">{{ $plan_types[$i]->name() }}</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name()))}}" data-toggle="tab">{{ $plan_types[$i]->name() }}</a>
                                            </li>
                                        @endif
                                      @endfor
                                  </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                  <div class="tab-content">
                                    @for($i = 0; $i <= 1; $i++)
                                        <div
                                            @if($i == 0)
                                                class="tab-pane active"
                                            @else
                                                class="tab-pane"      
                                            @endif
                                            id="{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name())) }}"
                                        >
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-tools float-right">
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_plan">Add new </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>{{ __('web.id') }}</th>
                                                        <th>{{ __('web.description') }}</th>
                                                        <th>{{ __('web.actions') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($plan_types[$i]->plans as $point) 
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $point->description }}</td>
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
                                                </div><!-- /.card-body -->
                                            </div>
                                        </div><!-- /.tab-pane -->
                                    @endfor
                                  </div><!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    {{-- Objectives --}}
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">{{ __('web.objectives') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header p-2">
                                  <ul class="nav nav-pills">
                                      @for($i = 2; $i <= 3; $i++)
                                        @if($i == 2)
                                            <li class="nav-item active">
                                                <a class="nav-link active" href="#{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name()))}}" data-toggle="tab">{{ $plan_types[$i]->name() }}</a>
                                            </li>
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="#{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name()))}}" data-toggle="tab">{{ $plan_types[$i]->name() }}</a>
                                            </li>
                                        @endif
                                      @endfor
                                  </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                  <div class="tab-content">
                                    @for($i = 2; $i <= 3; $i++)
                                        <div
                                            @if($i == 2)
                                                class="tab-pane active"
                                            @else
                                                class="tab-pane"      
                                            @endif
                                            id="{{ strtolower(preg_replace("[\s]", "_", $plan_types[$i]->name())) }}"
                                        >
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="card-tools float-right">
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_plan">Add new </button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>{{ __('web.id') }}</th>
                                                        <th>{{ __('web.description') }}</th>
                                                        <th>{{ __('web.actions') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($plan_types[$i]->plans as $point) 
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $point->description }}</td>
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
                                                </div><!-- /.card-body -->
                                            </div>
                                        </div><!-- /.tab-pane -->
                                    @endfor
                                  </div><!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div> <!-- /.content-wrapper -->


  <!-- Modal Add new plan -->
  <div class="modal fade" id="add_plan" tabindex="-1" role="dialog" aria-labelledby="add_planLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_planLabel">Add new plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="add_plan_form">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title here">
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" name="details" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" form="add_plan_form" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit plan -->
<div class="modal fade" id="edit_plan" tabindex="-1" role="dialog" aria-labelledby="edit_planLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_planLabel">Add new mission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="edit_plan_form">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title here">
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" name="details" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" form="edit_plan_form" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection