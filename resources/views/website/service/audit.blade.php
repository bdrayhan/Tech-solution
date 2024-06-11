@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/2.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>IT Audit</h1>
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
        <h2 class="service_area_title">IT Audit</h2>
        <p>An IT audit is the examination and evaluation of an organization’s information technology infrastructure, policies and operations. … The primary objectives of an IT audit include: Evaluate the systems and processes in place that secure company data.</p>
        <h3 class="service_area_subtitle">IT Audit Quesnier:</h3>
        <div class="service_area_details">
          <h4 class="service_area_details_title">1.Network</h4>
          <ul>
            <li>What is the status of your network? Windows or Linux?</li>
            <li>What are your network connection speeds?</li>
            <li>Do you have fiber or Ethernet 10/100/1000?
              <ul>
                <li>If fiber, what areas are serviced?</li>
                <li>Do you have these mapped in a digital file or in blueprints?</li>
              </ul>
            </li>
            <li>What are the firewall speeds?</li>
            <li>Does your Firewall have VPN capability?</li>
            <li>Does your Firewall have DMZ capability?</li>
            <li>Does your Firewall have site-to-site capability?</li>
            <li>Is your Firewall Stateful?</li>
            <li>Are you able to do IPSEC or PPTP?</li>
            <li>What is your incoming bandwidth?</li>
            <li>What is your outgoing bandwidth?</li>
            <li>Has your bandwidth spiked to 80% or more in the past 3 months?</li>
            <li>Are your switches gigabit or higher?</li>
            <li>Do you have an active directory and domain?
              <ul>
                <li>How many domains are used in your network? Will the Lucity servers use different domains than the users?</li>
                <li>Do you have ADFS or an Identity Store like BigIP?</li>
              </ul>
            </li>
            <li>Do you have a server room?</li>
            <li>Are your servers on railed racks?</li>
            <li>Do you have VOIP phones configured for both data and voice connections to laptops/workstations?
              <ul>
                <li>What is the speed of the phones? 100mbit or 1000mbit?</li>
              </ul>
            </li>
            <li>Do you use load balancing on your web servers like BigIP F5?</li>
          </ul>
        </div>
        <div class="service_area_details">
          <h4 class="service_area_details_title">2.Software</h4>
          <ul>
            <li>Do you use SQL Server?</li>
            <li>Do you have Crystal Reports Enterprise Server?</li>
            <li>Is your RDBMS dedicated?</li>
            <li>Is your RDBMS hosting other databases and/or applications?</li>
            <li>What are the specifications of the user workstations (mainly CPU, RAM)?</li>
          </ul>
        </div>
        <div class="service_area_details">
          <h4 class="service_area_details_title">3.Server</h4>
          <ul>
            <li>Do the servers reside in the same domain and/or switch?</li>
            <li>Are you running SAS, SATA, Fiber, or SCSI on your database server/s?</li>
            <li>What is the RAID configuration on your database servers?</li>
            <li>How many CPUs on the database servers?</li>
            <li>How much RAM is on your database server/s?</li>
            <li>How old are your database server/s?</li>
          </ul>
        </div>
        <div class="service_area_details">
          <h4 class="service_area_details_title">4.Backups</h4>
          <ul>
            <li>Do you have Tape, HDD, or offsite backup equipment?
              <ul>
                <li>If tapes, what type of tapes.</li>
                <li>If HDD, how much storage? What is the capacity?</li>
              </ul>
            </li>
            <li>What type of devices do you have?</li>
            <li>What are the backup routines?  </li>
            <li>What is the longevity of the backup?</li>
            <li>Is there a reuse policy?</li>
            <li>When are the full backups?</li>
            <li>When are the incremental backups?</li>
            <li>Is there a secondary failsafe system offsite?</li>
            <li>Do you back up the OS or the entire client PC, Laptop or mobile device? Snapshot backup
              <ul>
                <li>When does the backup occur?</li>
                <li>Where do the backups get stored?</li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="service_area_details">
          <h4 class="service_area_details_title">5.Intended Uses</h4>
          <ul>
            <li>Are your servers virtual or stand alone?</li>
          </ul>
          <div class="text-center">
            <h4>IT Audit Process:</h4>
            <img src="({{asset('contents/website')}}/assets/img/services/it-audit.jpg)" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
