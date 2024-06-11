<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class PageController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Page::where('page_status',1)->orderBy('page_name','ASC')->get();
      return view('admin.page.all',compact('all'));
    }

    public function add(){
      return view('admin.page.add');
    }

    public function edit($slug){
      $data=Page::where('page_status',1)->where('page_slug',$slug)->firstOrFail();
      return view('admin.page.edit',compact('data'));
    }

    public function view($slug){
      $data=Page::where('page_status',1)->where('page_slug',$slug)->firstOrFail();
      return view('admin.page.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required|string|max:255|unique:pages,page_name',
        'url'=>'required',
      ],[
        'name.required'=>'Please enter page name.',
        'url.required'=>'Please enter page URL.',
      ]);

      $slug=Str::slug($request['name'],'-');
      $creator=Auth::user()->id;
      $insert=Page::insertGetId([
        'page_name'=>$request['name'],
        'page_url'=>$request['url'],
        'page_remarks'=>$request['remarks'],
        'page_creator'=>$creator,
        'page_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){
        Session::flash('success','successfully create page information.');
        return redirect('dashboard/page/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/page/add');
      }
    }

    public function update(Request $request){
      $id=$request['id'];
      $this->validate($request,[
        'name'=>'required|string|max:255|unique:pages,page_name,'.$id.',page_id',
        'url'=>'required',
      ],[
        'name.required'=>'Please enter page name.',
        'url.required'=>'Please enter page URL.',
      ]);

      $slug=Str::slug($request['name'],'-');
      $creator=Auth::user()->id;
      $insert=Page::where('page_id',$id)->update([
        'page_name'=>$request['name'],
        'page_url'=>$request['url'],
        'page_remarks'=>$request['remarks'],
        'page_creator'=>$creator,
        'page_slug'=>$slug,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($insert){
        Session::flash('success','successfully update page information.');
        return redirect('dashboard/page/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/page/edit/'.$slug);
      }
    }

    public function softdelete(){

    }

    public function restore(){

    }

    public function delete(){

    }
}
