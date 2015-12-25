<?php

use Illuminate\Database\Seeder;
use App\Trial;

class TrialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i<50; $i++){
            $t = new Trial();
            $t->researcher_id = rand(1,4);
            $t->name = 'a test ' . rand();
            $t->save();
    }


        //
    }
}
