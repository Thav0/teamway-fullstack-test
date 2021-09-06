<?php

namespace App\Repository\Question;

use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Models\QuestionModel;

class QuestionRepository implements QuestionRepositoryInterface {
    public function create(QuestionStoreRequest $request) {
        try {
            QuestionModel::create(['question' => $request->question]);
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function update(QuestionUpdateRequest $request, int $id) {
        try {
            $question = QuestionModel::find($id);

            $question->question = $request->question;

            $question->save();
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function delete(int $id) {
        try {
            $question = QuestionModel::find($id);

            $question->delete();
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

    public function getAll() {
        return QuestionModel::all();
    }

    public function getById(int $id) {
        try {
            return QuestionModel::find($id);
        } catch (\Throwable $th) {
            throw $th;
            report($th);
        }
    }

}