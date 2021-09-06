<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::truncate();

        Question::insert([
            ['question' => 'How do you like to spend your free time?'],
            ['question' => 'How do you feel when you have to say something to a group of people?'],
            ['question' => 'How do you behave when you meet a new person?'],
            ['question' => 'What do you do when you are invited by your friend to a party?'],
            ['question' => 'What type of clothing suits you best?'],
            ['question' => 'Do you need silence to stay focused?'],
        ]);
    }
}