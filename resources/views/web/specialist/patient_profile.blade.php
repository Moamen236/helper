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
            <h1 class="m-0 text-dark">{{ __('web.patient_profile') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('specialist/home') }}">{{ __('web.home') }}</a></li>
                <li class="breadcrumb-item"> <a href="{{ url('specialist/patients') }}">{{ __('web.patients') }}</a></li>
                <li class="breadcrumb-item active">{{ __('web.patient_profile') }}</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sticky-top mb-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('web/img/user-profile.jpg') }}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $patient->name }}</h3>
                                <p class="text-muted text-center">ID : {{ $patient->id }}</p>
                                <div class="btn-group btn-group-sm mx-auto mb-2" style="display: flex; width:fit-content">
                                    <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                </div>
                                <a href="{{ url("/specialist/patient/$patient->id/diagnosis") }}" class="btn btn-primary btn-block"><b>{{ __('web.diagnosis') }}</b></a>
                                <a href="#" class="btn btn-primary btn-block"><b>{{ __('web.reports') }}</b></a>
                                <a href="{{ url("specialist/patient/$patient->id/plan") }}" class="btn btn-primary btn-block"><b>{{ __('web.plan') }}</b></a>
                            </div><!-- /.card-body -->
                        </div><!-- /.card -->
    
                        <!-- /.Patient's progression​ -->
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                              <h5 class="m-0">{{ __('web.patient_progression​') }}</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="progress" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-->

                <div class="col-lg-9">
                    <!-- /.Personal Information -->
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">{{ __('web.personal_info') }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>{{ __('web.date_of_birth') }} :</th>
                                            <td>{{ $patient->dob }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.gender') }} :</th>
                                            <td>{{ $patient->gender }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.no_of_bros') }}:</th>
                                            <td>{{ $patient->no_of_bro }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.rank_among_bros') }} :</th>
                                            <td>{{ $patient->arr_btw_bro }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.caregiver_name') }}:</th>
                                            <td>{{ $patient->cg_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.caregiver_relation') }}:</th>
                                            <td>{{ $patient->cg_relation }}</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('web.phone_number') }} :</th>
                                            <td>{{ $patient->cg_phone}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.TO Do Missions -->
                    <div class="card card-primary card-outline">
                        <div class="row card-header">
                            <div class="col">
                                <h5 class="m-0">{{ __('web.to_do_missions') }}</h5>
                            </div>
                            <div class="col">
                                <div class="card-tools float-right">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_mission">{{ __('web.add_new') }} </button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Modal Add To Do missions -->
                            <div class="modal fade" id="add_mission" tabindex="-1" role="dialog" aria-labelledby="add_missionLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="add_missionLabel">{{ __('web.add_new') }} {{ __('web.mission') }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" id="add_mission_form">
                                                <div class="form-group">
                                                    <label>{{ __('web.title') }}</label>
                                                    <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title here">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{ __('web.details') }}</label>
                                                    <textarea class="form-control" name="details" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" form="add_mission_form" class="btn btn-primary">{{ __('web.submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($to_dos->isNotEmpty())
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>{{ __('web.id') }}</th>
                                        <th>{{ __('web.title') }}</th>
                                        <th>{{ __('web.finished_title') }}</th>
                                        <th>{{ __('web.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($to_dos as $key => $to_do)     
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td data-toggle="modal" data-target="#view_mission" style="cursor: pointer">{{ $to_do->title }}</td>
                                        <td>
                                            @if($to_do->finish)
                                                <span class="badge bg-success">{{ __('web.finished') }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ __('web.not_finished') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal View To Do missions -->
                                    <div class="modal fade" id="view_mission" tabindex="-1" role="dialog" aria-labelledby="view_missionLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="view_missionLabel">{{ $to_do->title }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $to_do->details }}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate mt-4 float-right">
                                {{ $to_dos->links() }}
                            </div>
                            <div class="clearfix"></div>
                            @else
                                <div class="row justify-content-center">
                                    <div class="col-md-12 text-center">
                                        <span class="display-1 d-block">OOps!!</span>
                                        <div class="mb-4 lead">No Data Found</div>
                                        {{-- <a href="{{ url('specialist_home') }}" class="btn btn-link">
                                            Back to Home</a> The page you are looking for was not found.--}}
                                    </div>
                                </div>
                            @endif 
                        </div>
                    </div> 
                    <!-- /.Next Sessions -->
                    <div class="card card-primary card-outline">
                        <div class="row justify-content-between card-header">
                            <div class="col">
                                <h5 class="m-0">{{ __('web.next_sessions') }}</h5>
                            </div>
                            <div class="col">
                                <div class="card-tools float-right">
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#add_session">{{ __('web.add_new') }}</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Modal Add To Do sessions -->
                            <div class="modal fade" id="add_session" tabindex="-1" role="dialog" aria-labelledby="add_sessionLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="add_sessionLabel">{{ __('web.add_new') }} {{ __('web.session') }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" id="add_session_form">
                                                <div class="form-group">
                                                    <label>{{ __('web.appointment') }}</label>
                                                    <input type="datetime" name="appointment" class="form-control" aria-describedby="emailHelp">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" form="add_session_form" class="btn btn-primary">{{ __('web.submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($sessions->isNotEmpty())
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>{{ __('web.id') }}</th>
                                        <th>{{ __('web.date') }}</th>
                                        <th>{{ __('web.time') }}</th>
                                        <th>{{ __('web.finished_title') }}</th>
                                        <th>{{ __('web.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sessions as $key => $session)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('d-m-Y') }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('H:i') }}</td>
                                        <td>
                                            @if($session->finish)
                                                <span class="badge bg-success">{{ __('web.finished') }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ __('web.not_finished') }}</span>
                                            @endif
                                        </td>
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
                                        <span class="display-1 d-block">OOps!!</span>
                                        <div class="mb-4 lead">No Data Found</div>
                                        {{-- <a href="{{ url('specialist_home') }}" class="btn btn-link">
                                            Back to Home</a> The page you are looking for was not found.--}}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>         
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div> <!-- /.content-wrapper -->

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var ctx = document.getElementById('progress')
        var myChart = new Chart(ctx, {
            type: 'line',
            data = {
                labels: ['January' , 'February' , 'March' , 'April' , 'May' , 'June' , 'July'],
                datasets: [{
                    label: "Patient's progression",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
        });
    </script>
@endsection