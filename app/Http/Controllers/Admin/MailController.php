<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller{
    public function __construct(){

    }

    public function index(){
      // $mailData=[
      //   'title'=>'Mail from Tech Solution',
      //   'body'=>'This is Testing email from using smtp.'
      // ];
      //
      // Mail::to('uzzalbd.creative@gmail.com')->send(new RegistrationMail($mailData));
      // dd('Email send Successfully');
    }
}
