@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            @if(Auth::user()->photo!='')
                              <img src="{{asset('uploads/users/'.Auth::user()->photo)}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                            @else
                              <img src="{{asset('uploads/avatar/avatar-black.png')}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                            @endif
                        </div>
                        <div class="flex-grow-1 align-self-center">
                          <div class="text-muted">
                              <p class="mb-2">Welcome to Dashboard</p>
                              <h5 class="mb-1">{{Auth::user()->name}}</h5>
                              <p class="mb-0">{{Auth::user()->roleInfo->role_name}}</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-3 align-self-center">
                    <div class="d-flex align-items-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-dark me-3">
                            <span class="avatar-title rounded-circle bg-dark bg-soft font-size-24">
                                <i class="bx bx-mobile"></i>
                            </span>
                        </div>
                        <h5 class="font-size-15 mb-0">{{Auth::user()->phone}}</h5>
                    </div>
                  </div>
                  <div class="col-lg-3 align-self-center">
                    <div class="d-flex align-items-center">
                        <div class="mini-stat-icon avatar-sm rounded-circle bg-dark me-3">
                            <span class="avatar-title rounded-circle bg-dark bg-soft font-size-24">
                                <i class="bx bx-envelope"></i>
                            </span>
                        </div>
                        <h5 class="font-size-15 mb-0">{{Auth::user()->email}}</h5>
                    </div>
                  </div>
                  <div class="col-lg-2 d-none d-lg-block">
                      <div class="clearfix  mt-3 text-right">
                          <a href="{{url('dashboard/account')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-passport label-icon"></i>Profile</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
