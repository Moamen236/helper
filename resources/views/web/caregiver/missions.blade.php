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
                    <h1 class="m-0 text-dark">{{ __('web.missions') }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('caregiver/home') }}">{{ __('web.home') }}</a></li>
                    <li class="breadcrumb-item active"><a href="{{ url('caregiver/missions') }}">{{ __('web.missions') }}</a></li>
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
                                <h3 class="card-title">Collapsible Accordion</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="accordion">
                                    @foreach ($missions as $mission) 
                                        <div class="card {{ $mission->finish == true ? 'card-success' : 'card-primary'}}">
                                            <div class="card-header">
                                                <h4 class="card-title w-100">
                                                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapse_{{ $mission->id }}" aria-expanded="false">
                                                    {{ $mission->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse_{{ $mission->id }}" class="collapse" data-parent="#accordion" style="">
                                                <div class="card-body">
                                                    {{ $mission->details }}
                                                    @if(isset($mission->attachments))
                                                        <div class="row justify-content-center align-items-center mt-4">
                                                            @foreach ($mission->attachments as $attachment)
                                                                @if($attachment->attached != null)
                                                                    <div class="col-md-4">
                                                                        <img src="{{ asset("web/img/attached/$attachment->attached") }}" alt="" class="img-fluid">
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    @if($mission->finish == false)
                                                        <div class="finish-btn">
                                                            <a href="{{ url('') }}" class="btn btn-block btn-warning btn-sm fw-bold" style="width: fit-content; float: right;">Finish this mission</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="paginate m-auto float-right">
                                        {{ $missions->links() }}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
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