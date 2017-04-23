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
            height: 100px;
            font-size: 30px;
            width: 50vw; 
            margin: 0 auto;
        }
        button {
            width: 15vw;
            height: 65px; 
            font-size: 25px; 
        } 
        .ui-autocomplete { 
            text-align: left; 
            max-height: 250px; 
            overflow-y: scroll; 
            overflow-x: hidden;
        }
        .ui-autocomplete.ui-widget {
            font-size: 20px; 
        }
        #searchOption, #matchOption {
            cursor: pointer; 
        }
        .matchView {
            display:none; 
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
        <h2><span id="searchOption">Search</span> | <span id="matchOption">Match</span></h2> 
        <br>
        <form method='GET' action='{{ action("HomeController@search") }}'>
            <div class = 'form-group searchView'>
                <input type='text' name='search' id='homeSearch' placeholder='Type breed...' required>
            </div>
            
            <h2 class = 'matchView'>Size</h2>
            <div class = 'form-group matchView'>
                <input type = 'range' min=0 max=100 step=.3 id='testo' name='temperature'>
            </div>
            <p class ='matchView'>Two options: either put a small dog on left/big on right, or have a single dog that grows as you adjust the slider</p>
            
            <h2 class = 'matchView'>KeyWords</h2>
            <p class = 'matchView'>Here put some a big list of keywords and let the user pick a few they want</p>
            <div class = 'matchView'>
                <a href="#">Cute</a> | <a href="#">Active</a> | <a href="#">Hairy</a> | <a href="#">Trick guru</a>
                <br>
                <a href="#">Smelly</a> | <a href="#">Very hungry</a> | <a href="#">Loyal</a> | <a ref="#">Big</a>
                <br>
                <a href="#">Trouble-maker</a> | <a href="#">Dirty</a> | <a href="#">Loud</a> | <a href="#">Stubborn</a>
            </div>
            
            <h2 class = 'matchView'>Trait Scores</h2>
            <p class = 'matchView'>You get 100 points to distribute amongst 5 traits. Give higher scores to the traits you find more important. Need to think of a more creative way than basic input fields</p>
            <div class = 'form-group matchView'>  
                <input type='number' placeholder="Energy" id='energyScore'>
            </div>
            <div class = 'form-group matchView'>  
                <input type='number' placeholder="Social Skills" id='socialScore'>
            </div>
            <div class = 'form-group matchView'>  
                <input type='number' placeholder="Intelligence" id='intelligenceScore'>
            </div>
            <div class = 'form-group matchView'>  
                <input type='number' placeholder="Cleanliness" id='cleanScore'>
            </div>
            <div class = 'form-group matchView'> 
                <input type='number' placeholder="Adventure-Seeking" id='adventureScore'>
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
        
        $("#searchOption").click(function() {
            $(".searchView").show(700); 
            $(".matchView").hide(700); 
        });
        $("#matchOption").click(function() {
            $(".searchView").hide(700);  
            $(".matchView").show(700); 
        });
    </script>
@endpush
