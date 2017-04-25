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
        #searchOption:hover, #matchOption:hover {
            color: #3a87ad; 
        }
        #matchView {
            display:none; 
        }
        .label {
            font-size: 30px;
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
        #matchView {
        }
        
        /*http://codepen.io/the_ruther4d/pen/frbdH*/
        input[type="range"]{
          -webkit-appearance:none;
          width:50vw;
          height:50px;
          margin:10px 50px;
          background-size:50vw 20px;
          background-position:center;
          background-repeat:no-repeat;
          overflow:hidden;
          outline: none;
        margin: 0 auto;
        }

        input[type="range"]::-webkit-slider-thumb{
          -webkit-appearance:none;
        background-color: skyblue; 
          width:40px;
          height:50px;
          position:relative;
          z-index:3;
          box-shadow:0 0 5px 0 rgba(0,0,0,0.3);
            cursor: pointer; 
        }

        input[type="range"]::-webkit-slider-thumb:after{
          content:" ";
          width:160px;
          height:10px;
          position:absolute;
          z-index:1;
          right:20px;
          top:5px;
          background: #ff5b32;
          background: linear-gradient(to right, #f088fc 1%, #AC6CFF 70%);
        }
        
        .footerMatch {
            position:absolute;
            bottom:0;
            width:100%;
            height:60px;   
            background: rgba(0,0,0,.05);
        }
        
        .footerSearch {
            position:fixed;
            bottom:0;
            width:100%;
            height:60px;   
            background: rgba(0,0,0,.05);
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
        <h2><span id="searchOption"><strong>Search</strong></span> | <span id="matchOption">Match</span></h2> 
        <br><br>
        <form method='GET' action='{{ action("HomeController@search") }}'>
            <div class = 'form-group searchView'>
                <input type='text' name='search' id='homeSearch' placeholder='Type breed...' required>
                <br> 
                <footer class="footerSearch">
                    <br>
                    <p>Created at Harvard Extension. Spring 2017.</p>
                </footer>
            </div>
            
            <div id = "matchView">
                <h2 class = 'matchView'>Size:</h2>
                <p class = 'matchView' id="preference">I prefer medium-size dogs</p>
                <div class = 'form-group matchView'>
                    <input type = 'range' min=0 max=100 step=.3 id='sizeSlider' style="width:50vw;">
                    <br>
                    <img src='images/small_dog.png'  id='smallDog' style='display:none; height: 200px;'> 
                    <img src='images/smaller_dog.png' id='smallerDog' style='display:none; height: 200px;'> 
                    <img src='images/medium_dog.png' id='mediumDog' style='height:200px;'> 
                    <img src='images/large_dog.png' id='largeDog' style='display:none; height: 200px;'> 
                </div>

                <br>
                <h2 class = 'matchView'>KeyWords:</h2>
                <p class ='matchView'>Pick some traits you like in a dog</p>
                <p class ='matchView' id="refresh" style="cursor:pointer; font-weight: 600;">Refresh</p>
                <br>
                <div class = 'matchView'>
                    <span class="label label-default">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Trick Guru</span> 
                    <br><br><br>
                    <span class="label label-default">Smelly</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Very Hungry</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Loyal</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Big</span>
                    <br><br><br>
                    <span class="label label-default">Trouble-maker</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Dirty</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Loud</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Stubborn</span>
                    <br><br><br>
                    <span class="label label-default">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Trick Guru</span> 
                    <br><br><br>
                    <input type='text' id="keywords" placeholder='I want my dog to be...' style="font-size: 22px; font-weight: 500;">
                </div>
                <br><br><br>
                <h2 class = 'matchView'>Location:</h2>
                <p class = 'matchView'>..Enter 5-digit zip code... OPTIONAL</p>
                <div class = 'form-group has-feedback matchView' style="width:30vw; height: 100px; margin: 0 auto;">
                    <input type='text' id="zipCode" class="form-control" placeholder='Your zipcode...' style="font-size: 22px; font-weight: 500; height: 100px; margin: 0 auto;">
                    <i class="form-control-feedback glyphicon glyphicon-map-marker" style="font-size: 40px; top: 25%; left:80%;"></i>
                </div>
                <br><br>
                <button type='submit'><i class="fa fa-paw" aria-hidden="true" style="font-size:30px;"></i></button>
                <footer class=".footerMatch">
                    <br><br>
                    <p>Created at Harvard Extension. Spring 2017.</p>
                </footer>
            </div>
        </form>  
    </main>
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
            $("#matchView").hide(700); 
            $(this).html("<strong>Search</strong>");
            $("#matchOption").html("Match");

        });
        $("#matchOption").click(function() {
            $(".searchView").hide(700);  
            $("#matchView").show(700); 
            $(this).html("<strong>Match</strong>");
            $("#searchOption").html("Search");
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
        
        
        // update location icon
        $("#zipCode").on("propertychange change click keyup input paste",function() {
            var isValidZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test($(this).val());
            if ($(this).val().length == 0)
                $(".glyphicon-map-marker").css('color', 'black');  
            else if (isValidZip)
                $(".glyphicon-map-marker").css('color', '#468847');  
            else 
                $(".glyphicon-map-marker").css('color', '#b94a48');  
        });
    </script>
@endpush
