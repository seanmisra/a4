@extends('layouts.master')

@section('title') 
    Dog Data 
@stop

@push('head')
    <link rel='stylesheet' href='/css/home.css'>
@endpush 

@push('loader')
    <div class='loader'>
        <p>...Dog Data is loading...</p>
    </div>
    <div class='visiblePage'>
@endpush

@section('content')
        {{-- Indented, b/c all of this is still under visiblePage <div> --}}
        <header>
            <h1>Dog Database</h1>
        </header>

        <main>
            {{-- Search | Match --}}
            <h2><span id="searchOption"><strong>Search</strong></span> | <span id="matchOption">Match</span></h2> 
            
            {{-- PHP Validation errors: rarely visible --}}
            @if(count($errors) > 0)
                <br>
                <div class='alert alert-danger'> 
                    @foreach($errors->all() as $error)
                        <strong>{{ $error }}</strong>
                    @endforeach
                </div>
            @endif
            
            {{-- Search Bar Code --}}
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
            </form>

            {{-- Start Match Option Code --}}
            <form id = 'matchView' method='GET' action='{{ action("HomeController@match") }}'>
                {{-- Size Preference --}}
                <h2 class = 'matchView'>Size:</h2>
                <p class = 'matchView' id="preference">I prefer <strong>medium-sized</strong> dogs</p>
                <div class = 'form-group matchView'>
                    <input type = 'range' name='size' min=0 max=100 step=.3 id='sizeSlider' value={{ old('size') or '' }}>
                    <br>
                    <img src='images/tiny_dog.png'  alt='Tiny dog icon' class='dogImg' id='smallDog'> 
                    <img src='images/small_dog.png' alt='Small dog icon' class='dogImg' id='smallerDog'> 
                    <img src='images/medium_dog.png' alt='Medium dog icon' class='dogImg' id='mediumDog'> 
                    <img src='images/large_dog.png' alt='Large dog icon' class='dogImg' id='largeDog'> 
                </div>
                <br><br>
                
                {{-- Keywords --}}
                <h2 class = 'matchView'>KeyWords:</h2>
                <p class ='matchView'>Pick some traits you like in a dog</p>
                <p class ='matchView' id="refresh"><i class="fa fa-refresh" aria-hidden="true"></i></p>
                <br>
                <div class = 'matchView'>
                    <span class="label label-default keywordTag" id="tagOne">{{ $allTags[0] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary keywordTag" id="tagTwo">{{ $allTags[1] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info keywordTag" id="tagThree">{{ $allTags[2] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success keywordTag" id="tagFour">{{ $allTags[3] }}</span> 
                    <br><br><br>
                    <span class="label label-default keywordTag" id="tagFive">{{ $allTags[4] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info keywordTag" id="tagSix">{{ $allTags[5] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary keywordTag" id="tagSeven">{{ $allTags[6] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-default keywordTag" id="tagEight">{{ $allTags[7] }}</span>
                    <br><br><br>
                    <span class="label label-default keywordTag" id="tagNine">{{ $allTags[8] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary keywordTag" id="tagTen">{{ $allTags[9] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-success keywordTag" id="tagEleven">{{ $allTags[10] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary keywordTag" id="tagTwelve">{{ $allTags[11] }}</span>
                    <br><br><br>
                    <span class="label label-default keywordTag" id="tagThirteen">{{ $allTags[12] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary keywordTag" id="tagFourteen">{{ $allTags[13] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-default keywordTag" id="tagFifteen">{{ $allTags[14] }}</span>&nbsp;&nbsp;&nbsp;<span class="label label-info keywordTag" id="tagSixteen">{{ $allTags[15] }}</span> 
                    <br><br><br>
                    <input type='text' name='keywords' id='keywords' placeholder='I want my dog to be...'>
                    <br><br>
                    <div class="keywordButtons"><i class="fa fa-eraser keywordButton" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-left keywordButton" aria-hidden="true"></i></div>
                </div>
                <br><br><br><br>
                
                {{-- Location --}}
                <h2 class = 'matchView'>Location:</h2>
                <p class = 'matchView'>Where do you live?</p>
                <div class = 'form-group'>
                    <div class="switch">
                        <input id="cmn-toggle-7" class="cmn-toggle cmn-toggle-yes-no" name= 'lifestyle' type="checkbox">
                        <label for="cmn-toggle-7" data-on="Apartment&nbsp;&nbsp;&nbsp;&#x1f3e2;" data-off="House&nbsp;&nbsp;&nbsp;&#127968;"></label>
                    </div>
                </div>

                {{-- 3D Submit Button --}}
                <div type='submit' id="submitButton" class="cube flip-to-top">
                    <div class="default-state">
                        <span>FIND YOUR DOG</span>
                    </div>
                    <div class="active-state">
                        <span><i class="fa fa-paw" aria-hidden="true"></i></span>
                    </div>
                </div>

                {{-- Footer --}}
                <footer class="footerAlt">
                    <br>
                    <p>Created at Harvard Extension. Spring 2017.</p>
                </footer>
            </form>  
        </main>
    </div>
@stop

@push('body')
    {{-- Converts PHP variables to JS variables --}}
    @include('php-js-conversion-home')

    <script src='/js/home.js'></script>
@endpush
