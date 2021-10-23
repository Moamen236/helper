@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


@if(session('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="icon fas fa-check"></i> {{ session('success') }}
    </div>
@endif


@if($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach($errors->all() as $error)
            <p> {{ $error }}</p>
        @endforeach
    </div>
@endif