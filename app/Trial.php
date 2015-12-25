<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trial extends Model
{


    public function participants(){

        return $this->belongsToMany('App\Participant','participations')->withPivot('participant_comment')->groupBy('participant_id');

    }

//    public function getParticipants(){
//
//
//
//        $participations = Participation::where('trial_id',$this->id)->groupBy('participant_id')->get();
//
//        $participant_ids = [];
//        foreach ($participations as $participation ){
//
//            $participant_ids[] = $participation->participant_id;
//        }
//
//        return Participant::whereIn('id',$participant_ids)->get();
//    }
    //
}
