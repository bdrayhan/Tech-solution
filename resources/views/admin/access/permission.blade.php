@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body text-center pt-5 pb-5">
          <h3 class="card-title mt-0">Access Denied!</h3>
          <p class="card-text">You have no permission access this page and operation. Please access your permission able page and action.</p>
          <a href="{{url('dashboard')}}" class="btn btn-md btn-primary waves-effect waves-light">Go Dashboard</a>
      </div>
    </div>
  </div>
</div>
@endsection
