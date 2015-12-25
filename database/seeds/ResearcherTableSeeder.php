<?php

use Illuminate\Database\Seeder;

class ResearcherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i=0; $i<10; $i++){
            $r = new \App\Researcher();
            $r->name = 'Dr. Quermo\'s research group ' . rand(1,20);
            $r->organization = 'Technion IE faculty';
            $r->description = 'Research under the supervision of Dr. Quermo';
            $r->save();
        }

        //
        //
    }
}
