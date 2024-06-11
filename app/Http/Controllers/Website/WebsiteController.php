<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller{
    public function __construct(){

    }

    public function index(){
      return view('website.main.index');
    }

    public function about(){
      return view('website.main.about');
    }

    public function online_registration(){
      return view('website.main.registration');
    }
}
