@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/2.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>Software Services</h1>
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
        <h2 class="service_area_title">School Management Software</h2>
        <h3>THE SERVICES WE PROVIDE</h3>
        <ul>
          <li>Admission Management</li>
          <li>Account Management</li>
          <li>Laboratory Management</li>
          <li>Human Resource Management</li>
          <li>Profile Management</li>
          <li>Account Management Software</li>
          <li>Library Management</li>
          <li>Student Attendees Tracking and Analytics:</li>
          <li>Financial Management</li>
          <li>Attendance Management</li>
          <li>Examination Management</li>
          <li>Alumni Management</li>
          <li>Fees Management</li>
          <li>Evaluation Management</li>
          <li>Curriculum Management</li>
          <li>Scheduling</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
