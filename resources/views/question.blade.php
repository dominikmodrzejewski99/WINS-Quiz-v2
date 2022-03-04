<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Treść pytania {{$id}} </h1>
    <p>{{$question['question']}}</p>
    <p>Wskaż poprawną odpowiedź:</p>
    <form action="/show/{{$id}}" method="POST">
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

        <div>
            <input type="radio" id="d" value="3" name="answer">
            <label for="d">{{$question['answer_d']}}</label>
        </div>

        <button type="submit">Wyślij </button>
    </form>
</body>
</html>
