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
        $r = new \App\Researcher();
        $r->name = 'Dr. Quermo\'s research group';
        $r->organization = 'Technion IE faculty';
        $r->description = 'Research under the supervision of Dr. Quermo';
        $r->save();
        //
        //
    }
}
