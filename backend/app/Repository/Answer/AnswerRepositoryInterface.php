<?php

namespace App\Repository\Answer;

use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;

interface AnswerRepositoryInterface {
    public function create(AnswerStoreRequest $request);
    public function update(AnswerUpdateRequest $request, int $id);
    public function delete(int $id);
    public function getAll();
    public function getById(int $id);
}