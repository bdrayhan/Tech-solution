<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Content;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class ContentController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Content::where('content_status',1)->orderBy('content_id','ASC')->get();
      return view('admin.content.all',compact('all'));
    }

    public function add(){

    }

    public function edit($slug){
      $data=Content::where('content_status',1)->where('content_slug',$slug)->firstOrFail();
      return view('admin.content.edit',compact('data'));
    }

    public function view(){

    }

    public function insert(Request $request){

    }

    public function update(Request $request){
      $this->validate($request,[
        'title' => 'required',
      ],[
        'name.required'=>'Please enter content_title.',
      ]);

      $id=$request['id'];
      $slug='C'.uniqid();
      $editor=Auth::user()->id;
      $insert=Content::where('content_id',$id)->update([
        'page_id'=>$request['page'],
        'content_title'=>$request['title'],
        'content_subtitle'=>$request['subtitle'],
        'content_details'=>$request['details'],
        'content_editor'=>$editor,
        'content_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.'_'.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/content/'.$imageName);

          Content::where('content_id',$insert)->update([
              'content_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','successfully update content information.');
        return redirect('dashboard/content/edit/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/content/edit/'.$slug);
      }
    }
}
