@extends('layouts.master')

@section('title')
    Dog Data -- {{ $dog }}
@stop

@section('content')
    <header>
        <h1>{{ $dog }}</h1>
    </header>
        
    <main>
        <h2>{{ $dog }} information</h2>    
    </main>
        
    <footer>
        <p>©2017</p>
    </footer>
@stop