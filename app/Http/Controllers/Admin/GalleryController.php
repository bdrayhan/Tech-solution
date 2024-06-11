<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use File;

class GalleryController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Gallery::where('gallery_status',1)->orderBy('gallery_id','DESC')->get();
      return view('admin.gallery.main.all',compact('all'));
    }

    public function add(){
      return view('admin.gallery.main.add');
    }

    public function edit($slug){
      $data=Gallery::where('gallery_status',1)->where('gallery_slug',$slug)->firstOrFail();
      return view('admin.gallery.main.edit',compact('data'));
    }

    public function view($slug){
      $data=Gallery::where('gallery_status',1)->where('gallery_slug',$slug)->firstOrFail();
      return view('admin.gallery.main.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:150',
        'category' => 'required',
        'pic' => 'required',
      ],[
        'title.required'=>'Please enter gallery title.',
        'category.required'=>'Please select gallery category.',
        'pic.required'=>'Please upload gallery image.',
      ]);

      $slug='G'.uniqid();
      $creator=Auth::user()->id;
      $insert=Gallery::insertGetId([
        'gallery_title'=>$request['title'],
        'galcate_id'=>$request['category'],
        'gallery_order'=>$request['order'],
        'gallery_remarks'=>$request['remarks'],
        'gallery_creator'=>$creator,
        'gallery_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/gallery/'.$imageName);

          Gallery::where('gallery_id',$insert)->update([
              'gallery_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','successfully upload gallery information.');
        return redirect('dashboard/gallery/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/gallery/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:150',
        'category' => 'required',
      ],[
        'title.required'=>'Please enter gallery title.',
        'category.required'=>'Please select gallery category.',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $editor=Auth::user()->id;
      $insert=Gallery::where('gallery_id',$id)->update([
        'gallery_title'=>$request['title'],
        'galcate_id'=>$request['category'],
        'gallery_order'=>$request['order'],
        'gallery_remarks'=>$request['remarks'],
        'gallery_creator'=>$editor,
        'gallery_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/gallery/'.$imageName);

          Gallery::where('gallery_id',$id)->update([
              'gallery_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','successfully update gallery information.');
        return redirect('dashboard/gallery/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/gallery/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Gallery::where('gallery_status',1)->where('gallery_id',$id)->update([
        'gallery_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete gallery information.');
        return redirect('dashboard/gallery');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/gallery');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $soft=Gallery::where('gallery_status',0)->where('gallery_id',$id)->update([
        'gallery_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully restore gallery information.');
        return redirect('dashboard/recycle/gallery');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/gallery');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $data=Gallery::where('gallery_id',$id)->firstOrFail();
      $del=Gallery::where('gallery_status',0)->where('gallery_id',$id)->delete([]);

      if($del){
        File::delete('uploads/gallery/'.$data->gallery_image);
        Session::flash('success','successfully delete gallery information permanently.');
        return redirect('dashboard/recycle/gallery');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/gallery');
      }
    }
}
