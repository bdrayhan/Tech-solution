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
        <h2 class="service_area_title">Human Resource Management Software</h2>
        <h3>HR MANAGEMENT SOFTWARE FEATURES</h3>
        <ul>
          <li>Employee Data Management</li>
          <li>Employee Benefit Information Management</li>
          <li>Company Information Management</li>
          <li>HR Documents Management</li>
          <li>HR Manager Reminder</li>
          <li>Tasks & Checklist Management</li>
          <li>Leave & Attendance Management</li>
          <li>Performance Management</li>
          <li>Payroll Management</li>
          <li>Employee Self Service</li>
          <li>Increment Management</li>
          <li>Employee Shift Management</li>
          <li>Employee Finance Management</li>
          <li>MIS Reporting</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
