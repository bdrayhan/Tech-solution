<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyServiceController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function it_certification_training(){
      return view('website.service.training');
    }

    public function it_audit(){
      return view('website.service.audit');
    }

    public function security_solutions(){
      return view('website.service.security-solutions');
    }

    public function iso_consultancy(){
      return view('website.service.iso-consultancy');
    }

    public function software_services(){
      return view('website.service.software-services');
    }

    public function mcms(){
      return view('website.service.software.mcms');
    }

    public function crm(){
      return view('website.service.software.crm');
    }

    public function hrm(){
      return view('website.service.software.hrm');
    }

    public function hms(){
      return view('website.service.software.hms');
    }

    public function pms(){
      return view('website.service.software.pms');
    }

    public function rms(){
      return view('website.service.software.rms');
    }

    public function sms(){
      return view('website.service.software.sms');
    }
}
