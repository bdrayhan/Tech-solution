@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/team/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Add Team Member Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/team')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Team Member</a>
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
              <div class="form-group row mb-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Member Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{$data->member_id}}"/>
                    <input type="hidden" name="slug" value="{{$data->member_slug}}"/>
                    <input type="text" class="form-control form_control" name="name" value="{{$data->member_name}}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('designation') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Designation<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="designation" value="{{$data->member_designation}}">
                    @if ($errors->has('designation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('designation') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Social Media:</label>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-md-6 mb-2">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-facebook fa-lg"></i></div>
                            <input type="text" class="form-control" id="" name="facebook" value="{{$data->member_facebook}}">
                        </div>
                      </div>
                      <div class="col-md-6 mb-2">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-twitter fa-lg"></i></div>
                            <input type="text" class="form-control" id="" name="twitter" value="{{$data->member_twitter}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-linkedin fa-lg"></i></div>
                            <input type="text" class="form-control" id="" name="linkedin" value="{{$data->member_linkedin}}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group">
                            <div class="input-group-text"><i class="fab fa-instagram fa-lg"></i></div>
                            <input type="text" class="form-control" id="" name="instagram" value="{{$data->member_instagram}}">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('order') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Order<span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control form_control" name="order" value="{{$data->member_order}}">
                    @if ($errors->has('order'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('order') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('pic') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Photo<span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file btnu_browse">
                                Browse… <input type="file" name="pic" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    @if ($errors->has('pic'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('pic') }}</strong>
                        </span>
                    @endif
                    <img id="img-upload"/>
                  </div>
                  <div class="col-md-2">
                    @if($data->member_photo!='')
                      <img class="img-thumbnail img100" src="{{asset('uploads/team/'.$data->member_photo)}}"/>
                    @else
                      <img class="img-thumbnail img100" src="{{asset('uploads/avatar/no-image-big.jpg')}}"/>
                    @endif
                  </div>
              </div>
            </div>
            <div class="card-footer card_footer text-center">
                <button type="submit" class="btn btn-md btn-dark">UPDATE</button>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
