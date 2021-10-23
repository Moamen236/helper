<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title')</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('web/css/fontawesome.all.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('web/css/adminlte.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        @yield('css')
    </head>
    <body class="hold-transition sidebar-mini">

        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
              <!-- Left navbar links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <!-- language Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    @if(App::getLocale() == 'ar')
                      <b> Ar </b>
                    @else
                      <b> En </b> 
                    @endif
                  </a>
                  <div class="dropdown-menu dropdown-menu-right p-0" style="left: inherit; right: 0px;">
                    <a href="{{ url("lang/set/en") }}"
                    @if(App::getLocale() == 'en')
                      class="dropdown-item active" 
                    @else
                      class="dropdown-item" 
                    @endif>
                      English
                    </a>
                    <a href="{{ url("lang/set/ar") }}" 
                    @if(App::getLocale() == 'ar')
                      class="dropdown-item active" 
                    @else
                      class="dropdown-item" 
                    @endif>
                      Arabic
                    </a>
                  </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-envelope mr-2"></i> 4 new messages
                      <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-users mr-2"></i> 8 friend requests
                      <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                      <i class="fas fa-file mr-2"></i> 3 new reports
                      <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                  </div>
                </li>
                <li class="nav-item">
                  <form action="{{ url('logout') }}" method="post" id="logout-form">@csrf</form>
                  <a class="nav-link" href="#" aria-expanded="false" id="logout">
                    <i class="fas fa-sign-out-alt"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.navbar -->
          
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
              <!-- Brand Logo -->
              <a href="#" class="brand-link">
                <img src="{{ asset('web/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">Autism Helper</span>
              </a>
          
              <!-- Sidebar -->
              <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                    <img src="{{ asset('web/img/user-profile.jpg') }}" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                  </div>
                </div>
          
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                      <a href="{{ url('specialist/home') }}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>
                          {{ __('web.home') }}
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('specialist/patients') }}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                          {{ __('web.patients') }}
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('specialist/schedule') }}" class="nav-link">
                        <i class="fas fa-calendar-alt"></i>
                        <p>
                          {{ __('web.schedule') }}
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-newspaper"></i>
                        <p>
                          {{ __('web.articles') }}
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-sitemap"></i>
                        <p>
                          {{ __('web.organizations') }}
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
              <!-- /.sidebar -->
            </aside>
          
            @yield('main')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->
        </div>

        <!-- jQuery -->
        <script src="{{ asset('web/js/jquery.js') }}"></script>
        <!-- Bootstrap 4 -->
        {{-- <script src="{{ asset('web/js/bootstrap.bundle.js') }}"></script> --}}
        <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('web/js/adminlte.js') }}"></script>
        <script>
          var form = document.getElementById('logout-form');
          var link = document.getElementById('logout');
  
          link.addEventListener('click' , function(e){
              e.preventDefault();
              form.submit();
          })
        </script>
        @yield('js')
    </body>
</html>