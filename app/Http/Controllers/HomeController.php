<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }
    public function aboutus()
    {
        return view('home.about');
    }

    public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;
        return view('home.test',$data);
        /*echo "id number:", $id;
        echo "<br>Ad:", $name;
        for($i=1;$i<=10;$i++)
        {
            echo "<br> $i- $name";
        }*/
    }
 }
