<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Translate</title>
    </head>
    <body>
        <form action="{{ route('translated') }}" method="POST">
            @csrf
            <label>Enter english phrase :</label><br><br>
            <textarea name="source" rows="10" cols="50"></textarea><br><br>
            <button type="submit">Translate</button>
        </form>

        @isset($sourceText)
        <hr>

        <div>
            {{ $sourceText }}
            <br><br>
            {{ $translatedText }}
        </div>
        @endisset

    </body>
</html>
