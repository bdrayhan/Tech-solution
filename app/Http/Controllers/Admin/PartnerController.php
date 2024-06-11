<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Partner;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class PartnerController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Partner::where('partner_status',1)->orderBy('partner_id','DESC')->get();
      return view('admin.partner.all',compact('all'));
    }

    public function add(){
      return view('admin.partner.add');
    }

    public function edit($slug){
      $data=Partner::where('partner_status',1)->where('partner_slug',$slug)->firstOrFail();
      return view('admin.partner.edit',compact('data'));
    }

    public function view($slug){
      $data=Partner::where('partner_status',1)->where('partner_slug',$slug)->firstOrFail();
      return view('admin.partner.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'title'=>'required',
        'pic'=>'required',
      ],[
        'title.required'=>'Please enter partner title!',
        'pic.required'=>'Please upload partner logo!',
      ]);

      $slug='P'.uniqid();
      $creator=Auth::user()->id;
      $insert=Partner::insertGetId([
        'partner_title'=>$request['title'],
        'partner_url'=>$request['url'],
        'partner_creator'=>$creator,
        'partner_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/partners/'.$imageName));

          Partner::where('partner_id',$insert)->update([
              'partner_logo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload partner information.');
        return redirect('dashboard/partner/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/partner/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'title'=>'required',
      ],[
        'title.required'=>'Please enter partner title!',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $creator=Auth::user()->id;
      $update=Partner::where('partner_status',1)->where('partner_id',$id)->update([
        'partner_title'=>$request['title'],
        'partner_url'=>$request['url'],
        'partner_creator'=>$creator,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/partners/'.$imageName));

          Partner::where('partner_id',$id)->update([
              'partner_logo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','Successfully update partner information.');
        return redirect('dashboard/partner/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/partner/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Partner::where('partner_status',1)->where('partner_id',$id)->update([
        'partner_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete partner information.');
        return redirect('dashboard/partner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/partner');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restote=Partner::where('partner_status',0)->where('partner_id',$id)->update([
        'partner_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restote){
        Session::flash('success','successfully restore partner information.');
        return redirect('dashboard/recycle/partner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/partner');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=Partner::where('partner_status',0)->where('partner_id',$id)->delete([]);

      if($del){
        Session::flash('success','successfully delete partner information permanently.');
        return redirect('dashboard/recycle/partner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/partner');
      }
    }
}
