@extends('layout.master')

@section('title', 'Extra')

@section('content')

    <h1>Extra Page</h1>

@endsection

@section('extrafield')
    @parent

    <h3>Some Extra Info with "Lorem Ipsum...."<br><br>
    Note: if you want to remove "Lorem Ipsum.... from master page then just remove the "@@parent"</h3>
    
@endsection