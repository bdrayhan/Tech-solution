<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\TeamMember;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class TeamMemberController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=TeamMember::where('member_status',1)->orderBy('member_id','ASC')->get();
      return view('admin.team.all',compact('all'));
    }

    public function add(){
      return view('admin.team.add');
    }

    public function edit($slug){
      $data=TeamMember::where('member_status',1)->where('member_slug',$slug)->firstOrFail();
      return view('admin.team.edit',compact('data'));
    }

    public function view($slug){
      $data=TeamMember::where('member_status',1)->where('member_slug',$slug)->firstOrFail();
      return view('admin.team.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'designation'=>'required',
        'order'=>'required',
        'pic'=>'required',
      ],[
        'name.required'=>'Please enter team member name.',
        'designation.required'=>'Please enter team member designation.',
        'order.required'=>'Please enter team member order number.',
        'pic.required'=>'Please upload team member photo.',
      ]);

      $slug='M'.uniqid();
      $creator=Auth::user()->id;

      $insert=TeamMember::insertGetId([
        'member_name'=>$request['name'],
        'member_designation'=>$request['designation'],
        'member_facebook'=>$request['facebook'],
        'member_twitter'=>$request['twitter'],
        'member_linkedin'=>$request['linkedin'],
        'member_instagram'=>$request['instagram'],
        'member_order'=>$request['order'],
        'member_creator'=>$creator,
        'member_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/team/'.$imageName);

          TeamMember::where('member_id',$insert)->update([
              'member_photo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload team member information.');
        return redirect('dashboard/team/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/team/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'designation'=>'required',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter team member name.',
        'designation.required'=>'Please enter team member designation.',
        'order.required'=>'Please enter team member order number.',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $editor=Auth::user()->id;

      $update=TeamMember::where('member_id',$id)->update([
        'member_name'=>$request['name'],
        'member_designation'=>$request['designation'],
        'member_facebook'=>$request['facebook'],
        'member_twitter'=>$request['twitter'],
        'member_linkedin'=>$request['linkedin'],
        'member_instagram'=>$request['instagram'],
        'member_order'=>$request['order'],
        'member_editor'=>$editor,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/team/'.$imageName);

          TeamMember::where('member_id',$id)->update([
              'member_photo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','Successfully update team member information.');
        return redirect('dashboard/team/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/team/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=TeamMember::where('member_status',1)->where('member_id',$id)->update([
        'member_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete team member information.');
        return redirect('dashboard/team');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/team');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restore=TeamMember::where('member_status',0)->where('member_id',$id)->update([
        'member_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restore){
        Session::flash('success','successfully restore team member information.');
        return redirect('dashboard/recycle/team');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/team');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=TeamMember::where('member_status',0)->where('member_id',$id)->delete();

      if($del){
        Session::flash('success','successfully delete team member information permanently.');
        return redirect('dashboard/recycle/team');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/team');
      }
    }
}
