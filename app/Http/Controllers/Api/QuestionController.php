<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuestionResource;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::get();
        return QuestionResource::collection($questions);
    }

    public function show(Question $question)
    {
        return new QuestionResource($question);
    }
}