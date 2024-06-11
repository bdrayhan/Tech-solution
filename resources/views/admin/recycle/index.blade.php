@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-3">
      <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <p class="text-muted fw-medium mb-2">Users</p>
                    <h4 class="mb-0">125</h4>
                </div>

                <div class="flex-shrink-0 align-self-center">
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                        <span class="avatar-title bg-dark">
                            <i class="bx bx-user-circle font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('dashboard/recycle/user')}}" class="btn btn-md btn-dark btn-block btn_block btn_uppercase">View More</a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card mini-stats-wid">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-grow-1">
                    <p class="text-muted fw-medium mb-2">Completed Projects</p>
                    <h4 class="mb-0">125</h4>
                </div>
                <div class="flex-shrink-0 align-self-center">
                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                        <span class="avatar-title bg-dark">
                            <i class="bx bx-user-circle font-size-24"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{url('dashboard/recycle/gallery')}}" class="btn btn-md btn-dark btn-block btn_block btn_uppercase">View More</a>
      </div>
    </div>
</div>
@endsection
