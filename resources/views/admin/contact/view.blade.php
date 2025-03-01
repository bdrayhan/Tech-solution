@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> View Contact Message Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/contact/message')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn d-print-none"><i class="fas fa-th label-icon"></i>All Message</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                        @if(Session::has('success'))
                          <div class="alert alert-success alertsuccess" role="alert">
                             <strong>Success!</strong> {{Session::get('success')}}
                          </div>
                        @endif
                        @if(Session::has('error'))
                          <div class="alert alert-danger alerterror" role="alert">
                             <strong>Opps!</strong> {{Session::get('error')}}
                          </div>
                        @endif
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <table class="table table-bordered table-striped table-hover dt-responsive nowrap custom_view_table">
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$data->cm_name}}</td>
                          </tr>
                          <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td>{{$data->cm_phone}}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$data->cm_email}}</td>
                          </tr>
                          <tr>
                            <td>Subject</td>
                            <td>:</td>
                            <td>{{$data->cm_subject}}</td>
                          </tr>
                          <tr>
                            <td>Message</td>
                            <td>:</td>
                            <td>{{$data->cm_message}}</td>
                          </tr>
                          <tr>
                            <td>Message Time</td>
                            <td>:</td>
                            <td>{{$data->created_at->format('d-m-Y | h:i:s A')}}</td>
                          </tr>
                      </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer card_footer d-print-none">
              <div class="btn-group mt-2" role="group">
                  <a href="#" class="btn btn-secondary" onclick="window.print()">Print</a>
                  <a href="#" class="btn btn-dark">PDF</a>
                  <a href="#" class="btn btn-secondary">Excel</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
