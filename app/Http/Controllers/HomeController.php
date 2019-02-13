<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Agent;
use App\Subscribe;

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

        if(!$request->email) return "0";

        try {
            DB::beginTransaction();

            // 거래 내역 등록
            $subscribe = new Subscribe;
            $subscribe->email = $request->email;
            $subscribe->push();
         

        } catch (\Exception $e) {
            DB::rollback();

            return "0";

           
        } finally {
            DB::commit();
        }

        return "1";


    }

}
