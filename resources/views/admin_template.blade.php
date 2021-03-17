<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html  lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>عبق</title>

  @if(App::isLocale('en'))
      <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @else
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminLTErtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-rtladmin.css') }}">
    @endif
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

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">

          @foreach (config('languages') as $lang => $language)
              @if ($lang != app()->getLocale())
                  
                <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                  
              @endif
          @endforeach
          </span>
          
          
        </div>
        
      </li>
      <!-- logout Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">

        
            <a class="dropdown-item" href="{{ route('logout') }}">
                {{ __('Logout') }}
           </a> 
              
             <a class="dropdown-item" href="{{ route('admin.profile', auth()->user()->id) }}">
                {{ ('front.My Profile') }}
           </a> 
            
                                
          </span>
          
          
        </div>
        
      </li>      
      
  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#0c233f">
    <!-- Brand Logo -->
    <a href="{{ route('Abakhome') }}" class="brand-link">
      <img src="{{ asset('bower_components/admin-lte/dist/img/AdminLTELogo.svg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li><a href="{{ route('Abakhome') }}"><i class="fa fa-home"></i>@lang('front.Home')</a></li>
               <li class="nav-item has-treeview menu-open">
               
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Our initiative')
                        </a>
                      </li>

                     <li class="nav-item @if(request()->segment(1) == 'activities') active @endif">
                        <a href="{{ route('activities.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Our activities')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'fields') active @endif">
                        <a href="{{ route('fields.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Our fields')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'programs') active @endif">
                        <a href="{{ route('programs.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Our programs')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'aboutus') active @endif">
                        <a href="{{ route('aboutus.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.About us')
                        </a>
                      </li>      
                      <li class="nav-item @if(request()->segment(1) == 'contactus') active @endif">
                        <a href="{{ route('contactus.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Contact us')
                        </a>
                      </li> 
                      <li class="nav-item @if(request()->segment(1) == 'policiesprcdural') active @endif">
                        <a href="{{ route('policiesprcdural.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Policies and procedural guides')
                        </a>
                      </li>                       
                      <li class="nav-item @if(request()->segment(1) == 'teams') active @endif">
                        <a href="{{ route('teams.index') }}" class="nav-link active">
                          <i class="far fa-circle nav-icon"></i>
                          @lang('front.Board of Directors')
                        </a>
                      </li>                                         
                  </ul>
               </li>


               {{--  <li class="nav-item has-treeview menu-open"> 
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="icongift right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@lang('front.Abeq')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
          <div class="col-lg-6">
          

            
          </div>
     
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('bower_components/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bower_components/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
