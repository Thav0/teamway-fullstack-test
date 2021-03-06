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
            [
                'name' => 'introvert',
                'created_at' => now(),
                'message' => 'Introvert - Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce consectetur tortor vitae tincidunt maximus. Morbi varius ex nisi, quis sagittis leo varius vel.'
            ],
            [
                'name' => 'extrovert',
                'created_at' => now(),
                'message' => 'Extrovert - Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Fusce consectetur tortor vitae tincidunt maximus. Morbi varius ex nisi, quis sagittis leo varius vel.'
            ],
        ]);
    }

    public function down() {
        PersonalityGroup::truncate();
    }
}
