<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wordpressController extends Controller
{
    public function index()
    {
    
    //   $wordpress_raw = DB::select("SELECT * FROM `certifications`");
      return view(
        'wordpress',
        [
          
        //   'wordpress_raw' => $wordpress_raw
        ]
      );
    }
}
