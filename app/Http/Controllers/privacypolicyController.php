<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class privacypolicyController extends Controller
{
    public function index()
    {
      SEOMeta::setTitle('Privacy policy');
        $social_links_raw = DB::select('select * from social_links');
         
        return view(
          'privacyPolicy',
          [
            'social_links_raw' => $social_links_raw
          
          ]
        );
    }
}