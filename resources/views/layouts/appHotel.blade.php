<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Name - @yield('title')</title>
</head>

<body>
    <h1>泰山大飯店</h1>
    <div class="container">
        @yield('content')
    </div>
    <a href="{{route('hotels.1')}}">f1</a>
    <a href="{{route('hotels.2')}}">f2</a>
    <a href="{{route('hotels.3')}}">f3</a>
    <hr>
</body>

</html>