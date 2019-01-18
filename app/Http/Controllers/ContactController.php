<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contact(request $request)
    {
        return view('/contact');
    }
}
