@extends('layouts.app')
@section('content')
<div class="card overflow-hidden">
    <div class="bg-soft-primary">
        <div class="row">
            <div class="col-8">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Login !</h5>
                    <p>Sign in to continue to Dashboard.</p>
                </div>
            </div>
            <div class="col-4 align-self-end">
                <img src="{{asset('contents/admin')}}/assets/images/profile-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <div>
          <a href="#">
            <div class="avatar-md profile-user-wid mb-4">
              <span class="avatar-title rounded-circle bg-light">
                  <img src="{{asset('contents/admin')}}/assets/images/csl-icon.png" alt="" class="rounded-circle" height="34">
              </span>
            </div>
          </a>
        </div>
        <div class="p-2">
          @if(Session::has('errors'))
          <div class="alert alert-danger alerterror" role="alert">
             <strong>Opps!</strong> {{ $errors->first('email') }}
          </div>
          @endif
          <form class="form-horizontal" method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="enter email address" value="{{old('email')}}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="enter password" required>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                <label class="custom-control-label" for="remember">Remember me</label>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Log In</button>
            </div>
            <div class="mt-4">
              <div class="row">
                <div class="col-md-12">
                  <a href="{{ url('forgot-password') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
