@extends('layouts.master')


<!--UI REFERENCES: http://bootsnipp.com/snippets/nPE28, http://callmenick.com/post/css-toggle-switch-examples -->

@push('head')
    <link rel='stylesheet' href='/css/home.css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
@endpush 

@section('title')
    Dog Database
@stop

@push('loader')
    <div class='loader'>
        <p style>...Dog Data is loading...</p>
    </div>
    <div class='visiblePage'>
@endpush

@section('content')
        <header>
            <h1>Dog Database</h1>
        </header>

        <main>
            <h2><span id="searchOption"><strong>Search</strong></span> | <span id="matchOption">Match</span></h2> 
            @if(count($errors) > 0)
                <br>
                <div class='alert alert-danger' style='font-size:20px;'> 
                    @foreach($errors->all() as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif

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
                        <input type = 'range' name='size' min=0 max=100 step=.3 id='sizeSlider' style="width:50vw;" value={{ old('size') }}>
                        <br>
                        <img src='images/tiny_dog.png'  id='smallDog' style='display:none; height: 200px;'> 
                        <img src='images/small_dog.png' id='smallerDog' style='display:none; height: 250px;'> 
                        <img src='images/medium_dog.png' id='mediumDog' style='height:250px;'> 
                        <img src='images/large_dog.png' id='largeDog' style='display:none; height: 250px;'> 
                    </div>

                    <br><br>
                    <h2 class = 'matchView'>KeyWords:</h2>
                    <p class ='matchView'>Pick some traits you like in a dog</p>
                    <p class ='matchView' id="refresh" style="cursor:pointer; font-weight: 600; font-size: 55px;"><i class="fa fa-refresh" aria-hidden="true"></i></p>
                    <br>
                    <div class = 'matchView'>
                        <span class="label label-default" id="tagOne">{{ $allTags[0] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary" id="tagTwo">{{ $allTags[1] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info" id="tagThree">{{ $allTags[2] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success" id="tagFour">{{ $allTags[3] }}</span> 
                        <br><br><br>
                        <span class="label label-default" id="tagFive">{{ $allTags[4] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info" id="tagSix">{{ $allTags[5] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary" id="tagSeven">{{ $allTags[6] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-default" id="tagEight">{{ $allTags[7] }}</span>
                        <br><br><br>
                        <span class="label label-default" id="tagNine">{{ $allTags[8] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary" id="tagTen">{{ $allTags[9] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success" id="tagEleven">{{ $allTags[10] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary" id="tagTwelve">{{ $allTags[11] }}</span>
                        <br><br><br>
                        <span class="label label-default" id="tagThirteen">{{ $allTags[12] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary" id="tagFourteen">{{ $allTags[13] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-default" id="tagFifteen">{{ $allTags[14] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info" id="tagSixteen">{{ $allTags[15] }}</span> 
                        <br><br><br>
                        <input type='text' required name='keywords' id='keywords' placeholder='I want my dog to be...' style="font-size: 22px; font-weight: 500;">
                        <br><br>
                        <div class="keywordButtons" style="font-size:35px;"><i class="fa fa-eraser keywordButton" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-left keywordButton" aria-hidden="true"></i></div>
                    </div>
                    <br><br><br><br>
                    <h2 class = 'matchView'>Location:</h2>
                    <p class = 'matchView'>Where do you live?</p>

                    <div class = 'form-group'>
                        <div class="switch">
                            <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" name= 'lifestyle' type="checkbox" style="display:none;" }}>
                            <label for="cmn-toggle-7" data-on="Apartment&nbsp;&nbsp;&nbsp;&#x1f3e2;" data-off="House&nbsp;&nbsp;&nbsp;&#127968;"></label>                        
                        </div>
                    </div>

                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br>

                    <!-- flip-to-top or flip-to-bottom -->
                    <button type='submit' class="cube flip-to-top" style="border:none; outline: none; padding: 0 0 0 0; width: 50vw; height: 150px;">
                        <div class="default-state" style="font-size: 30px; color: rgb(100, 100, 100); background-color: white; font-weight: bold;">
                            <span>FIND YOUR DOG</span>
                        </div>
                        <div class="active-state" style="font-size: 60px; color: white; background-color: #5cb85c; font-weight: bold;">
                            <span><i class="fa fa-paw" aria-hidden="true"></i></span>
                        </div>
                    </button>

                    <br><br><br><br><br><br>
                    <footer class="footerAlt">
                        <br>
                        <p>Created at Harvard Extension. Spring 2017.</p>
                    </footer>
                </div>
            </form>  
        </main>
    </div>
@stop

@push('body')
    {{-- Converts PHP variables to JS variables --}}
    @include('php-js-conversion-home')

    <script src='/js/home.js'></script>
@endpush
