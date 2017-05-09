@extends('layouts.master')

@section('title')
    Dog Data Admin
@stop

@push('head')
    <link rel='stylesheet' href='/css/admin.css'>
@endpush 

@section('content')
    <header>
        <div class='jumbotron'>
            <h1>Dog Database Admin</h1>
            <a href='/'>GO HOME</a><br><br>
            <br>
        </div>
        {{-- Display errors if found --}}
        @if (count($errors) > 0)
            <div id='errorStrip' class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                    <br>
                @endforeach
            </div>
        @endif
        
        {{-- Display success message if available --}}
        @if (Session::get('adminMessage') != null)
            <div class="alert alert-success sessionMessage">
                {!! Session::get('adminMessage') !!}
            </div>
        @endif 
        
        {{-- Display error message if available; these won't be in the error bag --}}
        @if (Session::get('errorMessage') != null)
            <div class="alert alert-danger sessionMessage">
                {!! Session::get('errorMessage') !!}
            </div>
        @endif 
        <br><br>
    </header>

    <main>
        {{-- Drop-down Menu to select action --}}
        <select class='form-control' id='option' name='option'>
            <option value='Add'>ADD Dog</option>
            <option value='Edit' {{ isset($actionType) ? (($actionType == 'edit') ? 'SELECTED' : ''):'' }}>EDIT Dog</option>
            <option value='Delete' {{ isset($actionType) ? (($actionType == 'delete') ? 'SELECTED' : ''):'' ? 'SELECTED' : '' }}>DELETE Dog</option>
        </select>
        <p>*Denotes a <strong>required</strong> field</p><br><br>
        
        
        {{-- Form to add a Dog --}}
        <form class= "add" method="POST" action='{{ action("AdminController@add")}}' enctype= "multipart/form-data"> 
            {{ csrf_field() }}
            <h3>*Name:</h3> 
            <input type='text' required name='name' value='{{ old('name') }}' placeholder='Enter dog name'>
            <h3>AliasOne:</h3>
            <input type='text' name='aliasOne' value='{{ old('aliasOne') }}' placeholder='Enter Alias (Optional)'>
            <h3>AliasTwo:</h3>
            <input type='text' name='aliasTwo' value='{{ old('aliasTwo') }}' placeholder='Enter Alias (Optional)'>
            <h3>AliasThree:</h3>
            <input type='text' name='aliasThree' value='{{ old('aliasThree') }}' placeholder='Enter Alias (Optional)'>        
            <h3>*Group:</h3>
            <select class='form-control' name='group'>                        
                <option value='Herding'>Herding</option>
                <option value='Hound'>Hound</option>
                <option value='Non-Sporting'>Non-Sporting</option>
                <option value='Sporting'>Sporting</option>
                <option value='Working'>Working</option>
                <option value='Toy'>Toy</option>
            </select>

            <h3>*Apartment:</h3>
            <select class='form-control' name='apartment'>                        
                <option value='0'>Not Apartment-Friendly</option>
                <option value='1'> Apartment-Friendly</option>
            </select>                    

            <h3>*Size:</h3>
            <select class='form-control' name='size'>
                <option value='tiny'>Tiny</option>
                <option value='small'>Small</option>
                <option value='medium'>Medium</option>
                <option value='large'>Large</option>
            </select>                                        

            <h3>*Energy:</h3>
            <input type='number' required min='1' max='5' name='energy' value='{{ old('energy') }}' placeholder='Enter number 1-5'>
            <h3>*Social:</h3>
            <input type='number' required min='1' max='5' name='social' value='{{ old('social') }}' placeholder='Enter number 1-5'>
            <h3>*Intelligence:</h3>
            <input type='number' required min='1' max='5' name='intelligence' value='{{ old('intelligence') }}' placeholder='Enter number 1-5'>
            <h3>*Cleanliness:</h3>
            <input type='number' required min='1' max='5' name='cleanliness' value='{{ old('cleanliness') }}' placeholder='Enter number 1-5'>
            <h3>*Fun:</h3>
            <input type='number' required min='1' max='5' name='adventure' value='{{ old('adventure') }}' placeholder='Enter number 1-5'>
            
            <h3>Image: <span>Accepted Size: btw 350x200 and 1200x1000</span></h3>
            <input type='file' name='dogImg' accept="image/*">
            <div class="alert alert-warning">
                <p><strong>**Please review form before submitting**</strong></p>
            </div>
            <input type='submit'>
        </form>
        <br><br><br>
        
        {{-- Form to search for a Dog to Edit --}}
        <form class ='edit' method="GET" action='{{ action("AdminController@search") }}'> 
            <input type='hidden' name='actionType' value='edit'>
            <h3>Search: </h3>
            <input type='text' placeholder='Search dog to edit...' name='adminSearch'>  
        </form>
        
        {{-- Form to search for a Dog to Delete --}}
        <form class ='delete' method="GET" action='{{ action("AdminController@search") }}'> 
            <input type='hidden' name='actionType' value='delete'>
            <h3>Search: </h3>
            <input type='text' placeholder='Search dog to delete...' name='adminSearch'>  
            <br><br><br>
        </form>
        
        {{-- Edit/Delete HTML Forms --}}
        @if(isset($dog))
            <div class='dogSection'>
                <div class='edit'>       
                    <div class="alert alert-warning selected-dog">
                        <h2>&rarr; Selected Dog: <strong>{{ $dog->name }}</strong></h2>
                    </div>
                </div>  
                <div class='delete'>                      
                    <div class="alert alert-danger selected-dog">
                        <h2>&rarr; Selected Dog: <strong>{{ $dog->name }}</strong></h2>
                    </div>
                    <div class="alert alert-danger">
                        <p><strong>**Deleting {{ $dog->name }} will also delete all tag associations and facts**</strong></p>
                    </div>
                </div>  
        
                {{-- Form to edit a Dog --}}
                <form class='edit' method='post' action='{{ action("AdminController@edit") }}'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $dog->id }}'>
                    <h3>AliasOne:</h3>
                    <input type='text' name='aliasOneEdit' placeholder='AliasOne' value='{{ $dog->aliasOne }}'>
                    <h3>AliasTwo:</h3>
                    <input type='text' name='aliasTwoEdit' placeholder='AliasTwo' value='{{ $dog->aliasTwo }}'>
                    <h3>AliasThree:</h3>
                    <input type='text' name='aliasThreeEdit' placeholder='AliasThree' value='{{ $dog->aliasThree }}'>
                    
                    <h3>*Group:</h3>
                    <select class='form-control' name='groupEdit'>
                        <option value='Herding' {{ ($dog->group == 'Herding') ? 'SELECTED' : '' }}> Herding</option>
                        <option value='Hound' {{ ($dog->group == 'Hound') ? 'SELECTED' : '' }}>Hound</option>
                        <option value='Non-Sporting' {{ ($dog->group == 'Non-Sporting') ? 'SELECTED' : '' }}>Non-Sporting</option>
                        <option value='Sporting' {{ ($dog->group == 'Sporting') ? 'SELECTED' : '' }}>Sporting</option>
                        <option value='Working' {{ ($dog->group == 'Working') ? 'SELECTED' : '' }}>Working</option>
                        <option value='Toy' {{ ($dog->group == 'Toy') ? 'SELECTED' : '' }}>Toy</option>
                    </select>
                    
                    <h3>*Apartment:</h3>
                    <select class='form-control' name='apartmentEdit'>                    
                        <option value='0' {{ ($dog->apartment == 0) ? 'SELECTED' : '' }}>Not Apartment-Friendly</option>
                        <option value='1' {{ ($dog->apartment == 1) ? 'SELECTED' : '' }}> Apartment-Friendly</option>
                    </select>                    
                    
                    <h3>*Size:</h3>
                    <select class='form-control' name='sizeEdit'>
                        <option value='tiny' {{ ($dog->size == 'tiny') ? 'SELECTED' : '' }}>Tiny</option>
                        <option value='small' {{ ($dog->size == 'small') ? 'SELECTED' : '' }}> Small</option>
                        <option value='medium' {{ ($dog->size == 'medium') ? 'SELECTED' : '' }}>Medium</option>
                        <option value='large' {{ ($dog->size == 'large') ? 'SELECTED' : '' }}> Large</option>
                    </select>                                        
                    
                    <h3>*Energy:</h3>
                    <input type='number' required min='1' max='5' name='energyEdit' value='{{ $dog->energy }}'>
                    <h3>*Social:</h3>
                    <input type='number' required min='1' max='5' name='socialEdit' value='{{ $dog->social }}'>
                    <h3>*Intelligence:</h3>
                    <input type='number' required min='1' max='5' name='intelligenceEdit' value='{{ $dog->intelligence }}'>
                    <h3>*Cleanliness:</h3>
                    <input type='number' required min='1' max='5' name='cleanlinessEdit' value='{{ $dog->cleanliness }}'>
                    <h3>*Fun:</h3>
                    <input type='number' required min='1' max='5' name='adventureEdit' value='{{ $dog->adventure }}'>
                    <br><br>
                    <div class="alert alert-warning">
                        <p><strong>**Please review changes before submitting**</strong></p>
                    </div>
                    <input type='submit'>
                </form>
                
                {{-- Form to delete a Dog --}}
                <form class='delete' method='post' action='{{ action("AdminController@delete") }}'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $dog->id }}'>
                    <button>Delete {{ $dog->name}}</button>
                </form>
            </div>
            <br><br><br>
        @endif 
    </main>
@stop

@push('body')
    {{-- PHP to JS conversion --}} 
    <script>
        var allDogs = {!! $allDogs !!}; 
    </script>

    {{-- Admin JavaScript --}}
    <script src='/js/admin.js'></script>
@endpush