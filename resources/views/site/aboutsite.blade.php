@extends('layout.master')

@section('title', 'About')

@section('content')

    <h1>About Site Page</h1>

    @include('partials.contactform', ['name' => 'Mazhar Ul Islam'])

@endsection

@section('style')
    <style>
        body
        {
            background: #22ff88;
        }
    </style>
    
@endsection
    
