@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/service/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Update Service Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/service')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Service</a>
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
              <div class="form-group row mb-3 {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Service Title<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{$data->service_id}}"/>
                    <input type="hidden" name="slug" value="{{$data->service_slug}}"/>
                    <input type="text" class="form-control form_control" name="title" value="{{$data->service_title}}">
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('subtitle') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Service Subtitle<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="subtitle" value="{{$data->service_subtitle}}">
                    @if ($errors->has('subtitle'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('subtitle') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('order') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Service Order<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control form_control" name="order" value="{{$data->service_order}}">
                    @if ($errors->has('order'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('order') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Service Details:</label>
                  <div class="col-sm-7">
                    <textarea class="summernote" name="details">{{$data->service_details}}</textarea>
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('icon') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Service Icon<span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file btnu_browse">
                                Browse… <input type="file" name="icon" id="imgInpFavicon">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    @if ($errors->has('icon'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('icon') }}</strong>
                        </span>
                    @endif
                    <img id="img-upload-favicon"/>
                  </div>
                  <div class="col-md-2">
                    @if($data->service_icon!='')
                      <img class="img-thumbnail img50" src="{{asset('uploads/service/'.$data->service_icon)}}"/>
                    @else
                      <img class="img-thumbnail img50" src="{{asset('uploads/avatar/no-image-big.jpg')}}"/>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Service Image:</label>
                  <div class="col-sm-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file btnu_browse">
                                Browse… <input type="file" name="pic" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id="img-upload"/>
                  </div>
                  <div class="col-md-2">
                    @if($data->service_image!='')
                      <img class="img-thumbnail img100" src="{{asset('uploads/service/'.$data->service_image)}}"/>
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
