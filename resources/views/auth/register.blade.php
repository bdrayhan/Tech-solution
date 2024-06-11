@extends('layouts.app')
@section('content')
<div class="card overflow-hidden">
    <div class="bg-primary bg-soft">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Register !</h5>
                    <p>Create your account now.</p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="{{asset('contents/admin')}}/assets/images/profile-img.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0">
        <div>
            <a href="{{url(url('/'))}}">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="{{asset('contents/admin')}}/assets/images/csl-icon.png" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>
        </div>
        <div class="p-2">
            <form method="post" action="{{ route('register') }}">
              @csrf
                <div class="form-group mb-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" value="" required>
                </div>

                <div class="mt-4 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                </div>
                <div class="mt-4">
                  <div class="row">
                    <div class="col-md-12">
                      Already have an account ? <a href="{{ route('login') }}" class="font-weight-medium text-primary"> Login</a>
                    </div>
                  </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
