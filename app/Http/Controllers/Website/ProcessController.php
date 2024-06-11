<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\RegistrationMail;
use App\Mail\RegistrationMailAdmin;
use App\Mail\GuidelineMail;
use App\Mail\GuidelineMailAdmin;
use App\Models\Registration;
use App\Models\Guideline;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use Mail;

class ProcessController extends Controller{
    public function __construct(){

    }

    public function index(){

    }

    public function online_registration(Request $request){
      $this->validate($request,[

      ],[

      ]);

      $name=$request['name'];
      $email=$request['email'];
      $training=$request['training'];
      $slug='R'.uniqid(20);


      $insert=Registration::insertGetId([
        'reg_reference'=>$request['reference'],
        'reg_name'=>$request['name'],
        'reg_dob'=>$request['dob'],
        'reg_email'=>$request['email'],
        'reg_office_email'=>$request['office_email'],
        'reg_phone'=>$request['phone'],
        'reg_designation'=>$request['designation'],
        'reg_department'=>$request['department'],
        'reg_organization'=>$request['organization'],
        'reg_nid_passport'=>$request['nid'],
        'reg_training'=>$request['training'],
        'reg_training_start'=>$request['training_date'],
        'reg_address'=>$request['address'],
        'reg_sponsorship'=>$request['sponsor'],
        'reg_method'=>$request['payment'],
        'reg_confirm'=>$request['confirm'],
        'reg_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){

         //  mail send to register user
         Mail::to($email)->send(new RegistrationMail($name,$email,$training));

         // mail send to info@techsolution-bd.com
         Mail::to("info@techsolution-bd.com")->send(new RegistrationMailAdmin($name,$email,$training));

        Session::flash('success','Successfully completed your registration.');
        return redirect('online-registration');
      }else{
        Session::flash('error','please try again.');
        return redirect('online-registration');
      }
    }

    public function guideline(Request $request){

      $guide_name=$request['name'];
      $guide_email=$request['email'];
      $guide_message=$request['message'];
      $slug='R'.uniqid(20);

      $this->validate($request,[

      ],[

      ]);

      $slug='G'.uniqid(20);

      $insert=Guideline::insertGetId([
        'guide_name'=>$request['name'],
        'guide_email'=>$request['email'],
        'guide_phone'=>$request['phone'],
        'guide_message'=>$request['message'],
        'guide_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){

         //  mail send to register user
         Mail::to($guide_email)->send(new GuidelineMail($guide_name,$guide_email,$guide_message));

         // mail send to info@techsolution-bd.com
         Mail::to("info@techsolution-bd.com")->send(new GuidelineMailAdmin($guide_name,$guide_email,$guide_message));

        Session::flash('success','Successfully send your message.');
        return redirect('/');
      }else{
        Session::flash('error','please try again.');
        return redirect('/');
      }
    }
}
