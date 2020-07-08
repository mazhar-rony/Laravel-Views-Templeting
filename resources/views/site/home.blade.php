@extends('layout.master')

@section('title', 'Home')

@section('content')

    <h1>Home Page</h1>

    {!! $data !!} <br>

   
    <h3 style='background:green;'>Note: <?php echo "{{" ."$"."data }}"; ?> syntex prevent us from printing HTML document for malliscious attack like: "script" tag.</h3><br>
    
    
@endsection
    

