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
        <h2 class="service_area_title">Restaurant Management Software</h2>
        <h3>THE SERVICES WE PROVIDE</h3>
        <ul>
          <li>Inventory Management</li>
          <li>Reservations Management</li>
          <li>Kitchen Management</li>
          <li>Sales Tracking</li>
          <li>Menu Management</li>
          <li>Table Management</li>
          <li>Wait List Management</li>
          <li>Payroll Management</li>
          <li>Wait List Management</li>
          <li>Point of Sale (POS)</li>
          <li>Wait staff Management</li>
          <li>Food Costing</li>
          <li>Delivery Management</li>
          <li>Table Management</li>
          <li>Online Ordering</li>
          <li>Gift Card Management</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
