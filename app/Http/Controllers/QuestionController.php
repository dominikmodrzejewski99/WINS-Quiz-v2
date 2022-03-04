<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showQuestion($id) {
        $question = Question::findOrFail($id);

        return view('question',['question'=> $question,'id'=>$id]);
    }

    public function checkAnswer(Request $request, $id) {
        $question = Question::findOrFail($id);
        $correct_answer = $question['answer_correct'];
        $answer = $request->get('answer');

        if ($answer === $correct_answer) {

            return redirect()->route('show', ['id' => ++$id]);
        } else {

            return "Zła odpowiedź";
        }
    }

    public function showAll() {
        $questions = Question::all();
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
