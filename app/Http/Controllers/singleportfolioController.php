<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;


class singleportfolioController extends Controller
{
    public function index($id){
     
        $social_links_raw = DB::select('select * from social_links');
        //dd($users);
      
        $portfolio_page = DB::select("SELECT * FROM `portfolio` where `id`=$id ");
foreach  ($portfolio_page as $ppp){
   SEOMeta::setTitle(" $ppp->title");
}
         
        return view(
          'components.portfolio.singleitem',
          [
            'social_links_raw' => $social_links_raw,
            'portfolio_page'=>$portfolio_page
          ]
        );
        }


}
