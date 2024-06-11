@extends('layouts.website')
@section('content')
<div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('contents/website')}}/assets/img/banner/12.jpg);">
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-6 text-left">
              <h1>Online Registration</h1>
          </div>
          <div class="col-md-6 col-sm-6 text-right">
              <ul class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Registration</li>
              </ul>
          </div>
      </div>
  </div>
</div>
<div class="registration_area default-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="register_header">Online Registration</h1>
        <p>Fields marked with an <span class="req_star">*</span> are required</p>
        @if(Session::has('success'))
          <script type="text/javascript">
              swal({title: "Success!", text: "{{Session::get('success')}}", icon: "success", button: "OK", timer:5000,});
           </script>
        @endif
        @if(Session::has('error'))
            <script type="text/javascript">
                swal({title: "Opps!",text: "Error! Please try again", icon: "error", button: "OK", timer:5000,});
            </script>
        @endif
        <form method="post" action="{{url('submit/online-registration')}}">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Reference Number:</label>
                <input type="text" class="form-control form_control" name="reference" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Full Name<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="name" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Date of Birth<span class="req_star">*</span>:</label>
                <input type="date" class="form-control form_control" name="dob" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Personal Email ID<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="email" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Official Email ID<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="office_email" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Cell Phone Number<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="phone" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Designation<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="designation" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Department:</label>
                <input type="text" class="form-control form_control" name="department" value="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Organization<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="organization" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Passport/NID Number<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="nid" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Training Name<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="training" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Training Start Date<span class="req_star">*</span>:</label>
                <input type="date" class="form-control form_control" name="training_date" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Home Address<span class="req_star">*</span>:</label>
                <input type="text" class="form-control form_control" name="address" value="" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Sponsorship<span class="req_star">*</span>:</label>
                <select class="form-control" name="sponsor" required>
                  <option value="">Select Sponsor</option>
                  <option value="personally">Personally</option>
                  <option value="officially">Officially</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form_label">Payment Method<span class="req_star">*</span>:</label>
                <select class="form-control" name="payment" required>
                  <option value="">Select Payment Method</option>
                  <option value="cash">Cash</option>
                  <option value="card">Card</option>
                  <option value="mobile-banking">Mobile Banking</option>
                  <option value="cheque">Cheque</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="checkbox">
                  <label>
                    <input type="checkbox" value="confirm" required>
                    <strong><span class="req_star">*</span>Please confirm my seat for this Training</strong>
                  </label>
              </div>
            </div>
            <div class="col-md-12 text-center">
              <input type="submit" class="btn btn-md btn-success" value="REGISTRATION"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
