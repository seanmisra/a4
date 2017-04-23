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
        .ui-autocomplete { 
            text-align: left; 
            font-size: 30px; 
            max-height: 250px; 
            overflow-y: scroll; 
            overflow-x: hidden;
        }
    </style>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
        <form method='GET' action='{{ action("HomeController@search") }}'>
            <div class = 'form-group'>
                <input type='text' name='search' id='homeSearch' placeholder='Type breed...' required>
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
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>

    <script type='text/javascript'> 
        var allDogs = {!! $allDogs !!}; 
        
        var randArray = ["one", "two", "three", "four", "five", "six", "seven"]; 
        var randNumb = Math.round(Math.random()*6); 
        var imageNumb = randArray[randNumb];
        path = "images/cover_"+imageNumb+".png";
        
        $('body').css({'background': 'url(' + path + ')' + 'no-repeat 50% 50% fixed', 'background-size': 'cover'}); 
        
        
        //create jQuery autocomplete validation 
        $(function () {
            $("#homeSearch").autocomplete({
                source:allDogs
            }); 
        }); 
    </script>
@endpush
