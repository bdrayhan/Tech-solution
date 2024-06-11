<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Auth;

class AccessController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      return view('admin.access.permission');
    }
}
