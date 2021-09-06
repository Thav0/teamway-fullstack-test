<?php

namespace App\Repository\Question;

use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;

interface QuestionRepositoryInterface {
    public function create(QuestionStoreRequest $request);
    public function update(QuestionUpdateRequest $request, int $id);
    public function delete(int $id);
    public function getAll();
    public function getById(int $id);
}