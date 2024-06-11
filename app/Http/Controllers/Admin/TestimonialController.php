<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Testimonial;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class TestimonialController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Testimonial::where('tm_status',1)->orderBy('tm_id','DESC')->get();
      return view('admin.testimonial.all',compact('all'));
    }

    public function add(){
      return view('admin.testimonial.add');
    }

    public function edit($slug){
      $data=Testimonial::where('tm_status',1)->where('tm_slug',$slug)->firstOrFail();
      return view('admin.testimonial.edit',compact('data'));
    }

    public function view($slug){
      $data=Testimonial::where('tm_status',1)->where('tm_slug',$slug)->firstOrFail();
      return view('admin.testimonial.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'designation'=>'required',
        'company'=>'required',
        'feedback'=>'required',
        'order'=>'required',
        'pic'=>'required',
      ],[
        'name.required'=>'Please enter client name.',
        'designation.required'=>'Please enter client designation.',
        'company.required'=>'Please enter client company information.',
        'feedback.required'=>'Please enter client feedback.',
        'order.required'=>'Please enter client order number.',
        'pic.required'=>'Please upload team member photo.',
      ]);

      $slug='TM'.uniqid();
      $creator=Auth::user()->id;

      $insert=Testimonial::insertGetId([
        'tm_name'=>$request['name'],
        'tm_designation'=>$request['designation'],
        'tm_company'=>$request['company'],
        'tm_feedback'=>$request['feedback'],
        'tm_order'=>$request['order'],
        'tm_creator'=>$creator,
        'tm_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(100,100)->save('uploads/testimonial/'.$imageName);

          Testimonial::where('tm_id',$insert)->update([
              'tm_photo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload client testimonial information.');
        return redirect('dashboard/testimonial/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/testimonial/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'designation'=>'required',
        'company'=>'required',
        'feedback'=>'required',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter client name.',
        'designation.required'=>'Please enter client designation.',
        'company.required'=>'Please enter client company information.',
        'feedback.required'=>'Please enter client feedback.',
        'order.required'=>'Please enter client order number.',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $editor=Auth::user()->id;

      $insert=Testimonial::where('tm_status',1)->where('tm_id',$id)->update([
        'tm_name'=>$request['name'],
        'tm_designation'=>$request['designation'],
        'tm_company'=>$request['company'],
        'tm_feedback'=>$request['feedback'],
        'tm_order'=>$request['order'],
        'tm_editor'=>$editor,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(100,100)->save('uploads/testimonial/'.$imageName);

          Testimonial::where('tm_id',$id)->update([
              'tm_photo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully update client testimonial information.');
        return redirect('dashboard/testimonial/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/testimonial/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Testimonial::where('tm_status',1)->where('tm_id',$id)->update([
        'tm_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete client testimonial information.');
        return redirect('dashboard/testimonial');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/testimonial');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restore=Testimonial::where('tm_status',0)->where('tm_id',$id)->update([
        'tm_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restore){
        Session::flash('success','successfully restore client testimonial information.');
        return redirect('dashboard/recycle/testimonial');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/testimonial');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=Testimonial::where('tm_status',0)->where('tm_id',$id)->delete();

      if($del){
        Session::flash('success','successfully delete service information permanently.');
        return redirect('dashboard/recycle/testimonial');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/testimonial');
      }
    }
}
