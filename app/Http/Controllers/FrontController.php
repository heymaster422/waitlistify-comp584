<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;
use App\Models\User;
  

class FrontController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        return view('home');
    }

  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function enrollment(){
        return view('enrollment');
    }
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stats(){

        return view('stats');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(){

        return view('profile');

    }



}