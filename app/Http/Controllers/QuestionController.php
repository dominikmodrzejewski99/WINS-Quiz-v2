<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = \App\Question::all();
        return view("question")->with("question", $question[0]->answer_correct);
    }

    public function showAll() {
        $questions = \App\Question::all();
        return view("question_list")->with("questions", $questions);
    }

    public function create() {
        return view("add");
    }

    public function store(Request $request) {
//        dd($request->all());
          Question::create($request->all());

          return redirect('/questions');
    }

    public function answer(): string {
        return "answer";
    }

    public function start(): string {
        return "Witaj w Quizie";
    }
}
