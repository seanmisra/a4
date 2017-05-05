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
                
                <form class='edit' method='post' style='display:none;' action='{{ action("AdminController@edit") }}'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $dog->id }}'>
                    <h3>Name</h3> 
                    <input type='text' name='name' value='{{ $dog->name }}'>
                    <h3>AliasOne</h3>
                    <input type='text' name='aliasOne' value='{{ $dog->aliasOne }}'>
                    <h3>AliasTwo</h3>
                    <input type='text' name='aliasTwo' value='{{ $dog->aliasTwo }}'>
                    <h3>AliasThree</h3>
                    <input type='text' name='aliasThree' value='{{ $dog->aliasThree }}'>
                    
                    <h3>Group</h3>
                    <select class='form-control' name='group'>                        
                        <option value='Herding' {{ ($dog->group == 'Herding') ? 'SELECTED' : '' }}> Herding</option>
                        <option value='Hound' {{ ($dog->group == 'Hound') ? 'SELECTED' : '' }}>Hound</option>
                        <option value='Non-Sporting' {{ ($dog->group == 'Non-Sporting') ? 'SELECTED' : '' }}>Non-Sporting</option>
                        <option value='Sporting' {{ ($dog->group == 'Sporting') ? 'SELECTED' : '' }}>Sporting</option>
                        <option value='Working' {{ ($dog->group == 'Working') ? 'SELECTED' : '' }}>Working</option>
                        <option value='Toy' {{ ($dog->group == 'Toy') ? 'SELECTED' : '' }}>Toy</option>
                    </select>
                    
                    <h3>Apartment</h3>
                    <select class='form-control' name='apartment'>                        
                        <option value='0' {{ ($dog->apartment == 0) ? 'SELECTED' : '' }}>Not Apartment-Friendly</option>
                        <option value='1' {{ ($dog->apartment == 1) ? 'SELECTED' : '' }}> Apartment-Friendly</option>
                    </select>                    
                    
                    <h3>Size</h3>
                    <select class='form-control' name='size'>
                        <option value='tiny' {{ ($dog->size == 'tiny') ? 'SELECTED' : '' }}>Tiny</option>
                        <option value='small' {{ ($dog->size == 'small') ? 'SELECTED' : '' }}> Small</option>
                        <option value='medium' {{ ($dog->size == 'medium') ? 'SELECTED' : '' }}>Medium</option>
                        <option value='large' {{ ($dog->size == 'large') ? 'SELECTED' : '' }}> Large</option>
                    </select>                                        
                    
                    
                    <h3>Energy</h3>
                    <input type='text' name='energy' value='{{ $dog->energy }}'>
                    <h3>Social</h3>
                    <input type='text' name='social' value='{{ $dog->social }}'>
                    <h3>Intelligence</h3>
                    <input type='text' name='intelligence' value='{{ $dog->intelligence }}'>
                    <h3>Cleanliness</h3>
                    <input type='text' name='cleanliness' value='{{ $dog->cleanliness }}'>
                    <h3>Fun</h3>
                    <input type='text' name='adventure' value='{{ $dog->adventure }}'>
                    <br>
                    <br>
                    <p>**Please review changes before submitting</p>
                    <input type='submit'>
                </form>
                
                <form class='delete' method='post' style='display:none;' action='{{ action("AdminController@delete") }}'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $dog->id }}'>
                    <button>Delete {{ $dog->name}}</button>
                    <p>Deleting Labrador will also delete all tag associations</p>
                </form>
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