<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class BannerController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Banner::where('ban_status',1)->orderBy('ban_id','DESC')->get();
      return view('admin.banner.all',compact('all'));
    }

    public function add(){
      return view('admin.banner.add');
    }

    public function edit($slug){
      $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
      return view('admin.banner.edit',compact('data'));
    }

    public function view($slug){
      $data=Banner::where('ban_status',1)->where('ban_slug',$slug)->firstOrFail();
      return view('admin.banner.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'title'=>'required',
        'pic'=>'required',
      ],[
        'title.required'=>'Please enter banner title!',
        'pic.required'=>'Please upload banner image!',
      ]);

      $slug='B'.uniqid();
      $creator=Auth::user()->id;
      $insert=Banner::insertGetId([
        'ban_title'=>$request['title'],
        'ban_subtitle'=>$request['subtitle'],
        'ban_button'=>$request['button'],
        'ban_url'=>$request['url'],
        'ban_creator'=>$creator,
        'ban_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/banners/'.$imageName));

          Banner::where('ban_id',$insert)->update([
              'ban_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload banner information.');
        return redirect('dashboard/banner/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/banner/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'title'=>'required',
      ],[
        'title.required'=>'Please enter banner title!',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $creator=Auth::user()->id;
      $update=Banner::where('ban_status',1)->where('ban_id',$id)->update([
        'ban_title'=>$request['title'],
        'ban_subtitle'=>$request['subtitle'],
        'ban_button'=>$request['button'],
        'ban_url'=>$request['url'],
        'ban_creator'=>$creator,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save(base_path('public/uploads/banners/'.$imageName));

          Banner::where('ban_id',$id)->update([
              'ban_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','Successfully update banner information.');
        return redirect('dashboard/banner/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/banner/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Banner::where('ban_status',1)->where('ban_id',$id)->update([
        'ban_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete banner information.');
        return redirect('dashboard/banner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/banner');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restote=Banner::where('ban_status',0)->where('ban_id',$id)->update([
        'ban_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restote){
        Session::flash('success','successfully restore banner information.');
        return redirect('dashboard/recycle/banner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/banner');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=Banner::where('ban_status',0)->where('ban_id',$id)->delete([]);

      if($del){
        Session::flash('success','successfully delete banner information permanently.');
        return redirect('dashboard/recycle/banner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/banner');
      }
    }
}
