@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/2.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>IT Certification Training</h1>
          </div>
          <div class="col-md-6 col-sm-6 text-right">
              <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Service</a></li>
                  <li class="active">Training</li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="service_area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>PROGRAMMABLE LOGIC – CONTROLLERS (PLCS) AND SCADA SYSTEMS TRAINING COURSE</h2>
        <p>Introduction Although the PLC has been with us for more than thirty years, its role in the industrial environment is still subject to much debate and controversy. For many of its early years its role was confined to simple sequence control and..</p>
        <h4>CATEGORY</h4>
        <i class="fas fa-folder-open"></i><p>Industrial Automation</p>
      </div>
    </div>
  </div>
</div>
@endsection
