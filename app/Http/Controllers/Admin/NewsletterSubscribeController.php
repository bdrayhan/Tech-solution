<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\NewsletterSubscribe;
use Carbon\Carbon;
use Session;
use Auth;
use PDF;
use Excel;

class NewsletterSubscribeController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=NewsletterSubscribe::where('ns_status',1)->orderBy('ns_id','DESC')->get();
      return view('admin.registration.newsletter.all',compact('all'));
    }

    public function view($slug){
      $data=NewsletterSubscribe::where('ns_status',1)->where('ns_slug',$slug)->firstOrFail();
      return view('admin.registration.newsletter.view',compact('data'));
    }
}
