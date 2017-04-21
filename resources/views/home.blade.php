@extends('layouts.master')

@push('head')
    <style> 
        body {
            text-align: center; 
        }
        h1 {
            font-size: 70px; 
        }
        input {
            width: 50vw; 
            height: 65px;
            font-size: 25px; 
        }
        button {
            width: 15vw;
            height: 65px; 
            font-size: 25px; 
        } 
    </style>
@endpush 

@section('title')
    Dog Database
@stop

@section('content')
    <header>
        <h1>Dog Database</h1>
    </header>

    <main>
        <h2>Search | Match</h2> 
        
        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            The dog breeds available are: Labrador, Bulldog, German Shepherd, Golden Retriever, Beagle, Rottweiler, Poodle
        @endif
        
        <form method='GET' action='{{ action("HomeController@search") }}'>
            <div class = 'form-group'>
                <input type='text' name='search' placeholder='Type breed...' required>
            </div>
            <br> 
            <button type='submit'>Submit</button>
        </form>  
    </main>

    <footer>
        <p>©2017</p>
    </footer>
@stop

@push('body')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
    crossorigin="anonymous"></script>
    <script> 
        var randArray = ["one", "two", "three", "four", "five", "six", "seven"]; 
        var randNumb = Math.round(Math.random()*6); 
        var imageNumb = randArray[randNumb];
        path = "images/cover_"+imageNumb+".png";
        console.log(randNumb);
        
        $('body').css({'background': 'url(' + path + ')' + 'no-repeat 50% 50% fixed', 'background-size': 'cover'}); 
    </script>
@endpush
