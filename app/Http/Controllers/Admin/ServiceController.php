<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class ServiceController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Service::where('service_status',1)->orderBy('service_id','DESC')->get();
      return view('admin.service.all',compact('all'));
    }

    public function add(){
      return view('admin.service.add');
    }

    public function edit($slug){
      $data=Service::where('service_status',1)->where('service_slug',$slug)->firstOrFail();
      return view('admin.service.edit',compact('data'));
    }

    public function view($slug){
      $data=Service::where('service_status',1)->where('service_slug',$slug)->firstOrFail();
      return view('admin.service.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'title'=>'required|max:100|unique:services,service_title',
        'subtitle'=>'required',
        'order'=>'required',
        'icon'=>'required',
      ],[
        'name.required'=>'Please enter service title.',
        'subtitle.required'=>'Please enter service subtitle.',
        'order.required'=>'Please enter service order number.',
        'icon.required'=>'Please upload service icon.',
      ]);

      $slug='S'.uniqid();
      $url=Str::slug($request['title'],'-');
      $creator=Auth::user()->id;

      $insert=Service::insertGetId([
        'service_title'=>$request['title'],
        'service_subtitle'=>$request['subtitle'],
        'service_order'=>$request['order'],
        'service_details'=>$request['details'],
        'service_creator'=>$creator,
        'service_url'=>$url,
        'service_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('icon')){
          $icon=$request->file('icon');
          $iconName='icon-'.$insert.time().'.'.$icon->getClientOriginalExtension();
          Image::make($icon)->save('uploads/service/'.$iconName);

          Service::where('service_id',$insert)->update([
              'service_icon'=>$iconName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/service/'.$imageName);

          Service::where('service_id',$insert)->update([
              'service_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload service information.');
        return redirect('dashboard/service/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/service/add');
      }
    }

    public function update(Request $request){
      $id=$request['id'];
      $this->validate($request,[
        'title'=>'required|max:100|unique:services,service_title,'.$id.',service_id',
        'subtitle'=>'required',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter service title.',
        'subtitle.required'=>'Please enter service subtitle.',
        'order.required'=>'Please enter service order number.',
      ]);

      $slug=$request['slug'];
      $url=Str::slug($request['title'],'-');
      $editor=Auth::user()->id;

      $update=Service::where('service_status',1)->where('service_id',$id)->update([
        'service_title'=>$request['title'],
        'service_subtitle'=>$request['subtitle'],
        'service_order'=>$request['order'],
        'service_details'=>$request['details'],
        'service_editor'=>$editor,
        'service_url'=>$url,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('icon')){
          $icon=$request->file('icon');
          $iconName='icon-'.$id.time().'.'.$icon->getClientOriginalExtension();
          Image::make($icon)->save('uploads/service/'.$iconName);

          Service::where('service_id',$id)->update([
              'service_icon'=>$iconName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/service/'.$imageName);

          Service::where('service_id',$id)->update([
              'service_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','Successfully update service information.');
        return redirect('dashboard/service/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/service/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Service::where('service_status',1)->where('service_id',$id)->update([
        'service_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete service information.');
        return redirect('dashboard/service');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/service');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restore=Service::where('service_status',0)->where('service_id',$id)->update([
        'service_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restore){
        Session::flash('success','successfully restore service information.');
        return redirect('dashboard/recycle/service');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/service');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=Service::where('service_status',0)->where('service_id',$id)->delete();

      if($del){
        Session::flash('success','successfully delete service information permanently.');
        return redirect('dashboard/recycle/service');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/service');
      }
    }
}
