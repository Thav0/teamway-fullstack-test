<?php

namespace Database\Seeders;

use App\Models\PersonalityGroup;
use Illuminate\Database\Seeder;

class PersonalityGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        PersonalityGroup::truncate();

        PersonalityGroup::insert([
            ['name' => 'introvert', 'created_at' => now()],
            ['name' => 'extrovert', 'created_at' => now()],
        ]);
    }

    public function down() {
        PersonalityGroup::truncate();
    }
}
