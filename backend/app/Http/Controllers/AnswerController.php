<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerStoreRequest;
use App\Http\Requests\AnswerUpdateRequest;
use App\Repository\Answer\AnswerRepositoryInterface;

class AnswerController extends Controller
{
    private $repository;

    public function __construct(AnswerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() {
        $questions = $this->repository->getAll();

        return response()->json($questions);
    }

    public function store(AnswerStoreRequest $request) {
        try {
            $this->repository->create($request);
    
            return response()->json(['message' => 'Answer created!'], 201);
        } catch (\Throwable $th) {
            return response()->json('Failed to store the answer', 400);
        }

    }

    public function update(AnswerUpdateRequest $request, int $id) {
        
        try {
            $questionUpdated = $this->repository->update($request, $id);

            return response()->json(['question' => $questionUpdated->question]);
        } catch (\Throwable $th) {
            return response()->json('Failed to update the question', 400);
        }

    }

    public function destroy(int $id) {
        $this->repository->delete($id);

        return response()->json('Answer deleted');
    }

    public function show(int $id) {
        $question = $this->repository->getById($id);

        return response()->json($question);
    }
}
