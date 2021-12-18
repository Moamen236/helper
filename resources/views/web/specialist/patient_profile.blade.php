@extends('web.layout')

@section('title')
    Patient profile - {{ $patient->name }}
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
            @include('inc.messages')
            <div class="row">
                <div class="col-lg-3">
                    <div class="sticky-top mb-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset("web/img/{$patient->img}") }}" alt="User profile picture" style="border-radius:0">
                                </div>
                                <h3 class="profile-username text-center">{{ $patient->name }}</h3>
                                <p class="text-muted text-center">ID : {{ $patient->id }}</p>
                                <div class="btn-group btn-group-sm mx-auto mb-2" style="display: flex; width:fit-content">
                                    <a href="#" data-toggle="modal" data-target="#edit_{{ $patient->id }}" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                    <a href="{{ url("specialist/patient/delete/{$patient->id}") }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
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
                                            <th>{{ __('web.age') }} :</th>
                                            <td>{{ \Carbon\Carbon::parse($patient->dob)->diff(\Carbon\Carbon::now())->y }}</td>
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
                                            <form action="{{ url('specialist/patient/mission/store_mission') }}" method="post" id="add_mission_form">
                                                @csrf
                                                <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                                <div class="form-group">
                                                    <label>{{ __('web.title') }}</label>
                                                    <input type="text" name="title" class="form-control" placeholder="Enter title here">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{ __('web.details') }}</label>
                                                    <textarea class="form-control" name="details" rows="3"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="add_mission_form" class="btn btn-primary">{{ __('web.submit') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($to_dos->isNotEmpty())
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>{{ __('web.id') }}</th>
                                        <th>{{ __('web.title') }}</th>
                                        <th>{{ __('web.finished_title') }}</th>
                                        <th>{{ __('web.actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($to_dos as $to_do)     
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td data-toggle="modal" data-target="#view_mission_{{ $to_do->id }}" style="cursor: pointer">{{ $to_do->title }}</td>
                                        <td>
                                            @if($to_do->finish)
                                                <span class="badge bg-success">{{ __('web.finished') }}</span>
                                            @else
                                                <span class="badge bg-danger">{{ __('web.not_finished') }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href=""  data-toggle="modal" data-target="#edit_{{ $to_do->id }}" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                                <a href="{{ url("specialist/patient/mission/delete_mission/{$to_do->id}") }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal View To Do missions -->
                                    <div class="modal fade" id="view_mission_{{ $to_do->id }}" tabindex="-1" role="dialog" aria-labelledby="view_missionLabel" aria-hidden="true">
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
                                    {{-- Edit Mission --}}
                                    <div class="modal fade" id="edit_{{ $to_do->id }}" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title">Edit Mission</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('specialist/patient/mission/update_mission') }}" method="POST" id="edit_form_{{ $patient->id }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $to_do->id }}">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" name="title" value="{{ $to_do->title }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Details</label>
                                                            <textarea class="form-control" rows="7" name="details" spellcheck="false">{{ $to_do->details }}</textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer float-right">
                                                <button type="submit" form="edit_form_{{ $patient->id }}" class="btn btn-primary">Edit</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="paginate mt-4 float-right">
                                {{ $to_dos->links() }}
                            </div>
                            <div class="clearfix"></div>
                            @else
                                @include('inc.no-data')
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
                            <!-- Modal Add new sessions -->
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
                                            <form action="{{ url('specialist/patient/session/store_session') }}" method="post" id="add_session_form">
                                                @csrf
                                                <input type="hidden" name="patient_id" value="{{ $patient->id }}">
                                                <div class="form-group">
                                                    <label>{{ __('web.date') }}</label>
                                                    <input type="date" name="date" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>{{ __('web.time') }}</label>
                                                    <input type="time" name="time" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" form="add_session_form" class="btn btn-primary">{{ __('web.submit') }}</button>
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
                                    @foreach($sessions as $session)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('d/m/Y') }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('g:i a') }}</td>
                                            <td>
                                                @if($session->finish)
                                                    <span class="badge bg-success">{{ __('web.finished') }}</span>
                                                @else
                                                    <span class="badge bg-danger">{{ __('web.not_finished') }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-sm">
                                                    <a href="" data-toggle="modal" data-target="#edit_session" class="btn btn-sm btn-success"><i class="fas fa-edit text-white"></i></a>
                                                    <a href="{{ url("specialist/patient/session/delete_session/{$session->id}") }}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt text-white"></i></a>
                                                </div>
                                            </td>
                                        </tr>   
                                        <!-- Modal Edit sessions -->
                                        <div class="modal fade" id="edit_session" tabindex="-1" role="dialog" aria-labelledby="edit_sessionLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="edit_sessionLabel">Edit Mission</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('specialist/patient/session/update_session') }}" method="post" id="edit_session_form">
                                                            @csrf
                                                            <input type="hidden" name="session_id" value="{{ $session->id }}">
                                                            <div class="form-group">
                                                                <label>{{ __('web.date') }}</label>
                                                                <input type="date" name="date" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('Y-m-d') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>{{ __('web.time') }}</label>
                                                                <input type="time" name="time" class="form-control" value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->appointment)->format('H:i') }}">
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" form="edit_session_form" class="btn btn-primary">{{ __('web.submit') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                                @include('inc.no-data')
                            @endif
                        </div>
                    </div>         
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div> <!-- /.content-wrapper -->

  {{-- Edit Patient --}}
  <div class="modal fade" id="edit_{{ $patient->id }}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add new patient</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('specialist/patient/update') }}" method="POST" id="edit_form_{{ $patient->id }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $patient->id }}">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $patient->name }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Date of birth</label>
                  <input type="date" name="dob" class="form-control" value="{{ $patient->dob }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Select gender</label>
                  <select class="form-control" name="gender">
                    <option selected value="{{ $patient->gender }}">{{ $patient->gender }}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Number of brothers</label>
                  <input type="number" name="no_of_bros" class="form-control" value="{{ $patient->no_of_bro }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Rank among brothers</label>
                  <input type="number" name="arr_btw_bros" class="form-control" value="{{ $patient->arr_btw_bro }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Caregiver name</label>
                  <input type="text" name="cg_name" class="form-control" value="{{ $patient->cg_name }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Caregiver Relationship with patient</label>
                  <input type="text" name="cg_relation" class="form-control" value="{{ $patient->cg_relation }}">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label>Caregiver Phone number</label>
                  <input type="text" name="cg_phone" class="form-control" value="{{ $patient->cg_phone }}">
                </div>
              </div>
              <div class="col-6">
                <label>Current image</label>
                <div class="image">
                  <img src="{{ asset("web/img/{$patient->img}")}}" class="img-fluid" alt="" width="200">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputFile">Change the image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="img" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="specilaist_id" value="{{ Auth::id(); }}">
          </form>
        </div>
        <div class="modal-footer float-right">
          <button type="submit" form="edit_form_{{ $patient->id }}" class="btn btn-primary">Edit</button>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

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