<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;



class insertportfolioController extends Controller
{

    public function index()
    {
        return view('insertportfolio');
    }


    public function insertEntry(Request $request)
    {
        if (!empty($request->id)) {
            $id = $request->id;
        } else {
            $id = ' ';
        }


        $title = $request->title;

        $description = $request->description;

        // image 1
        $imageFileName =  $request->image_name->getClientOriginalname();
        $request->image_name->storeAs('images/portfolio', $imageFileName, 'publicfolder');
        $imageFileType = $request->image_name->getClientOriginalExtension();

        // //webconvert
        // $src1=asset("assets/images/portfolio/$imageFileName");
        // if ($imageFileType == 'jpeg' || $imageFileType  == 'jpg') {
        //     $image1 = imagecreatefromjpeg($src1);
        // } elseif ($imageFileType  == 'gif') {
        //     $image1 = imagecreatefromgif($src1);
        // } elseif ($imageFileType  == 'png') {
        //     $image1 = imagecreatefrompng($src1);
        // }
        // imagewebp($image1, asset("assets/images/portfolio/"), 80);



        // 2 image
        if (!empty($request->img2)) {
            // image 2
            $image2FileName =  $request->img2->getClientOriginalname();
            $request->img2->storeAs('images/portfolio', $image2FileName, 'publicfolder');
            $img2FileName =  pathinfo($image2FileName, PATHINFO_FILENAME);
        } else {
            $img2FileName = '';
        }
        //3image
        if (!empty($request->img3)) {
            // image 2
            $image3FileName =  $request->img3->getClientOriginalname();
            $request->img3->storeAs('images/portfolio', $image3FileName, 'publicfolder');
            $img3FileName =  pathinfo($image3FileName, PATHINFO_FILENAME);
        } else {
            $img3FileName = '';
        }

        $category = $request->category;
        $isfeatured = $request->isfeatured;
        $style = $request->style;
        $excerpt = $request->excerpt;
        date_default_timezone_set('Asia/Kolkata');
        $datetime = date('Y-m-d H:i:s');
        DB::insert(
            'insert into portfolio (title,description,image_name,img2,img3,category,isfeatured,style,excerpt,image_type,date) values (?,?,?,?,?,?,?,?,?,?,?)',
            [$title, $description, $imageFileName, $img2FileName, $img3FileName, $category, $isfeatured, $style, $excerpt, $imageFileType, $datetime]
        );
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insertportfolio">Click Here</a> to go back.';
    }
}
