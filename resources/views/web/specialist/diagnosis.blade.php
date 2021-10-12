@extends('web.layout')

@section('title')
  Diagnosis
@endsection

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Diagnosis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('specialist/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('specialist/patients') }}">Patients</a></li>
              <li class="breadcrumb-item"><a href="{{ url("specialist/patient/$patient_id") }}">Patient Profile</a></li>
              <li class="breadcrumb-item active">Diagnosis</li>
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
              <div class="col-lg-3">
                <div class="card card-primary card-outline sticky-top">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach($types as $type)
                        <a @if($loop->first) class="nav-link active" @else class="nav-link" @endif id="v-pills-{{ preg_replace("[\s]", "_", $type->type) }}-tab" data-toggle="pill" href="#v-pills-{{ preg_replace("[\s]", "_", $type->type) }}" role="tab" aria-controls="v-pills-{{ preg_replace("[\s]", "_", $type->type) }}" aria-selected="false">{{ $type->type }}</a>
                    @endforeach
                  </div>
                </div>
              </div><!-- /.col -->
              <div class="col-lg-9">
                <div class="card card-primary card-outline">
                  <div class="tab-content" id="v-pills-tabContent">
                    {{-- Notic Questions --}}
                    <div class="tab-pane fade show active" id="v-pills-notic" role="tabpanel" aria-labelledby="v-pills-notic-tab">
                      <div class="card-body">
                        <div id="accordion_notic">
                          <form action="" method="post">
                            @foreach($notic_cats as $notic_cat)  
                              <div class="card card-light">
                                <div class="card-header">
                                  <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse_{{ $notic_cat->id }}" aria-expanded="false">
                                      {{ $notic_cat->name() }}
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse_{{ $notic_cat->id }}" class="collapse" data-parent="#accordion_notic" style="">
                                  <div class="card-body">
                                    @foreach($notic_cat->questions as $question) 
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox">
                                          {{ $question->question() }}
                                        </label>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>{{-- Card --}}
                            @endforeach
                            <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                            <div class="clearfix"></div>
                        </form>{{-- form --}}
                        </div>{{-- accordion --}}
                      </div>
                    </div>
                    {{-- Loop for questions => [ 'adir','attached_reports', 'evaluation_history' ]--}}
                    @foreach($diagnosis_questions as $all_questions)
                      @foreach($all_questions as $key => $questions)
                        <div class="tab-pane fade" id="v-pills-{{ $key }}" role="tabpanel" aria-labelledby="v-pills-{{ $key }}-tab">
                          <div class="card-body">
                            <form action="" method="post" id="{{ $key }}_form" @if($key == 'attached_reports') enctype="multipart/form-data" @endif>
                              @foreach($questions as $question)
                                <div class="card">
                                  <div class="row justify-content-between align-items-center card-header">
                                    @if($key == 'attached_reports')
                                      <div class="col-12">
                                        <div class="form-check mb-3">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            <h6 class="m-0">{{ $question->question() }}</h6>
                                          </label>
                                        </div>
                                        <div class="input-group">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                    @else
                                      <div class="col-9">
                                        <h6 class="m-0">{{ $question->question() }}</h6>
                                      </div>
                                      <div class="col-2">
                                        <div class="float-right">
                                          <div class="form-check">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                              Yes
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <label class="form-check-label">
                                              <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                              No
                                            </label>
                                          </div>
                                        </div>
                                        <div class="clearfix"></div>
                                      </div>
                                    @endif
                                  </div>
                                </div>
                                @endforeach
                                <button type="submit" name="{{ $key }}" form="{{ $key }}_form" class="btn btn-sm btn-primary float-right">Submit</button>
                                <div class="clearfix"></div>
                            </form>
                          </div>
                        </div>
                      @endforeach
                    @endforeach

                    {{-- DSM 5 Questions --}}
                    <div class="tab-pane fade" id="v-pills-dsm5" role="tabpanel" aria-labelledby="v-pills-dsm5-tab">
                      <div class="card-body">
                        <div id="accordion_dsm">
                          <form action="" method="post">
                            @foreach($dsm_cats as $dsm_cat)
                              <div class="card card-light">
                                <div class="card-header">
                                  <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse_{{ $dsm_cat->id }}" aria-expanded="false">
                                      {{ $dsm_cat->name() }}
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse_{{ $dsm_cat->id }}" class="collapse" data-parent="#accordion_dsm" style="">
                                  <div class="card-body">
                                    @foreach($dsm_cat->questions as $question)
                                      <div class="card">
                                        <div class="row justify-content-between align-items-center card-header">
                                          <div class="col-9">
                                            <h6 class="m-0">{{ $question->question() }}</h6>
                                          </div>
                                          <div class="col-2">
                                            <div class="float-right">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  No
                                                </label>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            @endforeach
                            <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                            <div class="clearfix"></div>
                          </form>
                        </div> {{-- accordion --}}
                      </div>
                    </div>
                    {{-- Scale Questions --}}
                    <div class="tab-pane fade" id="v-pills-scale" role="tabpanel" aria-labelledby="v-pills-scale-tab">
                      <div class="card-body">
                        <div id="accordion_scale">
                          <form action="" method="post">
                            @foreach($scale_cats as $scale_cat)
                              <div class="card card-light">
                                <div class="card-header">
                                  <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse_{{ $scale_cat->id }}" aria-expanded="false">
                                      {{ $scale_cat->name() }}
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse_{{ $scale_cat->id }}" class="collapse" data-parent="#accordion_scale" style="">
                                  <div class="card-body">
                                    @foreach($dsm_cat->questions as $question)
                                      <div class="card">
                                        <div class="row justify-content-between align-items-center card-header">
                                          <div class="col-9">
                                            <h6 class="m-0">{{ $question->question() }}</h6>
                                          </div>
                                          <div class="col-2">
                                            <div class="float-right">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  No
                                                </label>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            @endforeach
                            <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                            <div class="clearfix"></div>
                          </form>
                        </div> {{-- accordion --}}
                      </div>
                    </div>
                    {{-- Lovaas Questions --}}
                    <div class="tab-pane fade" id="v-pills-lovaas" role="tabpanel" aria-labelledby="v-pills-lovaas-tab">
                      <div class="card-body">
                        <div id="accordion_lovaas">
                          <form action="" method="post">
                            @foreach($lovaas_cats as $lovaas_cat)
                              <div class="card card-light">
                                <div class="card-header">
                                  <h4 class="card-title w-100">
                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse_{{ $lovaas_cat->id }}" aria-expanded="false">
                                      {{ $lovaas_cat->name() }}
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapse_{{ $lovaas_cat->id }}" class="collapse" data-parent="#accordion_lovaas" style="">
                                  <div class="card-body">
                                    @foreach($dsm_cat->questions as $question)
                                      <div class="card">
                                        <div class="row justify-content-between align-items-center card-header">
                                          <div class="col-9">
                                            <h6 class="m-0">{{ $question->question() }}</h6>
                                          </div>
                                          <div class="col-2">
                                            <div class="float-right">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  Yes
                                                </label>
                                              </div>
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input class="form-check-input" type="radio" name="radio{{ $question->id }}">
                                                  No
                                                </label>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                          </div>
                                        </div>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                            @endforeach
                            <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                            <div class="clearfix"></div>
                          </form>
                        </div> {{-- accordion --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content -->
  </div><!-- /.content-wrapper -->
  

@endsection