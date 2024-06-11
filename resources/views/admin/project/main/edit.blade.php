@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/project/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Update Project Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/project')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Project</a>
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
                  <label class="col-sm-3 col-form-label col_form_label">Project Title<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{$data->project_id}}"/>
                    <input type="hidden" name="slug" value="{{$data->project_slug}}"/>
                    <input type="text" class="form-control form_control" name="title" value="{{$data->project_title}}">
                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('url') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Project URL<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="url" value="{{$data->project_url}}">
                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('category') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Project Category<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    @php
                      $allCate=App\Models\ProjectCategory::where('procate_status',1)->orderBy('procate_name','ASC')->get();
                    @endphp
                    <select class="form-control form_control" name="category">
                      <option value="">choose category</option>
                      @foreach($allCate as $cate)
                      <option value="{{$cate->procate_id}}" @if($data->procate_id==$cate->procate_id) selected @endif>{{$cate->procate_name}}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('order') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Order<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="order" value="{{$data->project_order}}">
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Remarks:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="remarks" value="{{$data->project_remarks}}">
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('pic') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Project Image<span class="req_star">*</span>:</label>
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
                    @if($data->project_image!='')
                      <img class="img-thumbnail img100" src="{{asset('uploads/project/'.$data->project_image)}}"/>
                    @else
                      <img class="img-thumbnail img100" src="{{asset('uploads/avatar/avatar-black.png')}}"/>
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