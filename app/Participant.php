<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{

    public function trials(){

        return $this->belongsToMany('App\Trial','participations')->withPivot('participant_comment')->groupBy('trial_id');
    }
    //
}
