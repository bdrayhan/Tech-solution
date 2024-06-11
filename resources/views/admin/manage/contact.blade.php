@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <form method="post" action="{{url('dashboard/manage/contact/update')}}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> Contact Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/manage/social')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-th label-icon"></i>Social Media</a>
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
              <div class="form-group row">
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-phone-square fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="phone1" value="{{ $contact->cont_phone1 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-phone-square fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="phone2" value="{{ $contact->cont_phone2 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-phone-square fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="phone3" value="{{ $contact->cont_phone3 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-phone-square fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="phone4" value="{{ $contact->cont_phone4 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-envelope fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="email1" value="{{ $contact->cont_email1 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-envelope fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="email2" value="{{ $contact->cont_email2 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-envelope fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="email3" value="{{ $contact->cont_email3 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-envelope fa-lg"></i></div>
                        <input type="text" class="form-control" id="" name="email4" value="{{ $contact->cont_email4 }}">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fas fa-map-marker-alt fa-lg"></i></div>
                        <textarea class="form-control" rows="2" id="" name="add1" placeholder="Address">{{ $contact->cont_add1 }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fa fa-map-marker-alt fa-lg"></i></div>
                        <textarea class="form-control" rows="2" id="" name="add2" placeholder="Address">{{ $contact->cont_add2 }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fa fa-map-marker-alt fa-lg"></i></div>
                        <textarea class="form-control" rows="2" id="" name="add3" placeholder="Address">{{ $contact->cont_add3 }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="input-group">
                        <div class="input-group-text"><i class="fa fa-map-marker-alt fa-lg"></i></div>
                        <textarea class="form-control" rows="2" id="" name="add4" placeholder="Address">{{ $contact->cont_add4 }}</textarea>
                    </div>
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
