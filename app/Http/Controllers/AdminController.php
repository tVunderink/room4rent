<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function phpinfo(){
      return view('auth.phpinfo');
    }

    public function test(){
        
    }
}
