<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class portfolioController extends Controller
{
    public function index( ){

      SEOMeta::setTitle('Portfolio page');


    $social_links_raw = DB::select('select * from social_links');
    //dd($users);
  
    $portfolio_raw = DB::select("SELECT * FROM `portfolio` order by `date` DESC");
    $pg_portfolio_items=DB::table('portfolio')->paginate(10);
      abort_if($pg_portfolio_items->isEmpty(),204);
    return view(
      'portfoliopage',
      [
        'social_links_raw' => $social_links_raw,
    
        'portfolio_raw' => $portfolio_raw,
        'pg_portfolio_items'=>$pg_portfolio_items
      ]
    );
    }

}
