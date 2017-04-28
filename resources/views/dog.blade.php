@extends('layouts.master')

@push('head')
    <style>
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
    </style>
@endpush

@section('title')
    Dog Data -- {{ $dog }}
@stop

@section('content')
    <header>
        <h1>{{ $dog }}</h1>
        <p>{{ $group }} Group<p>
        <br>
        <img class='mainImg' height=300 src='/images/sample_dog.jpg'>
    </header>
        
    <main>
        <br>
        <h2>Summary</h2><br>
        <table class="table" align="center">
            <tbody>
                <tr class="active">
                    <td>Energy</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$energy; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                    <td><i class="fa fa-cog" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Social Skills</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$social; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                    <td><i class="fa fa-commenting" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Intelligence</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$intelligence; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                    <td><i class="fa fa-calculator" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Cleanliness</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$cleanliness; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                    <td><i class="fa fa-leaf" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Adventure</td>
                    <td>Test</td>
                    <td>
                     @for($x = 0; $x<$adventure; $x++)
                            <span class="glyphicon glyphicon-star"></span>
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
            <p style="font-size: 22px; line-height: 40px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor.</p>
            <p><a style="font-size: 50px;"href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></p>
        </div>
            
        <br>
        <h2>Keywords</h2>
            <br>
            <span class="label label-default">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Trick Guru</span> 
            <br><br><br style="height: 1px;">
            <span class="label label-default">Smelly</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Very Hungry</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Loyal</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Big</span>
            <br><br><br>
            <span class="label label-default">Trouble-maker</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Dirty</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Loud</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Stubborn</span>
            <br><br><br><br>
        <h2>Similar Breeds</h2>
        <a href="/breeds/{{ (isset($similarBreeds[0])) ? $similarBreeds[0] : "" }}"><img class = "similarBreed" id="similarBreedOne" height=130 src='/images/sample_dog.jpg'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[1])) ? $similarBreeds[1] : "" }}"><img class = "similarBreed" id="similarBreedTwo" height=130 src='/images/sample_dog.jpg'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[2])) ? $similarBreeds[2] : "" }}"><img class = "similarBreed" id="similarBreedThree" height=130 src='/images/sample_dog.jpg'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[3])) ? $similarBreeds[3] : "" }}"><img class = "similarBreed" id="similarBreedFour" height=130 src='/images/sample_dog.jpg'></a>&nbsp;
    </main>
    <br><br>
    <footer>        
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>


    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
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
                    console.log("Image not found"); 
                },
            success:
                function(){
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
                },
            success:
                function(){
                    console.log("Image found"); 
                    $('#similarBreedFour').attr('src', imagePathFour); 
                }
        }); 
        
    </script>
@stop