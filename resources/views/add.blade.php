<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Treść pytania</label>
            <textarea name="question"> </textarea>
        </div>
        <div class="form-group">
            <label for="">Odpowiedź A</label>
            <textarea name="answer_a"> </textarea>
        </div>
        <div class="form-group">
            <label for="">Odpowiedź B</label>
            <textarea name="answer_b"> </textarea>
        </div>
        <div class="form-group">
            <label for="">Odpowiedź C</label>
            <textarea name="answer_c"> </textarea>
        </div>
        <div class="form-group">
            <label for="">Odpowiedź D</label>
            <textarea name="answer_d" > </textarea>
        </div>
        <div class="form-group">
            <label for="">Poprawna odpowiedź</label>
            <textarea name="answer_correct"> </textarea>
        </div>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>
