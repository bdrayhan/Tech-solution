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
        <h2 class="service_area_title">Customer Relationship Management (CRM)</h2>
        <p>CRM SOFTWARE FEATURES</p>
        <ul>
          <li>Contact Management</li>
          <li>Reporting and dashboards</li>
          <li>Campaign management</li>
          <li>Email tracking</li>
          <li>Align sales and marketing</li>
          <li>Email Client Integration</li>
          <li>Workflow and Approvals</li>
          <li>Sales Performance Management</li>
          <li>Marketing Automation Integration</li>
          <li>Support Automation</li>
          <li>Role-Based Views</li>
          <li>Campaign Management</li>
          <li>ERP Integration</li>
          <li>Sales Team and Customer Opportunity Management</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
