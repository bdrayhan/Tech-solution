<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Client;
use Carbon\Carbon;
use Session;
use Image;
use Auth;

class ClientController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=Client::where('client_status',1)->orderBy('client_id','DESC')->get();
      return view('admin.client.all',compact('all'));
    }

    public function add(){
      return view('admin.client.add');
    }

    public function edit($slug){
      $data=Client::where('client_status',1)->where('client_slug',$slug)->firstOrFail();
      return view('admin.client.edit',compact('data'));
    }

    public function view($slug){
      $data=Client::where('client_status',1)->where('client_slug',$slug)->firstOrFail();
      return view('admin.client.view',compact('data'));
    }

    public function insert(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'order'=>'required',
        'pic'=>'required',
      ],[
        'name.required'=>'Please enter client name.',
        'order.required'=>'Please enter client order.',
        'pic.required'=>'Please upload client logo.',
      ]);

      $slug='C'.uniqid();
      $creator=Auth::user()->id;

      $insert=Client::insertGetId([
        'client_name'=>$request['name'],
        'client_url'=>$request['url'],
        'client_order'=>$request['order'],
        'client_creator'=>$creator,
        'client_slug'=>$slug,
        'created_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$insert.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/client/'.$imageName);

          Client::where('client_id',$insert)->update([
              'client_logo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($insert){
        Session::flash('success','Successfully upload client information.');
        return redirect('dashboard/client/add');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/client/add');
      }
    }

    public function update(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'order'=>'required',
      ],[
        'name.required'=>'Please enter client name.',
        'order.required'=>'Please enter client order.',
      ]);

      $id=$request['id'];
      $slug=$request['slug'];
      $editor=Auth::user()->id;

      $update=Client::where('client_id',$id)->update([
        'client_name'=>$request['name'],
        'client_url'=>$request['url'],
        'client_order'=>$request['order'],
        'client_editor'=>$editor,
        'updated_at'=>Carbon::now()->toDateTimeString()
      ]);

      if($request->hasFile('pic')){
          $image=$request->file('pic');
          $imageName=$id.time().'.'.$image->getClientOriginalExtension();
          Image::make($image)->save('uploads/client/'.$imageName);

          Client::where('client_id',$id)->update([
              'client_logo'=>$imageName,
              'updated_at'=>Carbon::now()->toDateTimeString(),
          ]);
      }

      if($update){
        Session::flash('success','Successfully update client information.');
        return redirect('dashboard/client/view/'.$slug);
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/client/edit/'.$slug);
      }
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=Client::where('client_status',1)->where('client_id',$id)->update([
        'client_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete client information.');
        return redirect('dashboard/client');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/client');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restore=Client::where('client_status',0)->where('client_id',$id)->update([
        'client_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restore){
        Session::flash('success','successfully restore client information.');
        return redirect('dashboard/recycle/client');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/client');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=Client::where('client_status',0)->where('client_id',$id)->delete();

      if($del){
        Session::flash('success','successfully delete client information permanently.');
        return redirect('dashboard/recycle/client');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/client');
      }
    }
}
