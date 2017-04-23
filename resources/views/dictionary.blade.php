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
        
        @if(count($errors) > 0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                The dog breeds available are: Labrador, Bulldog, German Shepherd, Golden Retriever, Beagle, Rottweiler, Poodle
            </div>
        @endif

        <select class='form-control' id='breedMenu'>
            {{-- below option with several ternaries is for the Close Trip option --}}
            @foreach($allGroups as $group)
                <option value='Test'>{{ $group }}</option>
            @endforeach
            
        </select>
        
        <br><br>
        <ul class="list-group">
            @foreach($allDogs as $dog)
                <li class="list-group-item">{{ $dog['name'] }}</li>
            @endforeach
        </ul>
        
    </main>
        
    <footer>
        <p>©2017</p>
    </footer>
@stop