<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Project;
use Carbon\Carbon;
use Session;
use Image;
use Auth;
use File;

class ProjectController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Project::where('project_status',1)->orderBy('project_id','DESC')->get();
      return view('admin.project.main.all',compact('all'));
    }

    public function add(){
      return view('admin.project.main.add');
    }

    public function edit($slug){
      $data=Project::where('project_status',1)->where('project_slug',$slug)->firstOrFail();
      return view('admin.project.main.edit',compact('data'));
    }

    public function view($slug){
      $data=Project::where('project_status',1)->where('project_slug',$slug)->firstOrFail();
      return view('admin.project.main.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:150',
        'url' => 'required',
        'category' => 'required',
        'order' => 'required',
        'pic' => 'required',
      ],[
        'title.required'=>'Please enter project title.',
        'url.required'=>'Please enter project url.',
        'category.required'=>'Please select project category.',
        'order.required'=>'Please enter project order number.',
        'pic.required'=>'Please upload project image.',
      ]);

      $slug='P'.uniqid();
      $creator=Auth::user()->id;
      $insert=Project::insertGetId([
        'procate_id'=>$request['category'],
        'project_title'=>$request['title'],
        'project_url'=>$request['url'],
        'project_order'=>$request['order'],
        'project_remarks'=>$request['remarks'],
        'project_creator'=>$creator,
        'project_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/project/'.$imageName);

          Project::where('project_id',$insert)->update([
              'project_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','successfully upload project information.');
        return redirect('dashboard/project/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/project/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'title' => 'required|string|max:150',
        'url' => 'required',
        'category' => 'required',
        'order' => 'required',
      ],[
        'title.required'=>'Please enter project title.',
        'url.required'=>'Please enter project url.',
        'category.required'=>'Please select project category.',
        'order.required'=>'Please enter project order number.',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $editor=Auth::user()->id;

      $update=Project::where('project_id',$id)->update([
        'procate_id'=>$request['category'],
        'project_title'=>$request['title'],
        'project_url'=>$request['url'],
        'project_order'=>$request['order'],
        'project_remarks'=>$request['remarks'],
        'project_editor'=>$editor,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/project/'.$imageName);

          Project::where('project_id',$id)->update([
              'project_image'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','successfully update project information.');
        return redirect('dashboard/project/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/project/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Project::where('project_status',1)->where('project_id',$id)->update([
        'project_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete project information.');
        return redirect('dashboard/project');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/project');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $soft=Project::where('project_status',0)->where('project_id',$id)->update([
        'project_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully restore project information.');
        return redirect('dashboard/recycle/project');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/project');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $data=Project::where('project_id',$id)->firstOrFail();
      $del=Project::where('project_status',0)->where('project_id',$id)->delete([]);

      if($del){
        File::delete('uploads/project/'.$data->project_image);
        Session::flash('success','successfully delete project information permanently.');
        return redirect('dashboard/recycle/project');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/project');
      }
    }
}
