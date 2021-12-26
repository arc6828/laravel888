<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    //
    public function create(Request $request)
    {
        $name = $request->get('name');
        $lastname = $request->get('lastname');
        // $name = request('name');
        // $lastname = request('lastname');

        $fullname = $name . " " . $lastname;
        $sensor_name = str_replace("a", "*", $fullname);
        echo $sensor_name;

        return view("myprofile/create");
    }

    public function edit($id)
    {
        //ตัวแปร $profile
        $profile = (object)[
            "id" => $id,
            "name" => "James",
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        //ตัวแปร $profile2
        $profile2 = [
            "id" => $id,
            "name" => "James",
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        //ตัวแปร $others
        $others = "hello world";
        return view("myprofile/edit", compact('profile', 'others', 'profile2'));
    }


    public function show($id)
    {
        $profile = (object)[
            "id" => $id,
            "name" => "James",
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show", compact('profile', 'others'));
    }

    public function gallery()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";
        $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
        $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
        $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

        return view("test/index", compact("ant", "bird", "cat", "god", "spider"));
    }

    public function ant()
    {
        $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
        return view("test/ant", compact("ant"));
    }
    public function bird()
    {
        $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";
        return view("test/bird", compact("bird"));
    }
}
