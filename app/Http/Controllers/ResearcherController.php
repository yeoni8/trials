<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Researcher;
use App\Trial;
use App\Participant;
use App\Participation;

class ResearcherController extends Controller
{
    public function index(){

        $data['researcher'] = Researcher::find(2);
        $data['myTrials'] = Trial::where('researcher_id','=',$data['researcher']->id)->get();
        $data['pageTitle'] = 'Home';

        return view('adminlte\main',$data);
    }


    public function trialparticipants($trialid){

        $trial = Trial::find($trialid);
        $data['participants'] = $trial->participants()->get();


//        $data['participants'] = $trial->getParticipants();
//        $data['participants'] = $trial->participants();

//        dump($data['participants']);
        return view('adminlte\sections\trialparticipants',$data);
    }

    public function trial($trialid){

        $data['trial'] = Trial::find($trialid);
        $data['researcher'] = Researcher::find(2);
        $data['myTrials'] = Trial::where('researcher_id','=',$data['researcher']->id)->get();
        $data['pageTitle'] = 'Viewing a trial';
        $data['participants'] = $data['trial']->participants()->get();

        $male = $female = 0;

        foreach ($data['participants'] as $p)
            $p->sex=='m' ? $male++ : $female++;


        $chartData = ['labels'=>['Total', 'Male', 'Female'], 'datasets'=>[['data'=>[$male+$female,$male,$female]]]];


        $data['chartData'] = json_encode($chartData);

//        var data = {
//            labels: ["January", "February", "March", "April", "May", "June", "July"],
//    datasets: [
//        {
//            label: "My First dataset",
//            fillColor: "rgba(220,220,220,0.5)",
//            strokeColor: "rgba(220,220,220,0.8)",
//            highlightFill: "rgba(220,220,220,0.75)",
//            highlightStroke: "rgba(220,220,220,1)",
//            data: [65, 59, 80, 81, 56, 55, 40]
//        },
//        {
//            label: "My Second dataset",
//            fillColor: "rgba(151,187,205,0.5)",
//            strokeColor: "rgba(151,187,205,0.8)",
//            highlightFill: "rgba(151,187,205,0.75)",
//            highlightStroke: "rgba(151,187,205,1)",
//            data: [28, 48, 40, 19, 86, 27, 90]
//        }
//    ]
//};

        return view('adminlte\sections\trial', $data);
    }
    //
}
