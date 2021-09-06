<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalityGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personality_groups')->insert([
            ['introvert'],
            ['extrovert']
        ]);
    }

    public function down()
    {
        DB::table('personality_groups')->truncate();
    }
}
