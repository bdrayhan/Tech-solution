@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card_header">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="card-title card_title"><i class="fab fa-gg-circle"></i> All Gallery Information</h4>
                    </div>
                    <div class="col-md-4 text-right">
                        <a href="{{url('dashboard/gallery/add')}}" class="btn btn-dark btn-md waves-effect btn-label waves-light card_btn"><i class="fas fa-plus-circle label-icon"></i>Add Gallery</a>
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
                <table id="alltableinfo" class="table table-bordered table-striped table-hover dt-responsive nowrap custom_table">
                    <thead class="table-dark">
                      <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Order</th>
                          <th>Image</th>
                          <th>Manage</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($all as $data)
                      <tr>
                          <td>{{$data->gallery_title}}</td>
                          <td>{{$data->category->galcate_name}}</td>
                          <td>{{$data->gallery_order}}</td>
                          <td>
                            @if($data->gallery_image!='')
                              <img class="img-thumbnail img50" src="{{asset('uploads/gallery/'.$data->gallery_image)}}"/>
                            @else
                              <img class="img-thumbnail img50" src="{{asset('uploads/avatar/avatar-black.png')}}"/>
                            @endif
                          </td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-dark btn-sm" type="button">Manage</button>
                              <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split waves-effect btn-label waves-light card_btn" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="mdi mdi-chevron-down"></i>
                              </button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="">Publish</a>
                                  <a class="dropdown-item" href="{{url('dashboard/gallery/view/'.$data->gallery_slug)}}">View</a>
                                  <a class="dropdown-item" href="{{url('dashboard/gallery/edit/'.$data->gallery_slug)}}">Edit</a>
                                  <a class="dropdown-item" href="#" id="softDelete" title="delete" data-toggle="modal" data-target="#softDelModal" data-id="{{$data->gallery_id}}">Delete</a>
                              </div>
                            </div>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
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
<!--softdelete modal start-->
<div id="softDelModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="{{url('dashboard/gallery/softdelete')}}">
      @csrf
      <div class="modal-content">
        <div class="modal-header modal_header">
            <h5 class="modal-title mt-0" id="myModalLabel"><i class="fab fa-gg-circle"></i> Confirm Message</h5>
        </div>
        <div class="modal-body modal_card">
          Are you sure you want to delete?
          <input type="hidden" id="modal_id" name="modal_id">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-md btn-dark waves-effect waves-light">Confirm</button>
            <button type="button" class="btn btn-md btn-danger waves-effect" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
