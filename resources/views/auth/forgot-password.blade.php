@extends('layouts.app')
@section('content')
<div class="card overflow-hidden">
    <div class="bg-soft-primary">
        <div class="row">
            <div class="col-8">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Forgot Password !</h5>
                    <p>Enter your Email and instructions will be sent to you!</p>
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
          <form class="form-horizontal" method="post" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="enter email address" value="{{old('email')}}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">Reset</button>
            </div>
            <div class="mt-4">
              <div class="row">
                <div class="col-md-12">

                </div>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection
