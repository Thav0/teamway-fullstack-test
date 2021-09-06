<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Repository\Question\QuestionRepositoryInterface;

class QuestionController extends Controller
{
    private $repository;

    public function __construct(QuestionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() {
        $questions = $this->repository->getAll();

        return response()->json($questions);
    }

    public function store(QuestionStoreRequest $request) {
        $this->repository->create($request);

        return response()->json(['message' => 'Question created!'], 201);
    }

    public function update(QuestionUpdateRequest $request, int $id) {
        
        try {
            $questionUpdated = $this->repository->update($request, $id);

            return response()->json(['question' => $questionUpdated->question]);
        } catch (\Throwable $th) {
            return response()->json('Failed to update the question', 400);
        }

    }

    public function destroy(int $id) {
        $this->repository->delete($id);

        return response()->json('Question deleted');
    }

    public function show(int $id) {
        $question = $this->repository->getById($id);

        return response()->json($question);
    }

}
