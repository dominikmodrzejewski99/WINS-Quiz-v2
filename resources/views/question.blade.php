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
    <form action="/show/{{$id}}">
        @csrf
        <div>
            <input type="radio" name="answer">
            <label for="">{{$question['answer_a']}}</label>
        </div>

        <div>
            <input type="radio" id="dewey" name="answer">
            <label for="dewey">{{$question['answer_b']}}</label>
        </div>

        <div>
            <input type="radio" id="louie" name="answer">
            <label for="louie">{{$question['answer_c']}}</label>
        </div>

        <div>
            <input type="radio" id="louie" name="answer">
            <label for="louie">{{$question['answer_d']}}</label>
        </div>

        <button type="submit">Wyślij </button>
    </form>
</body>
</html>
