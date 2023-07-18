<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContentMail ;
use Mail ;

class HomeController extends Controller
{
    //
    public function contact_send_mail(Request $request){
        print_r($request->all());
        Mail::to('aishaseye074@gmail.com')->send(new ContentMail($request));
        return redirect('contact');
    }
}
