<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login()
    {
        return view('admin.login');
    }
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        // Optionally handle non-POST requests
        return redirect()->route('adminlogin');
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
