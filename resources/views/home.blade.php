@extends('layouts.master')

@section('title')
    Dog Database
@stop

@section('content')
    <header>
        <h1>Dog Database</h1>
    </header>

    <main>
        <h2>Search/Match</h2> 
        
        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            The dog breeds available are: Labrador, Bulldog, German Shepherd, Golden Retriever, Beagle, Rottweiler, Poodle
        @endif
        
        <form method='GET' action='{{ action("HomeController@search") }}'>
            <input type='text' name='search' placeholder='Type breed...' required>
            <br> 
            <button type='submit'>Submit</button>
        </form>  
    </main>

    <footer>
        <p>©2017</p>
    </footer>
@stop