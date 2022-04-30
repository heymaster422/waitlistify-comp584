<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SurveyRequest;
use App\Models\surveyResults;
class SurveyController extends Controller
{
    public function store(SurveyRequest $request){
        $request->validate([
            'name' => 'required|max:255', 
            'fruits' => 'required'
        ]);
        $survey = $request->all();

        return view("/welcome/$survey->id");
    }
}
