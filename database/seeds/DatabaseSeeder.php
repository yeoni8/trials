<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ResearcherTableSeeder::class);
        $this->call(TrialsTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        $this->call(ParticipationsTableSeeder::class); //this should be last because it depends on the others
    }
}
