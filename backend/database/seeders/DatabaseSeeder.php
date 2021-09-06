<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

        $this->call(PersonalityGroupsSeeder::class);
        $this->call(AnswersSeeder::class);
        $this->call(QuestionsSeeder::class);
    }
}
