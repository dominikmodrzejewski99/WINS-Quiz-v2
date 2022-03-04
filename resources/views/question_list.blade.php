<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @isset($questions)
        <h1>Lista pytań </h1>
        @foreach($questions as $q)
            <p>{{$q->question}}</p>
        @endforeach
    @endisset

</body>
</html>
