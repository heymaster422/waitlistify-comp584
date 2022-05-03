<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $survey = Survey::create ([
            'comp_584'=> $request->boolean('Comp_584'),
            'comp_333'=> $request->boolean('Comp_333'),
            'comp_484'=> $request->boolean('Comp_484'),
            'comp_424'=> $request->boolean('Comp_424'),
            'comp_583'=> $request->boolean('Comp_583'),
        ]);

        return redirect("/enrolled");
    }


    /**
     * Display all Survey Answers
     *
     * @return \Illuminate\Http\Response
     */
    public function show_info()
    {
        // dd(Survey::all());
        // return view('stats',[
        //     'survey' => Survey::all()
        // ]);
        return view('stats');
    }

    /**
     * Show database information
     *
     * 
     */
    public function show_count()
    {

        //$sorted_count = DB::table('survey_answers')->get();
        $count584 = Survey::where('comp_584', 1)->count();
        $count333 = Survey::where('comp_333', 1)->count();
        $count484 = Survey::where('comp_484', 1)->count();
        $count424 = Survey::where('comp_424', 1)->count();
        $count583 = Survey::where('comp_583', 1)->count();


        $totalcount = array(
            array('name'=> 'comp584' ,'count' => $count584),
            array('name'=> 'comp333' ,'count' => $count333),
            array('name'=> 'comp484' ,'count' => $count484),
            array('name'=> 'comp424' ,'count' => $count424),
            array('name'=> 'comp583' ,'count' => $count583),
        );
        
        $count = collect($totalcount)->sortBy('count')->reverse()->toArray();



        return view ('stats', compact('count'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function enrolled(){

        return view('enrolled');
    }



    
}
