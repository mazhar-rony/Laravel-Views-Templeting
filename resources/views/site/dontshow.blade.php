@extends('layout.master')

@section('title', 'Forbiden')

@section('content')

    {{--  @component('components.alert')

        @slot('title')
            <h2>Forbidden !!!</h2>
        @endslot

        <h3>Master page info can't be shown here.</h3>
        <strong>satus code 403</strong>
    @endcomponent  --}}

    {{--  this abc comes from boot method in AppServiceProvider.php file (it is used for aliasing @component('component.alert') located above) --}}
    @abc
        @slot('title')
        <h2>Forbidden !!!</h2>
        @endslot

        <h3>Master page info can't be shown here.</h3>
        <strong>satus code 403</strong>
    @endabc

    <h1>Dont Show Page </h1>
    <h3> "Lorem ipsum..." from Master page won't show here because of</h3><h2>Blank Section</h2> eg:"@@section('extrafield')"

@endsection

@section('extrafield')
    
@endsection