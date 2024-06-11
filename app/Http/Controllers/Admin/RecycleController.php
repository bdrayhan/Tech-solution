<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Session;

class RecycleController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      return view('admin.recycle.index');
    }

    public function user(){
      return view('admin.recycle.user');
    }

    public function gallery(){
      return view('admin.recycle.gallery');
    }
}
