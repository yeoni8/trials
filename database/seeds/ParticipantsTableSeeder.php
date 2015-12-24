<?php

use Illuminate\Database\Seeder;

use App\Participant;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++){
            $p = new Participant();
            $p->first_name = 'random ' . rand();
            $p->last_name = 'randomgen';
            $p->sex = (rand()%2 ? 'm' : 'f' );
            $p->save();
        }

    }
}
