@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/permission/submit')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Add Permission Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/permission')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>All Permission</a>
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
                  <label class="col-sm-3 col-form-label col_form_label">Permission Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('guard') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Permission Guard<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="guard" value="{{old('guard')}}">
                    @if ($errors->has('guard'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('guard') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3 {{ $errors->has('module') ? ' has-error' : '' }}">
                  <label class="col-sm-3 col-form-label col_form_label">Module<span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    @php
                      $allModule=App\Models\Module::where('module_status',1)->orderBy('module_name','ASC')->get();
                    @endphp
                    <select class="form-control form_control" name="module">
                      <option value="">Choose Module</option>
                      @foreach($allModule as $mod)
                      <option value="{{$mod->module_id}}">{{$mod->module_name}}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('module'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('module') }}</strong>
                        </span>
                    @endif
                  </div>
              </div>
              <div class="form-group row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Remarks:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="remarks" value="{{old('remarks')}}">
                  </div>
              </div>
            </div>
            <div class="card-footer card_footer text-center">
                <button type="submit" class="btn btn-md btn-dark">SUBMIT</button>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
