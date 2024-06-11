<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Registration;
use Carbon\Carbon;
use Session;
use Auth;

class RegistrationController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Registration::where('reg_status',1)->orderBy('reg_id','DESC')->get();
      return view('admin.registration.main.all',compact('all'));
    }
}
