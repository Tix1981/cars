<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>All Cars</title>
    </head>
    <body>
        <ul>
            @foreach ($cars as $car)
                <li><a href="{{ route('single-car', ['id' => $car->id]) }}">{{ $car->title }}</a></li>
            @endforeach
        </ul>
    </body>
</html>
