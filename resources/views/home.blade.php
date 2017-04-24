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
        .userPreference {
            width: 10vw; 
            text-align: center; 
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
        .label {
            font-size: 22px;
            font-weight: 300;
            cursor: pointer; 
        }
        .label:hover {
            opacity: .8; 
        }
        label {
            display: inline-block;
            width: 300px;
            text-align: right;
            font-size: 25px; 
            margin-left: -15vw;  
        }
        .numberInput {
            margin: 0 auto;
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
            
            <h2 class = 'matchView'>Size:</h2>
            <p class = 'matchView' id="preference">I prefer medium-size dogs</p>
            <div class = 'form-group matchView'>
                <input type = 'range' min=0 max=100 step=.3 id='sizeSlider' style="width:50vw;">
                <img src='images/small_dog.png'  id='smallDog' style='display:none'> 
                <img src='images/smaller_dog.png' id='smallerDog' style='display:none'> 
                <img src='images/medium_dog.png' id='mediumDog'> 
                <img src='images/large_dog.png' id='largeDog' style='display:none'> 
            </div>
            
            <br>
            <h2 class = 'matchView'>KeyWords:</h2>
            <p class ='matchView'>Pick some traits you like in a dog</p>
            <p class ='matchView' id="refresh" style="cursor:pointer; font-weight: 600;">Refresh</p>
            <br>
            <div class = 'matchView'>
                <span class="label label-warning">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-danger">Trick Guru</span> 
                <br><br>
                <span class="label label-success">Smelly</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Very Hungry</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Loyal</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Big</span>
                <br><br>
                <span class="label label-danger">Trouble-maker</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Dirty</span>&nbsp;&nbsp;&nbsp;<span class="label label-warning">Loud</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Stubborn</span>
                <br><br>
                <span class="label label-warning">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-danger">Trick Guru</span> 
                <br><br>
                <input type='text' id="keywords" placeholder='I want my dog to be...' required style="font-size: 16px;">
            </div>
            <br><br>
            <h2 class = 'matchView'>Location:</h2>
            <p class = 'matchView'>..Enter 5-digit zip code... OPTIONAL</p>
            <div class = 'matchView'>
                <input type='text' placeholder='e.g. 98765'>
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
        
        $("#sizeSlider").change(function() {
            var value = $(this).val(); 
            if (value >= 75) {
                $("#smallDog, #smallerDog, #mediumDog").hide();
                $("#largeDog").show(500); 
                $("#preference").text("I prefer large dogs");
            }
            else if (value >= 50) {
                $("#smallDog, #smallerDog, #largeDog").hide();
                $("#mediumDog").show(500); 
                $("#preference").text("I prefer medium-sized dogs");
            }
            else if (value >= 25) {
                $("#smallDog, #mediumDog, #largeDog").hide();
                $("#smallerDog").show(500); 
                $("#preference").text("I prefer small dogs");
            }
            else {
                $("#smallerDog, #mediumDog, #largeDog").hide();
                $("#smallDog").show(500); 
                $("#preference").text("I prefer lap dogs");
            }
        }); 
        
        // update keyword text input
        $(".label").click(function() {
            var currentText = $("#keywords").val();  
            var newKey = $(this).text(); 
            console.log(currentText);
            console.log(newKey); 
            
            // ignore repeat keywords
            if (currentText.includes(newKey));  
            // add trait
            else if (currentText.length > 0)
                $("#keywords").val(currentText + ", " + newKey); 
            // first trait
            else 
                $("#keywords").val(newKey); 
        })        
    </script>
@endpush
