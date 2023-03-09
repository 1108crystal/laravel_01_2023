<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

<body>
    <h1>hello! studnet index blade </h1>
    <br>
    @php
        // dd($data);
    @endphp
    @foreach ($data as $item)
    <p>{{$item['name']}} - {{$item['mobile']}}</p>
        
    @endforeach
    {{-- array $data --}}
    {{-- <h1>hello,{{$data['name']}}</h1>
    <h1>arg={{$data['arg']}}</h1>
    <hr> --}}
    {{-- <h1>hello,{{!!$data['name']!!}}</h1>
    <h1>arg={{$data['arg']}}</h1> --}}

    {{-- value --}}
    {{-- <h1>hello,{{$name}}</h1>
    <h1>arg={{$arg}}</h1> --}}

    


    <hr>
    <hr>
    <a href="student/excel">student/excel</a>
    <hr>
    <a href="{{ url('student/excel') }}">url(student/excel)</a>
    <Br>
    <a href="{{route('excel')}}">route('excel')</a>
    <hr>
    <hr>
    <a href="{{ url('student/bbb') }}">url(ddd)</a>
    <br>
    <a href="{{route('aaa')}}">route=ddd</a>


    <?php
    // unset($data);
    // dd($data);
    ?>

</body>

</html>