@extends('layouts.master')

@section('title')
    Dog Data - All Breeds
@stop

@push('head')
    <style>
        body {
            text-align: center; 
            background: url('images/cover_five.png') no-repeat 50% 50% fixed; 
            background-size: cover; 
        }
        h1 {
            font-size: 80px; 
        }
        #breedMenu {
            height: 100px;
            font-size: 30px;
            width: 50vw; 
            margin: 0 auto;
        }
        .list-group {
            width: 50vw; 
            margin: 0 auto;
            text-align: left; 
            font-size: 22px; 
        }
    </style>
@endpush

@section('content')
    <header>
        <h1>Dog Dictionary</h1>
        <h2>All breeds</h2>
    </header>
        
    <main>
        
        @if(Session::get('message')!=null)
            <div class='alert alert-danger'>
                <div class='message'>{!! Session::get('message') !!}</div>
            </div>
        @endif

        <select class='form-control' id='breedMenu'>
            {{-- below option with several ternaries is for the Close Trip option --}}
            <option value='none'> Select Group </option>
            @foreach($allGroups as $group)
                <option value='{{ $group }}'>{{ $group }}</option>
            @endforeach
        </select>
        
        <br><br>
        @foreach($dogMap as $group => $dogs)
            <ul class="list-group {{ $group }}" style="display:none;">
                @foreach($dogs as $dog)
                <li class="list-group-item"><a href="#">{{ $dog }}</a></li>
                @endforeach
            </ul>
        @endforeach        
    </main>
        
    <footer>
        <p>©2017</p>
    </footer>
@stop

@push('body')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
                
    <script>
        // update drop-down menu on page load 
        var menu = $('#breedMenu');
        var selected = menu.val(); 
        
        menu.change(function() {
            var selected = menu.val(); 
            changeDisplay(selected); 
        }); 

        function changeDisplay(value) {
            $(".list-group").hide(); 
            var className = '.'+value;
            $(className).show(700); 
        }
    </script>
@endpush

    
