<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{


    /**
     * Display all Survey Answers
     *
     * @return \Illuminate\Http\Response
     */
    public function show_info()
    {
        dd(Survey::all());
        return view('stats',[
            'survey' => Survey::all()
        ]);
    }

    /**
     * Show database information
     *
     * 
     */
    public function show_comp_584()
    {
        $count = Survey::where('comp_484', 1)->count();
        
        return view ('stats', compact('count'));
    }

    
}
