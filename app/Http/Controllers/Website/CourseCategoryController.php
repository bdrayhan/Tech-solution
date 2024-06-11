<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function data_center(){
      return view('website.training.data-center');
    }

    public function industrial_automation(){
      return view('website.training.industrial-automation');
    }

    public function ms_office_application(){
      return view('website.training.ms-office-application');
    }

    public function it_security(){
      return view('website.training.it-security');
    }

    public function it_audit_standard_governance(){
      return view('website.training.it-audit-standard-governance');
    }

    public function server_networking_hardware(){
      return view('website.training.server-networking-hardware');
    }

    public function it_service_management(){
      return view('website.training.it-service-management');
    }

    public function project_management(){
      return view('website.training.project-management');
    }
}
