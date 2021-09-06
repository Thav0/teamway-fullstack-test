<?php

namespace App\Repository\Answer;

use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;
use App\Models\Answer;

class AnswerRepository implements AnswerRepositoryInterface {
    public function create(AnswerStoreRequest $request) {
        try {
            Answer::create([
                'answer' => $request->answer,
                'question_id' => $request->question_id,
                'personality_group_id' => $request->personality_group_id,
            ]);
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function update(AnswerUpdateRequest $request, int $id) {
        try {
            $answer = Answer::find($id);

            $answer->answer = $request->answer;
            $answer->question_id = $request->question_id;
            $answer->personality_group_id = $request->personality_group_id;

            $answer->save();

            return $answer;
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function delete(int $id) {
        try {
            $answer = Answer::find($id);

            $answer->delete();
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function getAll() {
        return Answer::all();
    }

    public function getById(int $id) {
        try {
            $answer = Answer::find($id);
            if (!$answer) {
                return ['message' => 'Any answer was found'];
            }

            return $answer;
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

}