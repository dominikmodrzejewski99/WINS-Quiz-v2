<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public static $score = 0;

    public function showQuestion($id, $wrong_answer = false, $score = 0) {
        $question = Question::findOrFail($id);

        return view('question', ['question' => $question, 'id' => $id, 'wrong_answer' => $wrong_answer, 'score' => $score]);
    }

    public function checkAnswer(Request $request, $id, $score = 0) {
        $score = $score;
        dump('score', $score);
        $question = Question::findOrFail($id);
        $correct_answer = $question['answer_correct'];
        $answer = $request->get('answer');
        $questions_length = count(Question::all());

        if ($answer === $correct_answer) {
            if((int)$id === $questions_length) {

                return view("result")->with('score', $score);
            }
            dd('1', $score);
            return redirect()->route('show', ['id' => $id, 'wrong_answer' => 0, 'score' => $score]);
        } else {

            (int)$score++;
            dd('2', $score);
            return redirect()->route('show', ['id' => $id, 'wrong_answer' => 1, 'score' => $score]);
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

    public function start() {
        return view("start");
    }
}
