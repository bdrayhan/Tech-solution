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
        <h2 class="service_area_title">Pharmacy Management Software</h2>
        <h3>FEATURES OF OUR PHARMACY MANAGEMENT SOFTWARE</h3>
        <ul>
          <li>Product Entry</li>
          <li>Product Sales feature</li>
          <li>Product Purchase feature</li>
          <li>Inventory Management</li>
          <li>Sales reporting and analytics</li>
          <li>Customer Account Management</li>
          <li>Employee management</li>
          <li>Barcode Generation</li>
          <li>Accounts Management</li>
          <li>Barcode Scanning</li>
          <li>Pricing Management</li>
          <li>Retail Management</li>
          <li>Discount Management</li>
          <li>Returns Tracking</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
