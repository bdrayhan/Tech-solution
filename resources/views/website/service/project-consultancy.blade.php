@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/2.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>Project Consultancy</h1>
          </div>
          <div class="col-md-6 col-sm-6 text-right">
              <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Service</a></li>
                  <li class="active">Audit</li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="service_area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="service_area_title">Project Consultancy</h2>
      </div>
    </div>
  </div>
</div>
@endsection
