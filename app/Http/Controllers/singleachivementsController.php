<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class singleachivementsController extends Controller
{
    public function index($id)
    {
        $social_links_raw = DB::select('select * from social_links');
        $achivements_page = DB::select("SELECT * FROM `certifications` where `id`=$id ");
        foreach ($achivements_page as $ppp) {
            SEOMeta::setTitle(" $ppp->title");
        }
        return view(
            'components.achivements.singleitem',
            [
                'social_links_raw' => $social_links_raw,
                'achivements_page' => $achivements_page
            ]
        );
    }
}
