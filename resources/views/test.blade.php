<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Blade Interface</title>
</head>
<body>
    <h1>Hola {{ $title }}</h1>
    <p>Lorem Ipsum dolor sit amet</p>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach
        <br>
        @foreach ($countries as $country => $cities)
            <li>{{$country}}:
                <ul>
                    @foreach ($cities as $city)
                        <li>{{ $city }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>

