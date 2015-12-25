<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Participant;

class ParticipantController extends Controller
{
    public function index($participant_id){

        $participant = Participant::find($participant_id);

        $data['trials'] = $participant->trials()->get();

        return view('participant',$data);

    }
    //
}
