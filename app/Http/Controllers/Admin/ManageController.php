<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Basic;
use App\Models\SocialMedia;
use App\Models\ContactInformation;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class ManageController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){

    }

    public function basic(){
      $basic=Basic::where('basic_status',1)->where('basic_id',1)->firstOrFail();
      return view('admin.manage.basic',compact('basic'));
    }

    public function update_basic(Request $request){
      $this->validate($request,[
        'name'=>'required',
      ],[
        'name.required'=>'Please enter company name!',
      ]);

      $slug='B'.uniqid();
      $editor=Auth::user()->id;
      $update=Basic::where('basic_status',1)->where('basic_id',1)->update([
        'basic_company'=>$request['name'],
        'basic_title'=>$request['title'],
        'basic_editor'=>$editor,
        'basic_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
        $image=$request->file('pic');
        $imageName='logo_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/uploads/basic/'.$imageName));

        Basic::where('basic_id',1)->update([
            'basic_logo'=>$imageName
        ]);
      }

      if($request->hasFile('favicon')){
        $image=$request->file('favicon');
        $imageName='favicon_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/uploads/basic/'.$imageName));

        Basic::where('basic_id',1)->update([
            'basic_favicon'=>$imageName
        ]);
      }

      if($request->hasFile('flogo')){
        $image=$request->file('flogo');
        $imageName='flogo_'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/uploads/basic/'.$imageName));

        Basic::where('basic_id',1)->update([
            'basic_flogo'=>$imageName
        ]);
      }

      if($update){
          Session::flash('success','successfully update basic information.');
          return redirect('dashboard/manage/basic');
      }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/manage/basic');
      }
    }

    public function social_media(){
      $social=SocialMedia::where('sm_status',1)->where('sm_id',1)->firstOrFail();
      return view('admin.manage.social',compact('social'));
    }

    public function update_social_media(Request $request){
      $slug='SM'.uniqid();
      $editor=Auth::user()->id;
      $update=SocialMedia::where('sm_status',1)->where('sm_id',1)->update([
        'sm_facebook'=>$request['facebook'],
        'sm_twitter'=>$request['twitter'],
        'sm_linkedin'=>$request['linkedin'],
        'sm_instagram'=>$request['instagram'],
        'sm_youtube'=>$request['youtube'],
        'sm_pinterest'=>$request['pinterest'],
        'sm_flickr'=>$request['flickr'],
        'sm_vimeo'=>$request['vimeo'],
        'sm_skype'=>$request['skype'],
        'sm_rss'=>$request['rss'],
        'sm_editor'=>$editor,
        'sm_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($update){
          Session::flash('success','successfully update social media information.');
          return redirect('dashboard/manage/social');
      }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/manage/social');
      }
    }

    public function contact(){
      $contact=ContactInformation::where('cont_status',1)->where('cont_id',1)->firstOrFail();
      return view('admin.manage.contact',compact('contact'));
    }

    public function update_contact(Request $request){
      $slug='CI'.uniqid();
      $editor=Auth::user()->id;
      $update=ContactInformation::where('cont_status',1)->where('cont_id',1)->update([
        'cont_phone1'=>$_POST['phone1'],
        'cont_phone2'=>$_POST['phone2'],
        'cont_phone3'=>$_POST['phone3'],
        'cont_phone4'=>$_POST['phone4'],
        'cont_email1'=>$_POST['email1'],
        'cont_email2'=>$_POST['email2'],
        'cont_email3'=>$_POST['email3'],
        'cont_email4'=>$_POST['email4'],
        'cont_add1'=>$_POST['add1'],
        'cont_add2'=>$_POST['add2'],
        'cont_add3'=>$_POST['add3'],
        'cont_add4'=>$_POST['add4'],
        'cont_editor'=>$editor,
        'cont_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($update){
          Session::flash('success','successfully update contact information.');
          return redirect('dashboard/manage/contact');
      }else{
          Session::flash('error','please try again.');
          return redirect('dashboard/manage/contact');
      }
    }
}
