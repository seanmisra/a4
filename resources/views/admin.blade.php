@extends('layouts.master')

@section('title')
    Dog Data Admin
@stop

@section('content')
    <style>
        span {
            font-weight: bold; 
        }
        span:hover {
            opacity: .8; 
            cursor: pointer; 
        }

    </style>

    <header>
        <h1>Dog Database Admin</h1>
    </header>
        
    <main>
        <form method="GET" action='{{ action("AdminController@search") }}'> 
            <input type='text' placeholder='Search dog' name='adminSearch'>  
        </form>
        <button id="reset">Reset</button>
        
        @if(isset($dog))
            <div class='dogSection'>
                <h2>Current Dog: {{ $dog->name }}</h2>
                <span id='edit'>Edit</span> <span id='delete'>Delete</span>
                
                <div class='edit' style='display:none;'>
                    <h3>Name</h3> 
                    <input type='text' value='{{ $dog->name }}'>
                    <h3>AliasOne</h3>
                    <input type='text' value='{{ $dog->aliasOne }}'>
                    <h3>AliasTwo</h3>
                    <input type='text' value='{{ $dog->aliasTwo }}'>
                    <h3>AliasThree</h3>
                    <input type='text' value='{{ $dog->aliasThree }}'>
                    <h3>Group</h3>
                    <input type='text' value='{{ $dog->group }}'>
                    <h3>Apartment</h3>
                    <input type='text' value='{{ $dog->apartment }}'>
                    <h3>Size</h3>
                    <input type='text' value='{{ $dog->size }}'>
                    <h3>Energy</h3>
                    <input type='text' value='{{ $dog->energy }}'>
                    <h3>Social</h3>
                    <input type='text' value='{{ $dog->social }}'>
                    <h3>Intelligence</h3>
                    <input type='text' value='{{ $dog->intelligence }}'>
                    <h3>Cleanliness</h3>
                    <input type='text' value='{{ $dog->cleanliness }}'>
                    <h3>Fun</h3>
                    <input type='text' value='{{ $dog->adventure }}'>
                </div>
                
                <div class='delete' style='display:none;'>
                    <button>Delete {{ $dog->name}}</button>
                </div>
            </div>
            <br><br><br>
        @endif 
    </main>
@stop

@push('body')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        
    <script> 
        $("#edit").click(function() {
            
            if($(".edit").css('display') == 'none') {
                console.log("I got here!"); 
                $(".edit").show(500); 
            }
            else 
                $(".edit").hide(500); 
        });
        
        $("#reset").click(function() {
            $('.dogSection').hide(500); 
        }); 
        
        $("#delete").click(function() {
            
            if($(".delete").css('display') == 'none') {
                console.log("I got here!"); 
                $(".delete").show(500); 
            }
            else 
                $(".delete").hide(500); 
        });
    </script>
@endpush