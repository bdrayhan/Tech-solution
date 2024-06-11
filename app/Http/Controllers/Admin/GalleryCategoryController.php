<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\GalleryCategory;
use Carbon\Carbon;
use Session;
use Auth;

class GalleryCategoryController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=GalleryCategory::where('galcate_status',1)->orderBy('galcate_id','ASC')->get();
      return view('admin.gallery.category.all',compact('all'));
    }

    public function add(){
      return view('admin.gallery.category.add');
    }

    public function edit($slug){
      $data=GalleryCategory::where('galcate_status',1)->where('galcate_slug',$slug)->firstOrFail();
      return view('admin.gallery.category.edit',compact('data'));
    }

    public function view($slug){
      $data=GalleryCategory::where('galcate_status',1)->where('galcate_slug',$slug)->firstOrFail();
      return view('admin.gallery.category.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required|string|max:255|unique:gallery_categories,galcate_name',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter gallery category name.',
        'order.required'=>'Please enter gallery category order.',
      ]);

      $slug='C'.uniqid('20');
      $creator=Auth::user()->id;
      $insert=GalleryCategory::insertGetId([
        'galcate_name'=>$request['name'],
        'galcate_order'=>$request['order'],
        'galcate_remarks'=>$request['remarks'],
        'galcate_creator'=>$creator,
        'galcate_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){
        Session::flash('success','successfully create gallery category information.');
        return redirect('dashboard/gallery/category/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/gallery/category/add');
      }
    }

    public function update(Request $request){
      $id=$request['id'];
      $this->validate($request,[
        'name'=>'required|string|max:255|unique:gallery_categories,galcate_name,'.$id.',galcate_id',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter gallery category name.',
        'order.required'=>'Please enter gallery category order.',
      ]);

      $slug=$request['slug'];
      $editor=Auth::user()->id;
      $update=GalleryCategory::where('galcate_id',$id)->update([
        'galcate_name'=>$request['name'],
        'galcate_order'=>$request['order'],
        'galcate_remarks'=>$request['remarks'],
        'galcate_editor'=>$editor,
        'galcate_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($update){
        Session::flash('success','successfully update gallery category information.');
        return redirect('dashboard/gallery/category/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/gallery/category/edit/'.$slug);
      }
    }
}
