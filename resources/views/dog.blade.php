@extends('layouts.master')

@push('head')
    <style>
        .visiblePage {
            opacity: 0; 
        }
        
        .loader {
            opacity: 1 !important;     
            width: 100vw;
            height: 100vh;
            background: url('/images/rainbow_load.gif') 50% 50% no-repeat white;
            position: fixed; 
            z-index: 9999;
            font-size: 30px; 
            text-align: center;
        }

        .loader > p {
            font-size: 4vh; 
            font-weight: 500; 
            text-align: center;
            top: 30%; 
            right: 0;
            left: 0;
            margin-right: auto;
            margin-left: auto;
            position: fixed; 
        } 
        
        body {
            text-align: center; 
            background-color: rgba(0, 0, 0, .1); 
        }
        h1 {
            font-size: 50px;
        }
        h2 {
            font-weight: bold; 
        }
        td:nth-child(n) {  
            font-weight: bold;
            height: 70px; 
        }
        td:nth-child(1) {
            font-size: 25px; 
            width: 300px; 
            padding-left: 20px !important; 
            background-color: rgb(180, 180, 180);
            color: rgb(120, 120, 120);
            border-collapse:collapse !important; 
            font-size: 
        }
        td:nth-child(2) {
            font-size: 1px; 
            width: 10px;
            background-color: white !important; 
            opacity: 0; 
            border: 0 !imporant; 
        }
        td:nth-child(3) {
            padding-left: 50px !important;
            word-spacing: 10px; 
            font-size: 27px; 
            color: white;  

        }
        td:nth-child(4) {
            background-color: rgb(180, 180, 180) !important; 
            text-align: center; 
            font-size: 30px; 
        }
        
        td{
            background-color: rgb(200, 200, 200) !important; 
            color: white;     
        }
        
        .table {
            text-align: left; 
            width: 60vw;
        }
        
        table td {
            vertical-align: middle !important;
        }
        
        .similarBreed:hover {
            opacity: .7; 
            cursor: pointer; 
        }
        footer {
            width:100%;
            height:60px;   
            background: rgba(0,0,0,.05);
        }
        p {
            font-size: 18px;
        }
        #funFact {
            width: 800px;
            margin: 0 auto; 
        }
        .label {
            font-size: 25px;
            font-weight: 300;
            border-radius: 0px !important; 
        }
        .label:hover {
            opacity: .8; 
        }
        .fa-refresh:hover {
            opacity: .8; 
            cursor: pointer; 
        }
        #explanation {
            cursor: pointer; 
        }
    </style>
@endpush

@section('title')
    Dog Data -- {{ $dog }}
@stop

@push('loader')
    <div class='loader'>
        <p>...{{ $dog }} is loading...</p>
    </div>
    <div class='visiblePage'>
@endpush

@section('content')
    <header>
        <h1>{{ $dog }}</h1>
        <p>{{ $group }} Group<p>
        <br>
        <img class='mainImg' height=300 src='//:0'>
        @if(Session::get('explanation')!=null)
            <br><br><div class='alert alert-success' id="explanation" style="width: 60vw; margin: 0 auto; font-size: 20px; text-align: center; ">
                <div class='message'><br>{!! Session::get('explanation') !!}<br><br></div>
            </div>
        @endif
    </header>
        
    <main>
        <br>
        <h2>Summary</h2><br>
