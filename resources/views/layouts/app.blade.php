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
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/icons.min.css" />
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/app.min.css" id="app-style"/>
    <link rel="stylesheet" href="{{asset('contents/admin')}}/assets/css/style.css"/>
  </head>
  <body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    @yield('content')
                    <div class="mt-2 text-center">
                        <div>
                            <p>Copyright © 2022 | All rights reserved by Dashboard.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('contents/admin')}}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/libs/metismenu/metisMenu.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/libs/simplebar/simplebar.min.js"></script>
  	<script src="{{asset('contents/admin')}}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/app.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/custom.js"></script>
  </body>
</html>
