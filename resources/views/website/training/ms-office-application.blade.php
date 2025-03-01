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
        <div class="">
          <a href="#"><h3>AZURE</h3></a>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>MS Office Application</p>
        </div>
        <div class="">
          <a href="#"><h3>SHAREPOINT</h3></a>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>MS Office Application</p>
        </div>
        <div class="">
          <a href="#"><h3>MS OFFICE 10/16</h3></a>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>MS Office Application</p>
        </div>
        <div class="">
          <a href="#"><h3>MS OFFICE 365</h3></a>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>MS Office Application</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