<!--        SMART STAR COLORS SHOULD BE REPLACED WITH CSS CLASSES LATER-->
        <table class="table" align="center">
            <tbody>
                <tr class="active">
                    <td>Energy</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$energy; $x++)
                            @if($energy == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($energy == 1 || $energy == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif
                        @endfor
                    </td>
                    <td><i class="fa fa-cog" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Social Skills</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$social; $x++)
                            @if($social == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($social == 1 || $social == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif
                        @endfor
                    </td>
                    <td><i class="fa fa-commenting" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Intelligence</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$intelligence; $x++)
                            @if($intelligence == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($intelligence == 1 || $intelligence == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif                      
                        @endfor
                    </td>
                    <td><i class="fa fa-calculator" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Cleanliness</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$cleanliness; $x++)
                            @if($cleanliness == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($cleanliness == 1 || $cleanliness == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif   
                        @endfor
                    </td>
                    <td><i class="fa fa-leaf" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Fun</td>
                    <td>Test</td>
                    <td>
                     @for($x = 0; $x<$adventure; $x++)
                            @if($adventure == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($adventure == 1 || $adventure == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif 
                        @endfor
                    </td>
                    <td><i class="fa fa-paw" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div id = "funFact">
            <br>
            <h2>Did you Know?</h2>
            <p id="factContent" style="font-size: 22px; line-height: 40px;">{!! isset($facts[0]) ? $facts[0]['content'] : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor." !!}<br><p id="factSource" style="font-size:12px;">{!! isset($facts[0]) ? "Source: ".$facts[0]['source'] : "No Source" !!}</p>

            @if(sizeof($facts) > 1)
                <p><span style="font-size: 50px;"><i class="fa fa-refresh" aria-hidden="true" style='color: #428bca;'></i></p>
            @else
                <br><br>
            @endif
        </div>    
        <br>
        <h2>Keywords</h2>
            <br>
            <span class="label label-default">{{ $tags[0] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">{{ $tags[1] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">{{ $tags[2] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">{{ $tags[3] }}</span> 
            <br><br><br style="height: 1px;">
            <span class="label label-default">{{ $tags[4] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">{{ $tags[5] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">{{ $tags[6] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">{{ $tags[7] }}</span>
            <br><br><br>
            <span class="label label-default">{{ $tags[8] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">{{ $tags[9] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">{{ $tags[10] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">{{ $tags[11] }}</span>
            <br><br><br><br><br>
        <h2>Similar Breeds</h2>
        <a href="/breeds/{{ (isset($similarBreeds[0])) ? $similarBreeds[0] : "" }}"><img class = "similarBreed" id="similarBreedOne" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[1])) ? $similarBreeds[1] : "" }}"><img class = "similarBreed" id="similarBreedTwo" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[2])) ? $similarBreeds[2] : "" }}"><img class = "similarBreed" id="similarBreedThree" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[3])) ? $similarBreeds[3] : "" }}"><img class = "similarBreed" id="similarBreedFour" height=130 src='//:0'></a>&nbsp;
    </main>
    <br><br>
    <footer>        
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
</div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script>
        var imagePath = '{{ $imagePath }}'; 
        console.log("The image path is " + imagePath);
        $.ajax({
            url: imagePath,
            type:'HEAD',
            error:
                function(){
                    $('.loader').fadeOut(400); 
                    $('.visiblePage').fadeTo(1000, 1);
                    $('.mainImg').attr('src', '/images/sample_dog.jpg'); 

                },
            success:
                function(){
                    $('.loader').fadeOut(400); 
                    $('.visiblePage').fadeTo(1000, 1);
                    console.log("Image found"); 
                    $('.mainImg').attr('src', imagePath); 
                }
        });
        
        var imagePathOne = '{{ (isset($similarBreedImgs[0])) ? $similarBreedImgs[0] : "" }}'; 
        var imagePathTwo = '{{ (isset($similarBreedImgs[1])) ? $similarBreedImgs[1] : "" }}'; 
        var imagePathThree = '{{ (isset($similarBreedImgs[2])) ? $similarBreedImgs[2] : "" }}'; 
        var imagePathFour = '{{ (isset($similarBreedImgs[3])) ? $similarBreedImgs[3] : "" }}'; 
        
        var similarOne = '{{ (isset($similarBreeds[0])) ? $similarBreeds[0] : "" }}'; 
        var similarTwo = '{{ (isset($similarBreeds[1])) ? $similarBreeds[1] : "" }}'; 
        var similarThree = '{{ (isset($similarBreeds[2])) ? $similarBreeds[2] : "" }}'; 
        var similarFour = '{{ (isset($similarBreeds[3])) ? $similarBreeds[3] : "" }}'; 

        $('#similarBreedOne').attr('title', similarOne); 
        $('#similarBreedTwo').attr('title', similarTwo); 
        $('#similarBreedThree').attr('title', similarThree); 
        $('#similarBreedFour').attr('title', similarFour); 

        
        $.ajax({
            url: imagePathOne,
            type:'HEAD',
            error:
                function(){
                    console.log("Image not found"); 
                    $('#similarBreedOne').attr('src', '/images/sample_dog.jpg'); 
                },
            success:
                function(){
                    console.log("Image found"); 
                    $('#similarBreedOne').attr('src', imagePathOne); 
                }
        });  
        
        $.ajax({
            url: imagePathTwo,
            type:'HEAD',
            error:
                function(){
                    console.log("Image not found"); 
                    $('#similarBreedTwo').attr('src', '/images/sample_dog.jpg'); 

                },
            success:
                function(){
                    console.log("Image found"); 
                    $('#similarBreedTwo').attr('src', imagePathTwo); 
                }
        }); 
        
        $.ajax({
            url: imagePathThree,
            type:'HEAD',
            error:
                function(){
                    console.log("Image not found"); 
                    $('#similarBreedThree').attr('src', '/images/sample_dog.jpg'); 
                },
            success:
                function(){
                    console.log("Image found"); 
                    $('#similarBreedThree').attr('src', imagePathThree); 
                }
        }); 
        
        $.ajax({
            url: imagePathFour,
            type:'HEAD',
            error:
                function(){
                    console.log("Image not found"); 
                    $('#similarBreedFour').attr('src', '/images/sample_dog.jpg'); 
                },
            success:
                function(){
                    console.log("Image found"); 
                    $('#similarBreedFour').attr('src', imagePathFour); 
                }
        }); 
        
        //refresh facts
        var facts = {!! $factsJSON !!}; 
        $(".fa-refresh").click(function() {
            var randomElem = Math.floor(Math.random()*facts.length);
            
            
            $("#factContent").fadeOut(function() {
                $(this).text(facts[randomElem]['content']).fadeIn('slow');
            }); 
            $("#factSource").fadeOut(function() {
                $(this).text(facts[randomElem]['source']).fadeIn('slow');
            }); 
            
        })
        
        //click exaplantion to make it dissapear
        $("#explanation").click(function() {
            $(this).hide(1000);   
        })
        
        var hideExplanation = function() {
            $("#explanation").hide(1000);  
        }; 
        
        setTimeout(hideExplanation, 10000);
        
    </script>
@stop