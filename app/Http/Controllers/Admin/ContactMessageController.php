<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exports\Contact;
use App\Models\ContactMessage;
use Carbon\Carbon;
use Session;
use Auth;
use PDF;
use Excel;

class ContactMessageController extends Controller{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $all=ContactMessage::where('cm_status',1)->orderBy('cm_id','DESC')->get();
      return view('admin.contact.all',compact('all'));
    }

    public function view($slug){
      $data=ContactMessage::where('cm_status',1)->where('cm_slug',$slug)->firstOrFail();
      return view('admin.contact.view',compact('data'));
    }

    public function softdelete(){
      $id=$_POST['modal_id'];
      $soft=ContactMessage::where('cm_status',1)->where('cm_id',$id)->update([
        'cm_status'=>0,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($soft){
        Session::flash('success','successfully delete contact message.');
        return redirect('dashboard/contact/message');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/contact/message');
      }
    }

    public function restore(){
      $id=$_POST['modal_id'];
      $restote=ContactMessage::where('cm_status',0)->where('cm_id',$id)->update([
        'cm_status'=>1,
        'updated_at'=>Carbon::now()->toDateTimeString(),
      ]);

      if($restote){
        Session::flash('success','successfully restore contact message.');
        return redirect('dashboard/recycle/contact/message');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/contact/message');
      }
    }

    public function delete(){
      $id=$_POST['modal_id'];
      $del=ContactMessage::where('cm_status',0)->where('cm_id',$id)->delete([]);

      if($del){
        Session::flash('success','successfully delete contact message permanently.');
        return redirect('dashboard/recycle/partner');
      }else{
        Session::flash('error','please try again.');
        return redirect('dashboard/recycle/contact/message');
      }
    }

    public function excel(){
      return Excel::download(new Contact, 'contact.xlsx');
    }

    public function pdf(){
      $all=ContactMessage::where('cm_status',1)->orderBy('cm_id','DESC')->get();
      $pdf=PDF::loadview('admin.contact.pdf',compact('all'));
      return $pdf->download('contact.pdf');
    }
}
