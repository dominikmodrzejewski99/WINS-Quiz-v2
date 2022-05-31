<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WINS Quiz</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container mt-5">

    <h1>WINS Quiz </h1>
    <p >Pytanie {{$id}}</p>
    <p class="h2 my-5">{{$question['question']}}</p>

    <form action="/show/{{$id}}/{{$score}}" method="POST">
        @csrf
        <div>
            <input type="radio" id="a" value="0" name="answer">
            <label for="a">{{$question['answer_a']}}</label>
        </div>

        <div>
            <input type="radio" id="b" value="1" name="answer">
            <label for="b">{{$question['answer_b']}}</label>
        </div>

        <div>
            <input type="radio" id="c" value="2" name="answer">
            <label for="c">{{$question['answer_c']}}</label>
        </div>

        <div class="mb-5">
            <input type="radio" id="d" value="3" name="answer">
            <label for="d">{{$question['answer_d']}}</label>
        </div>

        <button type="submit" class="btn btn-primary">Wyślij </button>

        @if($wrong_answer)
            <p>Zła odpowiedź</p>
        @endif
    </form>
</div>
</body>
</html>
