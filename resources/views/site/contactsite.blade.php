@extends('layout.master')

@section('title', 'Contact')

@section('content')

    <h1>Contact Site Page</h1>

    @include('partials.contactform', ['name' => 'Mazhar Ul Islam'])

@endsection
    
