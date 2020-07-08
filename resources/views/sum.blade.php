<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Summation View</h1>

    {{--<p>Result = {{$res}}</p>  commenting in blade --}}

    <p>Result = {{$result}}</p>
    <p>Number1 = {{$num1}}</p>
    <p>Number1 = {{$num2}}</p> <br>

    @{{"for printing something in blade (double curly brackets)"}}

    @php
      $result_1 = $result * 10;
    @endphp

    @if ($result % 2 == 0)
        <p>{{"even number"}}</p>
    @else
        <p>{{"odd number"}}</p>
    @endif

    {{$result_1}}

    {{--
    @if (count($data) > 0)
        @foreach ($data as $k => $v)
            <p><strong>{{ $k }}</strong>{{ $v }}</p>
        @endforeach

    @else
       <p>{{ "no data found" }}</p> 
    @endif
    --}}

    @forelse ($data as $k => $v)
        <p>{{$loop->iteration}} {{ $loop->index }}<strong> {{ $k }}</strong> {{ $v }}</p>
    @empty
        <p>{{ "no data found" }}</p>
    @endforelse



</body>
</html>