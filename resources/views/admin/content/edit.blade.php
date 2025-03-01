@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/content/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Update Content Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/content')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Content</a>
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
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Page:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="pagename" value="{{$data->pageInfo->page_name}}" disabled>
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('title') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Content Title<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{$data->content_id}}"/>
                    <input type="hidden" name="page" value="{{$data->page_id}}"/>
                    <input type="text" class="form-control form_control" name="title" value="{{$data->content_title}}">
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Content Subtitle:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="subtitle" value="{{$data->content_subtitle}}">
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Content Details:</label>
                  <div class="col-sm-7">
                    <textarea class="summernote" name="details">{{$data->content_details}}</textarea>
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('pic') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Content Image<span class="req_star">*</span>:</label>
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
                    @if($data->content_image!='')
                      <img class="img-thumbnail img100" src="{{asset('uploads/content/'.$data->content_image)}}"/>
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
