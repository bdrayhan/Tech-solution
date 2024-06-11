@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-xl-3">
     <div class="card overflow-hidden">
         <div class="bg-primary bg-soft">
             <div class="row">
                 <div class="col-7">
                     <div class="text-primary p-3">
                     </div>
                 </div>
                 <div class="col-5 align-self-end">
                     <img src="{{asset('contents/admin')}}/assets/images/profile-img.png" alt="" class="img-fluid">
                 </div>
             </div>
         </div>
         <div class="card-body pt-0 card_bot_none"> 
             <div class="row">
                 <div class="col-sm-12">
                     <div class="avatar-md profile-user-wid mb-4 float-left mar_right_10">
                       @if(Auth::user()->photo!='')
                          <img src="{{asset('uploads/users/'.Auth::user()->photo)}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                      @else
                        <img src="{{asset('uploads/avatar/avatar-black.png')}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                      @endif
                     </div>
                     <div class="pt-2 float-left user_profile_text">
                       <h5 class="font-size-15 text-truncate">Cynthia Price</h5>
                       <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                     </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
             <div class="card-body card_body_menu card_bot_none">
               <div class="row">
                <div class="col-sm-12">
                  <div class="profile_menu">
                    <div class="profile_heading">
                      Account Information
                    </div>
                    <ul>
                      <li><a href="{{url('dashboard/client/')}}"><i class="fas fa-address-card"></i>Overview</a></li>
                      <li><a href="{{url('dashboard/client/')}}"><i class="fas fa-life-ring"></i>Project Information</a></li>
                      <li><a href="{{url('dashboard/client/')}}"><i class="fas fa-money-check"></i>Payment History</a></li>
                      <li><a href="{{url('dashboard/client/')}}"><i class="fas fa-cube"></i>Service Information</a></li>
                      <li><a href="#"><i class="fas fa-receipt"></i>Reports</a></li>
                      <li><a href="#"><i class="fas fa-box"></i>Others Information</a></li>
                      <li><a href="#"><i class="fas fa-inbox"></i>Communication</a></li>
                      <li><a href="{{url('dashboard/client/')}}"><i class="fas fa-pen-square"></i>Update Information</a></li>
                    </ul>
                  </div>
                </div>
                <a href="{{url('dashboard/recycle/user')}}" class="btn btn-md btn-dark btn-block profile_btn">Dashboard</a>
              </div>
            </div>
         </div>
     </div>
  </div>
  <div class="col-xl-9">
     <div class="row">
         <div class="col-md-4">
             <div class="card mini-stats-wid">
                 <div class="card-body">
                     <div class="d-flex">
                         <div class="flex-shrink-0 align-self-center me-2">
                             <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                 <span class="avatar-title">
                                     <i class="bx bx-check-circle font-size-24"></i>
                                 </span>
                             </div>
                         </div>

                         <div class="flex-grow-1">
                             <p class="text-muted fw-medium mb-2">Completed Projects</p>
                             <h4 class="mb-0">125</h4>
                         </div>


                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <div class="card mini-stats-wid">
                 <div class="card-body">
                     <div class="d-flex">
                         <div class="flex-grow-1">
                             <p class="text-muted fw-medium mb-2">Pending Projects</p>
                             <h4 class="mb-0">12</h4>
                         </div>

                         <div class="flex-shrink-0 align-self-center">
                             <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                 <span class="avatar-title">
                                     <i class="bx bx-hourglass font-size-24"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-4">
             <div class="card mini-stats-wid">
                 <div class="card-body">
                     <div class="d-flex">
                         <div class="flex-grow-1">
                             <p class="text-muted fw-medium mb-2">Total Revenue</p>
                             <h4 class="mb-0">$36,524</h4>
                         </div>

                         <div class="flex-shrink-0 align-self-center">
                             <div class="avatar-sm mini-stat-icon rounded-circle bg-primary">
                                 <span class="avatar-title">
                                     <i class="bx bx-package font-size-24"></i>
                                 </span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="card">
         <div class="card-body">
             <h4 class="card-title mb-4">My Projects</h4>
             <div class="table-responsive">
                 <table class="table table-nowrap table-hover mb-0">
                     <thead>
                         <tr>
                             <th scope="col">#</th>
                             <th scope="col">Projects</th>
                             <th scope="col">Start Date</th>
                             <th scope="col">Deadline</th>
                             <th scope="col">Budget</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <th scope="row">1</th>
                             <td>Skote admin UI</td>
                             <td>2 Sep, 2019</td>
                             <td>20 Oct, 2019</td>
                             <td>$506</td>
                         </tr>

                         <tr>
                             <th scope="row">2</th>
                             <td>Skote admin Logo</td>
                             <td>1 Sep, 2019</td>
                             <td>2 Sep, 2019</td>
                             <td>$94</td>
                         </tr>
                         <tr>
                             <th scope="row">3</th>
                             <td>Redesign - Landing page</td>
                             <td>21 Sep, 2019</td>
                             <td>29 Sep, 2019</td>
                             <td>$156</td>
                         </tr>
                         <tr>
                             <th scope="row">4</th>
                             <td>App Landing UI</td>
                             <td>29 Sep, 2019</td>
                             <td>04 Oct, 2019</td>
                             <td>$122</td>
                         </tr>
                         <tr>
                             <th scope="row">5</th>
                             <td>Blog Template</td>
                             <td>05 Oct, 2019</td>
                             <td>16 Oct, 2019</td>
                             <td>$164</td>
                         </tr>
                         <tr>
                             <th scope="row">6</th>
                             <td>Redesign - Multipurpose Landing</td>
                             <td>17 Oct, 2019</td>
                             <td>05 Nov, 2019</td>
                             <td>$192</td>
                         </tr>
                         <tr>
                             <th scope="row">7</th>
                             <td>Logo Branding</td>
                             <td>04 Nov, 2019</td>
                             <td>05 Nov, 2019</td>
                             <td>$94</td>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
  </div>
</div>
@endsection
