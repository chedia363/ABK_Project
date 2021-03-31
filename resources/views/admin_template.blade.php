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
  <link rel="stylesheet" href="{{ asset('css/style-rtladmin.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @else
    <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/AdminLTE-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminLTErtl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-rtladmin.css') }}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    @endif
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><span class="lnr lnr-menu"></span></a>
      </li>
    </ul>

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"><span class="lnr lnr-earth" style="color: #aa802d;"></span>

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
    <span class="lnr lnr-user" style="color: #aa802d;"></span>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">

        
            <a class="dropdown-item" href="{{ route('logout') }}">
                @lang('front.Logout')
           </a> 
              
             <a class="dropdown-item" href="{{ route('admin.profile', auth()->user()->id) }}">
                @lang('front.My Profile')
           </a> 
            
                                
          </span>
          
          
        </div>
        
      </li>      
      
  
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('Abakhome') }}" class="brand-link">
      <img src="{{ asset('bower_components/admin-lte/dist/img/AdminLTELogo.svg') }}" alt="AdminLTE Logo" class="" style="padding-top:3rem;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pb-3 mb-3 d-flex">
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li><a href="{{ route('home') }}"><span class="lnr lnr-home"></span>
@lang('front.Home')</a></li>
               <li class="nav-item has-treeview menu-open">
               
                  <ul class="nav nav-treeview">
                     <li class="nav-item">
                        <a href="#" class="nav-link active"> <span class="lnr lnr-diamond"></span>
                          @lang('front.Our initiative')
                        </a>
                      </li>

                     <li class="nav-item @if(request()->segment(1) == 'activities') active @endif">
                        <a href="{{ route('activities.index') }}" class="nav-link active"><span class="lnr lnr-unlink"></span>

                          @lang('front.Our activities')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'fields') active @endif">
                        <a href="{{ route('fields.index') }}" class="nav-link active"><span class="lnr lnr-leaf"></span>

                          @lang('front.Our fields')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'programs') active @endif">
                        <a href="{{ route('programs.index') }}" class="nav-link active"><span class="lnr lnr-linearicons"></span>

                          @lang('front.Our programs')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'aboutus') active @endif">
                        <a href="{{ route('aboutus.index') }}" class="nav-link active"><span class="lnr lnr-question-circle"></span>

                          @lang('front.About us')
                        </a>
                      </li>      
                      <li class="nav-item @if(request()->segment(1) == 'contactus') active @endif">
                        <a href="{{ route('contactus.index') }}" class="nav-link active"><span class="lnr lnr-phone-handset"></span>

                          @lang('front.Contact us')
                        </a>
                      </li> 
                      <li class="nav-item @if(request()->segment(1) == 'policiesprcdural') active @endif">
                        <a href="{{ route('policiesprcdural.index') }}" class="nav-link active"><span class="lnr lnr-book"></span>

                          @lang('front.Policies and procedural guides')
                        </a>
                      </li>                       
                      <li class="nav-item @if(request()->segment(1) == 'teams') active @endif">
                        <a href="{{ route('teams.index') }}" class="nav-link active"><span class="lnr lnr-users"></span>

                          @lang('front.Board of Directors')
                        </a>
                      </li>   
                      <li class="nav-item @if(request()->segment(1) == 'vision') active @endif">
                        <a href="{{ route('vision.index') }}" class="nav-link active"><span class="lnr lnr-eye"></span>

                          @lang('front.Our vision')
                        </a>
                      </li> 
                      <li class="nav-item @if(request()->segment(1) == 'messages') active @endif">
                        <a href="{{ route('messages.index') }}" class="nav-link active"><span class="lnr lnr-envelope"></span>

                          @lang('front.Our Message')
                        </a>
                      </li>                       
                      <li class="nav-item @if(request()->segment(1) == 'invests') active @endif">
                        <a href="{{ route('invests.index') }}" class="nav-link active"><span class="lnr lnr-layers"></span>

                          @lang('front.Invest with us')
                        </a>
                      </li>
                      <li class="nav-item @if(request()->segment(1) == 'partners') active @endif">
                        <a href="{{ route('partners.index') }}" class="nav-link active"><span class="lnr lnr-user"></span>

                          @lang('front.Our partners')
                        </a>
                      </li>                                                              
                  </ul>
               </li>


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
              <ol class="breadcrumb float-sm-right" style="font-weight: bold;">
                <li class="breadcrumb-item"><a href="#">@lang('front.Home')</a></li>
                <li class="breadcrumb-item active">@lang('front.Starter Page')</li>
              </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        @if(Route::currentRouteName() == 'home')
        <div class="bannerdashbord">
          <div class="row mb-2 justify-content-center">
            <div class="col-sm-12">
                <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
                  <div class="col-xl-6" style="justify-content: center; align-items: center; margin: auto; text-align: center; opacity: 0.9; border-radius: 20px; padding: 3rem; background: #fff; margin-top: 8rem; font-family: 'ArbFONTS-GE_Dinar_Two_Light-1'; font-size: 25px;">
                    <p class="titleabak">@lang('front.Association registered in the Ministry of Human Resources with the number (1345) dated 01/20/1442 AH')</p>
                  </div>
                </div>
            </div><!-- /.col -->
          </div>
        </div>
        @endif
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


  <!-- //////////////////// -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <p>@lang('front.All rights reserved for Abaq Youth Association  2021 c')</p> 
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
