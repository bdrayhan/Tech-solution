@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> View Client Testimonial Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/testimonial')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Testimonial</a>
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
                            <td>Client Name</td>
                            <td>:</td>
                            <td>{{$data->tm_name}}</td>
                          </tr>
                          <tr>
                            <td>Identity</td>
                            <td>:</td>
                            <td>{{$data->tm_designation}}-{{$data->tm_company}}</td>
                          </tr>
                          <tr>
                            <td>Feedback</td>
                            <td>:</td>
                            <td>{{$data->tm_feedback}}</td>
                          </tr>
                          <tr>
                            <td>Order</td>
                            <td>:</td>
                            <td>{{$data->tm_order}}</td>
                          </tr>
                          <tr>
                            <td>Photo</td>
                            <td>:</td>
                            <td>
                              @if($data->tm_photo!='')
                                <img class="img-thumbnail img100" src="{{asset('uploads/testimonial/'.$data->tm_photo)}}"/>
                              @else
                                <img class="img-thumbnail img100" src="{{asset('uploads/avatar/no-image-big.jpg')}}"/>
                              @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Create Time</td>
                            <td>:</td>
                            <td>{{$data->created_at->format('d-m-Y | h:i:s A')}}</td>
                          </tr>
                      </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="card-footer card_footer">
              <div class="btn-group mt-2" role="group">
                  <a href="#" class="btn btn-secondary">Print</a>
                  <a href="#" class="btn btn-dark">PDF</a>
                  <a href="#" class="btn btn-secondary">Excel</a>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
