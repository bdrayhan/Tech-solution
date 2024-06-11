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
          <a href="#"><h3>AWS CERTIFIED SOLUTIONS ARCHITECT</h3></a>
          <p>Overview: The AWS Solutions Architect course is intended to gain detailed understanding about AWS architectural principles and services. Help in gaining the knowledge how cloud calculating is redefining the rules of IT infrastructure a..</p>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>Virtualization</p>
        </div>
        <div class="">
          <a href="#"><h3>VMWARE VSPHERE: INSTALL, CONFIGURE, MANAGE [V6.5]</h3></a>
          <p>Overview: This five-day course features intensive hands-on training that focuses on installing, configuring, and managing VMware vSphere® 6.5, which includes VMware ESXi™ 6.5 and VMware vCenter Server® 6.5. This course prepares you to admi..</p>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>Virtualization</p>
        </div>
        <div class="">
          <a href="#"><h3>BIG DATA/CLOUD</h3></a>
          <p>Length: 2 Days In this introductory to intermediate-level, Introduction to Cloud Computing training course, you will gain a solid understanding of the fundamental concepts and architecture of cloud computing and of the design and deployment o..</p>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>Virtualization</p>
        </div>
        <div class="">
          <a href="#"><h3>MS CLOUD</h3></a>
          <h4>CATEGORY</h4>
          <i class="fas fa-folder-open"></i><p>Virtualization</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
