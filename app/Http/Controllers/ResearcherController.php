<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Researcher;
use App\Trial;

class ResearcherController extends Controller
{
    public function index(){

        $data['researcher'] = Researcher::find(2);
        $data['myTrials'] = Trial::where('researcher_id','=',$data['researcher']->id)->get();
        $data['pageTitle'] = 'Home';

        return view('adminlte\main',$data);
    }


    public function trial($trialid){

        $data['trial'] = Trial::find($trialid);
        $data['researcher'] = Researcher::find(2);
        $data['myTrials'] = Trial::where('researcher_id','=',$data['researcher']->id)->get();
        $data['pageTitle'] = 'Viewing a trial';

        return view('adminlte\sections\trial', $data);
    }
    //
}
