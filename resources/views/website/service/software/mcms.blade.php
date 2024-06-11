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
        <h2 class="service_area_title">Manufacturing Companies Management System</h2>
        <p>PRODUCTION MANAGEMENT SOFTWARE FEATURES</p>
        <ul>
          <li>Production Planning</li>
          <li>Product Configuration</li>
          <li>Production Section Configuration</li>
          <li>Section Wise Worker Configuration</li>
          <li>Worker Payment Configuration</li>
          <li>Raw Material Management</li>
          <li>Purchasing Management</li>
          <li>Financial Statement</li>
          <li>General Ledger</li>
          <li>Inventory Management</li>
          <li>Finish Product Inventory</li>
          <li>Finish Product Costing</li>
          <li>Suppliers and customers management</li>
          <li>Facility capacity management</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
