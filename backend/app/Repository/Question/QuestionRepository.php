<?php

namespace App\Repository\Question;

use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Models\Question;

class QuestionRepository implements QuestionRepositoryInterface {
    public function create(QuestionStoreRequest $request) {

        try {
            Question::create(['question' => $request->question]);
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function update(QuestionUpdateRequest $request, int $id) {
        try {
            $question = Question::find($id);

            $question->question = $request->question;

            $question->save();

            return $question;
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function delete(int $id) {
        try {
            $question = Question::find($id);

            $question->delete();
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function getAll() {
        // eager loading
        return Question::with('answer')->get();
    }

    public function getById(int $id) {
        try {
            $question = Question::with('answer')->find($id);
            if (!$question) {
                return ['message' => 'Any question was found'];
            }

            return $question;
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

}