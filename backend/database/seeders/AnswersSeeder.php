<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::truncate();

        Answer::insert([

            ['answer' => 'I\'m going out with my friends ', 'question_id' => 1, 'personality_group_id' => 2],
            ['answer' => 'I spend time with my family', 'question_id' => 1, 'personality_group_id' => 1],
            ['answer' => 'I read books or watch tv', 'question_id' => 1, 'personality_group_id' => 1],
            ['answer' => 'I go for a walk with my pet/alone', 'question_id' => 1, 'personality_group_id' => 2],

            ['answer' => 'I\'m glad that a group of people is focused on what I\'m saying', 'question_id' => 2, 'personality_group_id' => 2],
            ['answer' => 'I feel stressed, I don\'t like talking to a larger groups of people', 'question_id' => 2, 'personality_group_id' => 1],
            ['answer' => 'I feel a little nervous, but when I start talking, I\'m fine', 'question_id' => 2, 'personality_group_id' => 1],

            ['answer' => 'I am happy to talk to that person about any subject', 'question_id' => 3, 'personality_group_id' => 2],
            ['answer' => 'I\'m waiting for this person to start the conversation first', 'question_id' => 3, 'personality_group_id' => 1],
            ['answer' => 'I find a lot of topics to talk with a newly met person', 'question_id' => 3, 'personality_group_id' => 2],
            ['answer' => 'It\'s hard for me to find a topic that keeps the conversation going', 'question_id' => 3, 'personality_group_id' => 1],

            ['answer' => 'I agree and I am happy to go to the party', 'question_id' => 4, 'personality_group_id' => 2],
            ['answer' => 'I say I can\'t, "I have other plans"', 'question_id' => 4, 'personality_group_id' => 1],
            ['answer' => 'I refuse to come without giving a reason', 'question_id' => 4, 'personality_group_id' => 1],
            ['answer' => 'I agree and then I pretend that something came up', 'question_id' => 4, 'personality_group_id' => 2],

            ['answer' => 'I like subdued things that fit together', 'question_id' => 5, 'personality_group_id' => 1],
            ['answer' => 'I put on bright clothes', 'question_id' => 5, 'personality_group_id' => 2],
            ['answer' => 'I wear dark clothes and lots of accessories (watch, scarf etc.)', 'question_id' => 5, 'personality_group_id' => 2],
            ['answer' => 'I love colorful clothes and matching jewelry', 'question_id' => 5, 'personality_group_id' => 2],

            ['answer' => 'yes?', 'question_id' => 6, 'personality_group_id' => 1],
            ['answer' => 'no?', 'question_id' => 6, 'personality_group_id' => 2],

        ]);
    }
}
