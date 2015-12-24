<?php

use Illuminate\Database\Seeder;

use App\Participation;
use App\Participant;
use App\Trial;

class ParticipationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maxParticipantID = Participant::count();
        $maxTrialID = Trial::count();


        for ($i=0; $i<1000; $i++){
            $p = new Participation();
            $p->participant_id = rand(1,$maxParticipantID);
            $p->trial_id = rand(1,$maxTrialID);
            $p->save();
        }
        //
    }
}
