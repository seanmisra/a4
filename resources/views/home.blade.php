@extends('layouts.master')


<!--UI REFERENCES: http://bootsnipp.com/snippets/nPE28, http://callmenick.com/post/css-toggle-switch-examples -->

@push('head')
    <style> 
        body {
            text-align: center; 
        }
        h1 {
            font-size: 70px; 
        }
        h2 {
            font-weight: bold; 
        }
        #matchOption, #searchOption {
            font-weight: normal; 
        }
        p {
            font-size: 18px; 
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
            border-radius: 0px !important; 
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
        background-color: #428bca;
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
        
        input.cmn-toggle-yes-no + label {
            padding: 2px;
            width: 500px;
            margin: 0 auto;
            cursor:pointer; 
        }
        input.cmn-toggle-yes-no + label:hover {
            opacity: .8; 
        }
        input.cmn-toggle-yes-no + label:before, input.cmn-toggle-yes-no + label:after {
            padding: 2px;
            width: 500px;
            position: absolute; 
            display: block;
            color: #fff;
            text-align: center;
            line-height: 150px;
        }
        input.cmn-toggle-yes-no + label:before {
            background-color: #428bca;
            content: attr(data-off);
            transition: transform 1s;
            backface-visibility: hidden;
            font-size: 35px; 

        }
        input.cmn-toggle-yes-no + label:after {
            background-color: #5cb85c;
            content: attr(data-on);
            transition: transform 1s;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            font-size: 30px; 
        }
        input.cmn-toggle-yes-no:checked + label:before {
            transform: rotateY(180deg);
        }
        input.cmn-toggle-yes-no:checked + label:after {
            transform: rotateY(0);
        }
        
        .round-button {
            margin: 0 auto;
            display:block;
            width:25vw; 
            height:100px;
            line-height:50px;
            border: none;
            background-color: white;
            text-align:center;
            text-decoration:none;
            color: rgb(100, 100, 100); 
            font-size:20px;
            font-weight:bold;
            transition: all .75s; 
        }
        
        .round-button:hover {
            width: 50vw; 
            color: white;
            background: rgb(180, 180, 180); 
        }
        
        #homeSearch, .round-button:active, .round-button:focus {
            outline:none; 
        }
        
        #homeSearch:focus {
            box-shadow: 10px 10px 0px 0px rgba(0, 0, 0, 0.3);
        }
        
        /* Container box to set the sides relative to */
        .cube {
            width: 250px;
            height: 100px;
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }
        /* The two faces of the cube */
        .default-state,
        .active-state {
            height: 100px;
        }
        /* Position the faces */
        .default-state {
            -webkit-transform: translateZ(50px);
            -moz-transform: translateZ(50px);
            -o-transform: translateZ(50px);
            -ms-transform: translateZ(50px);
            transform: translateZ(50px);
        }
        .flip-to-top .active-state {
            -webkit-transform: rotateX(90deg) translateZ(150px);
            -moz-transform: rotateX(90deg) translateZ(150px);
            -o-transform: rotateX(90deg) translateZ(150px);
            -ms-transform: rotateX(90deg) translateZ(150px);
            transform: rotateX(90deg) translateZ(150px);
        }
        .flip-to-bottom .active-state {
            -webkit-transform: rotateX(-90deg) translateZ(-50px);
            -moz-transform: rotateX(-90deg) translateZ(-50px);
            -o-transform: rotateX(-90deg) translateZ(-50px);
            -ms-transform: rotateX(-90deg) translateZ(-50px);
            transform: rotateX(-90deg) translateZ(-50px);
        }
        /* Rotate the cube */
        .cube.flip-to-top:hover {
            -webkit-transform: rotateX(-89deg);
            -moz-transform: rotateX(-89deg);
            -o-transform: rotateX(-89deg);
            -ms-transform: rotateX(-89deg);
            transform: rotateX(-89deg);
        }
        .cube.flip-to-bottom:hover {
            -webkit-transform: rotateX(89deg);
            -moz-transform: rotateX(89deg);
            -o-transform: rotateX(89deg);
            -ms-transform: rotateX(89deg);
            transform: rotateX(89deg);
        }
        /* END CORE CSS */
        /* Demo styling */
        .cube {
            text-align: center;
            margin: 0 auto;
        }
        .default-state,
        .active-state {
            background: #ffcc00;
            font-size: 16px;
            text-transform: uppercase;
            color: #fff;
            line-height: 100px;
            -webkit-transition: background 250ms ease;
            -moz-transition: background 250ms ease;
            -o-transition: background 250ms ease;
            transition: background 250ms ease;
        }
        .cube:hover .default-state {
            background: #ffcc00;
        }
        .active-state {
            background: #e20074;
        }
        #flipto {
            display: block;
            text-align: center;
            text-decoration: none;
            margin-top: 20px;
            color: #ccc;
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
                <input type='text' name='search' id='homeSearch' placeholder='Type breed...' required style="height: 125px; width: 60vw;">
                <br> 
                <footer class="footerSearch">
                    <br>
                    <p>Created at Harvard Extension. Spring 2017.</p>
                </footer>
            </div>
        </form>
        
        <form method='GET' action='{{ action("HomeController@match") }}'>
            <div id = "matchView">
                <h2 class = 'matchView'>Size:</h2>
                <p class = 'matchView' id="preference">I prefer <strong>medium-sized</strong> dogs</p>
                <div class = 'form-group matchView'>
                    <input type = 'range' name='size' min=0 max=100 step=.3 id='sizeSlider' style="width:50vw;">
                    <br>
                    <img src='images/small_dog.png'  id='smallDog' style='display:none; height: 250px;'> 
                    <img src='images/smaller_dog.png' id='smallerDog' style='display:none; height: 250px;'> 
                    <img src='images/medium_dog.png' id='mediumDog' style='height:250px;'> 
                    <img src='images/large_dog.png' id='largeDog' style='display:none; height: 200px;'> 
                </div>

                <br><br>
                <h2 class = 'matchView'>KeyWords:</h2>
                <p class ='matchView'>Pick some traits you like in a dog</p>
                <p class ='matchView' id="refresh" style="cursor:pointer; font-weight: 600; font-size: 40px;"><i class="fa fa-refresh" aria-hidden="true"></i></p>
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
                    <input type='text' readonly name='keywords' id='keywords' placeholder='I want my dog to be...' style="font-size: 22px; font-weight: 500;">
                </div>
                <br><br><br><br>
                <h2 class = 'matchView'>Location:</h2>
                <p class = 'matchView'>Where do you live</p>
                
                <div class = 'form-group'>
                    <div class="switch">
                        <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" name= 'lifestyle' type="checkbox" style="display:none;">
                        <label for="cmn-toggle-7" data-on="Apartment&nbsp;&nbsp;&nbsp;&#x1f3e2;" data-off="House&nbsp;&nbsp;&nbsp;&#127968;"></label>                        
                    </div>
                </div>
                
                <br><br><br><br><br><br><br><br><br><br><br><br>
                <br><br>
                                
                <!-- flip-to-top or flip-to-bottom -->
                <button type='submit' class="cube flip-to-top" style="border:none; outline: none; padding: 0 0 0 0; width: 40vw; height: 100px;">
                    <div class="default-state" style="font-size: 20px; color: rgb(100, 100, 100); background-color: white; font-weight: bold;">
                        <span>FIND YOUR DOG</span>
                    </div>
                    <div class="active-state" style="font-size: 50px; color: white; background-color: #5cb85c; font-weight: bold;">
                        <span><i class="fa fa-paw" aria-hidden="true"></i></span>
                    </div>
                </button>
                
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
        $("#homeSearch").autocomplete({
            source: function(request, response) {
                // remove whitespaces and escape regex chars
                var re = ($.ui.autocomplete.escapeRegex((request.term).replace(" ", "")));

                // if the trimmed result is nothing ignore it
                if (re == "") {
                    return false; 
                }

                // case insensitive match, ignoring whitespaces in list
                // only matches beginning of word
                var matcher = new RegExp("^" + re, "i" );
                var result = $.grep(allDogs, function(item,index){
                    item = item.replace(" ", ""); 
                    return matcher.test(item);
                });
                response(result);
            }
        }); 

        $("#searchOption").click(function() {
            console.log("HERE!"); 
            $(".searchView").show(500); 
            $("#matchView").hide(500); 
            $(this).html("<strong>Search</strong>");
            $("#matchOption").html("Match");

        });
        $("#matchOption").click(function() {
            $(".searchView").hide(500);  
            $("#matchView").show(500); 
            $(this).html("<strong>Match</strong>");
            $("#searchOption").html("Search");
        });
        
        $("#sizeSlider").change(function() {
            var value = $(this).val(); 
            if (value >= 75) {
                $("#smallDog, #smallerDog, #mediumDog").hide();
                $("#largeDog").show(500); 
                $("#preference").html("I prefer <strong>large</strong> dogs");
            }
            else if (value >= 50) {
                $("#smallDog, #smallerDog, #largeDog").hide();
                $("#mediumDog").show(500); 
                $("#preference").html("I prefer <strong>medium-sized</strong> dogs");
            }
            else if (value >= 25) {
                $("#smallDog, #mediumDog, #largeDog").hide();
                $("#smallerDog").show(500); 
                $("#preference").html("I prefer <strong>small</strong> dogs");
            }
            else {
                $("#smallerDog, #mediumDog, #largeDog").hide();
                $("#smallDog").show(500); 
                $("#preference").html("I prefer <strong>tiny</strong> dogs");
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
        
        $(".cube").mouseenter(function() {
            var keywords = $("#keywords").val(); 
            if (keywords == "") {
                $(".active-state").css({'color':'#d9534f', 'font-size':'25px', 'background-color':'white'}); 
                $(".active-state").text('No Keywords');
            }
            else {
                var words = keywords.split(", ")

                if (words.length > 2) {
                    $(".active-state").css({'color':'#5cb85c', 'font-size':'70px', 'background-color':'white'}); 
                    $(".active-state").html('<i class="fa fa-paw" aria-hidden="true"></i>');
                }
                else {
                    $(".active-state").css({'color':'#f0ad4e', 'font-size':'25px', 'background-color':'white'}); 
                    $(".active-state").text("Try adding more keywords")
                }
            }
            
            
        })
            
    </script>
@endpush
