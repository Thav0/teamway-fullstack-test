<?php

namespace App\Repository\Answer;

interface AnswerRepositoryInterface {
    public function create();
    public function update();
    public function delete(int $id);
    public function show(int $id);
}