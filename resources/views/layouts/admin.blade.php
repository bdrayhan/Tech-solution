<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="Dashboard" />
    <meta name="keywords" content="PHP, MySQL, Laravel" />
  	<meta name="author" content="Uzzal" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  	<title>Dashboard</title>
  	<link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/csl-icon.png"/>
  	<link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/bootstrap.min.css" id="bootstrap-style" />
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/libs/summernote/summernote-lite.min.css"/>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/icons.min.css" />
  	<link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/app.min.css" id="app-style"/>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css"/>
  </head>
  <body data-sidebar="dark">
  	<div id="layout-wrapper">
  		<header id="page-topbar">
  			<div class="navbar-header">
  				<div class="d-flex">
  					<div class="navbar-brand-box">
  						<a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                  <img src="{{asset('contents/admin')}}/assets/images/csl-icon-white.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                  <img src="{{asset('contents/admin')}}/assets/images/csl-logo.png" alt="" height="19">
                </span>
              </a>
  					</div>
  					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
  					<form class="app-search d-none d-lg-block">
  						<div class="position-relative">
  							<input type="text" class="form-control" placeholder="Search...">
                <span class="bx bx-search-alt"></span>
              </div>
  					</form>
  				</div>
  				<div class="d-flex">
  					<div class="dropdown d-none d-lg-inline-block ms-1">
  						<button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen"> <i class="bx bx-fullscreen"></i> </button>
  					</div>
  					<div class="dropdown d-inline-block">
  						<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bx bx-bell bx-tada"></i> <span class="badge bg-danger rounded-pill">1</span> </button>
  						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
  							<div class="p-3">
  								<div class="row align-items-center">
  									<div class="col">
  										<h6 class="m-0" key="t-notifications"> Notifications </h6> </div>
  									<div class="col-auto"> <a href="#!" class="small" key="t-view-all"> View All</a> </div>
  								</div>
  							</div>
  							<div data-simplebar style="max-height: 230px;">
  								<a href="javascript: void(0);" class="text-reset notification-item">
  									<div class="d-flex">
  										<div class="avatar-xs me-3">
                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                          <i class="bx bx-cart"></i>
                        </span>
                      </div>
  										<div class="flex-grow-1">
  											<h6 class="mb-1" key="t-your-order">Your order is placed</h6>
  											<div class="font-size-12 text-muted">
  												<p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
  												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
  											</div>
  										</div>
  									</div>
  								</a>
  							</div>
  							<div class="p-2 border-top d-grid">
  								<a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)"> <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> </a>
  							</div>
  						</div>
  					</div>
  					<div class="dropdown d-inline-block">
  						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{asset('contents/admin')}}/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
  						<div class="dropdown-menu dropdown-menu-end">
  							<a class="dropdown-item" href="{{url('dashboard/account')}}">
                  <i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span>
                </a>
                <a class="dropdown-item d-block" href="#">
                  <i class="bx bx-wrench font-size-16 align-middle me-1"></i><span key="t-settings">Settings</span>
                </a>
                <a class="dropdown-item" href="#">
                  <i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span>
                </a>
  							<div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span>
                </a>
              </div>
  					</div>
  				</div>
  			</div>
  		</header>
  		<div class="vertical-menu">
  			<div data-simplebar class="h-100">
  				<div id="sidebar-menu">
  					<ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title" key="t-menu">Navigation</li>
              <li><a href="{{url('dashboard')}}" class="waves-effect"><i class="bx bx-home-circle"></i><span>Dashboard</span></a></li>
              @if(Auth::user()->role=='1')
              <li><a href="#" class="waves-effect"><i class="bx bx-user-circle"></i><span>Users</span></a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{url('dashboard/user')}}">All User</a></li>
                      <li><a href="{{url('dashboard/user/add')}}">Add User</a></li>
                      <li><a href="{{url('dashboard/role')}}">User Role</a></li>
                      <li><a href="{{url('dashboard/permission')}}">All Permission</a></li>
                      <li><a href="{{url('dashboard/module')}}">Apps Module</a></li>
                  </ul>
              </li>
              @endif
              <li><a href="#" class="waves-effect"><i class="bx bx-cog"></i><span>Manage</span></a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{url('dashboard/manage/basic')}}">Basic Information</a></li>
                      <li><a href="{{url('dashboard/manage/social')}}">Social Media</a></li>
                      <li><a href="{{url('dashboard/manage/contact')}}">Contact Information</a></li>
                      <li><a href="{{url('dashboard/content')}}">Manage Content</a></li>
                      <li><a href="{{url('dashboard/page')}}">Manage Page</a></li>
                  </ul>
              </li>
              <li><a href="{{url('dashboard/banner')}}" class="waves-effect"><i class="bx bx-carousel"></i><span>Banner</span></a></li>
              <li><a href="#" class="waves-effect"><i class="bx bx-photo-album"></i><span>Gallery</span></a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{url('dashboard/gallery')}}">All Gallery Image</a></li>
                      <li><a href="{{url('dashboard/gallery/add')}}">Add Gallery Image</a></li>
                      <li><a href="{{url('dashboard/gallery/category')}}">Gallery Category</a></li>
                  </ul>
              </li>
              <li><a href="{{url('dashboard/team')}}" class="waves-effect"><i class="bx bx-buoy"></i><span>Team</span></a></li>
              <li><a href="{{url('dashboard/service')}}" class="waves-effect"><i class="bx bx-bolt-circle"></i><span>Service</span></a></li>
              <li><a href="#" class="waves-effect"><i class="bx bx-layer"></i><span>Projects</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{url('dashboard/project')}}">All Project</a></li>
                    <li><a href="{{url('dashboard/project/add')}}">Add Project</a></li>
                    <li><a href="{{url('dashboard/project/category')}}">Project Category</a></li>
                </ul>
              </li>
              <li><a href="{{url('dashboard/partner')}}" class="waves-effect"><i class="bx bx-selection"></i><span>Partner</span></a></li>
              <li><a href="{{url('dashboard/client')}}" class="waves-effect"><i class="bx bx-bullseye"></i><span>Client</span></a></li>
              <li><a href="{{url('dashboard/testimonial')}}" class="waves-effect"><i class="bx bx-crown"></i><span>Testimonial</span></a></li>
              <li><a href="#" class="waves-effect"><i class="bx bx-data"></i><span>Registration</span></a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{url('dashboard/newsletter/subscribe')}}">Newsletter Subscribe</a></li>
                    <li><a href="#">Online Registration</a></li>
                </ul>
              </li>
              <li><a href="{{url('dashboard/contact/message')}}" class="waves-effect"><i class="bx bx-message-alt-dots"></i><span>Contact Message</span></a></li>
              <li><a href="{{url('dashboard/recycle')}}" class="waves-effect"><i class="bx bx-trash"></i><span>Recycle</span></a></li>
              <li><a href="{{url('/')}}" class="waves-effect" target="_blank"><i class="bx bx-globe"></i><span>Live Site</span></a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="waves-effect"><i class="bx bx-power-off"></i><span>Logout</span></a></li>
  					</ul>
  				</div>
  			</div>
  		</div>
  		<div class="main-content">
  			<div class="page-content">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col-12">
  							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
  								<h4 class="mb-sm-0 font-size-18">Dashboard</h4>
  								<div class="page-title-right">
  									<ol class="breadcrumb m-0">
  										<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
  										<li class="breadcrumb-item active">Home</li>
  									</ol>
  								</div>
  							</div>
  						</div>
  					</div>
  					@yield('content')
  				</div>
  			</div>
  			<footer class="footer">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col-sm-6">
                Copyright © 2022 | All rights reserved by Dashboard.
              </div>
  						<div class="col-sm-6">
  							<div class="text-sm-end d-none d-sm-block">
                  Development by Creative System Limited.
                </div>
  						</div>
  					</div>
  				</div>
  			</footer>
  		</div>
  	</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  	<script src="{{asset('contents/admin')}}/assets/libs/jquery/jquery.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/summernote/summernote-lite.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

  	<script src="{{asset('contents/admin')}}/assets/libs/metismenu/metisMenu.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/libs/simplebar/simplebar.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/libs/node-waves/waves.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/js/pages/dashboard.init.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/app.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
  </body>
</html>
