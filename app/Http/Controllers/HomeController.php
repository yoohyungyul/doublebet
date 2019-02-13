<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Agent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 모바일 접속
        // if(Agent::isMobile()) {

        //     // return view('welcome_mobile');
        //     return view('welcome');
        // } else {
        //     return view('welcome');
        // }

        
        return view('welcome');


       

    }

    public function test() {
        return view('test');

    }

    public function postSubscribe(Request $request) {

        return $request->email;
    }

}
