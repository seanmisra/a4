@extends('layouts.master')

@section('title')
    Dog Data Admin
@stop

@section('content')
    <style>
        .navbar {
            background-color: beige; 
        }
        span {
            font-weight: bold; 
        }
        span:hover {
            opacity: .8; 
            cursor: pointer; 
        }
        input, select, button, .form-control {
            height: 100px; 
            width: 50vw; 
            font-size: 25px; 
            padding-left: 10px; 
        }
        main {
            margin-left: 25vw; 
        }
        header {
            text-align: center; 
        }
        #option, .adminSearch {
            height: 125px !important; 
            font-size: 35px !important; 
            font-weight: bold; 
        } 
        .adminSearch {
            font-size: 20px !important; 
        }
        
        p {
            font-size: 20px; 
        }
        button, input[type=submit] {
            text-transform: uppercase !important;
            font-weight: bold; 
            font-size: 30px; 
        }
    </style>
    
    
    <header>
        <div class='jumbotron'>
            <h1>Dog Database Admin</h1>
            <p>~Bare-Bones: Add/Edit/Delete~</p>
            <i class="fa fa-paw" aria-hidden="true" style="font-size: 50px;"></i>
            <br>
        </div>
        
        @if (count($errors) > 0)
            <div class="alert alert-danger" style="font-size: 30px;">
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong>
                <br>
                @endforeach
            </div>
        @endif
        @if (Session::get('adminMessage') != null)
            <div class="alert alert-success" style="font-size: 30px;">
                {{ Session::get('adminMessage') }}
            </div>
        @endif 
        <br><br>
    </header>

    <main>
        <select class='form-control' id='option' name='option' style="height: 100px; font-size: 25px; width: 50vw;">
            <option value='Add'>Add</option>
            <option value='Edit' {{ isset($actionType) ? (($actionType == 'edit') ? 'SELECTED' : ''):'' }}>Edit</option>
            <option value='Delete' {{ isset($actionType) ? (($actionType == 'delete') ? 'SELECTED' : ''):'' ? 'SELECTED' : '' }}>Delete</option>
        </select>
        <p>*Denotes a <strong>required</strong> field</p><br><br>
        
        
        <form class= "add" method="POST" style='display:none;' action='{{ action("AdminController@add")}}'> 
            {{ csrf_field() }}
            <h3>*Name:</h3> 
            <input type='text' required name='name' placeholder='Enter dog name'>
            <h3>AliasOne:</h3>
            <input type='text' name='aliasOne' placeholder='Enter Alias (Optional)'>
            <h3>AliasTwo:</h3>
            <input type='text' name='aliasTwo' placeholder='Enter Alias (Optional)'>
            <h3>AliasThree:</h3>
            <input type='text' name='aliasThree' placeholder='Enter Alias (Optional)'>        
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
            <input type='number' required min='1' max='5' name='energy' placeholder='Enter number 1-5'>
            <h3>*Social:</h3>
            <input type='number' required min='1' max='5' name='social' placeholder='Enter number 1-5'>
            <h3>*Intelligence:</h3>
            <input type='number' required min='1' max='5' name='intelligence' placeholder='Enter number 1-5'>
            <h3>*Cleanliness:</h3>
            <input type='number' required min='1' max='5' name='cleanliness' placeholder='Enter number 1-5'>
            <h3>*Fun:</h3>
            <input type='number' required min='1' max='5' name='adventure' placeholder='Enter number 1-5'>
            <br>
            <br>
            <div class="alert alert-warning" style='width:50vw; border: 1px solid lightgray;'>
                <p><strong>**Please review form before submitting**</strong></p>
            </div>
            <input type='submit'>
        </form>
        
        <br><br><br>
        
        
        <form class ='edit' method="GET" action='{{ action("AdminController@search") }}'> 
            <input type='hidden' name='actionType' value='edit'>
            <h3>Search: </h3>
            <input type='text' placeholder='Search dog to edit...' class='adminSearch' name='adminSearch' style="width:50vw; height: 100px; margin-bottom: 200px; margin-top:-70px; border: solid 1px gray;">  
        </form>
        
        <form class ='delete' method="GET" action='{{ action("AdminController@search") }}'> 
            <input type='hidden' name='actionType' value='delete'>
            <h3>Search: </h3>
            <input type='text' placeholder='Search dog to delete...' class='adminSearch' name='adminSearch' style="width:50vw; height: 100px; margin-bottom: 200px; margin-top:-70px; border: solid 1px gray;">  
            <br><br><br>
        </form>
        
        @if(isset($dog))
            <div class='dogSection' style="margin-top: -160px;">
                <div class='edit'>       
                    <div class="alert alert-warning" style='width:50vw; height: 120px; border: 1px solid lightgray;'>
                        <h2 style='font-size:40px;'>&rarr; Selected Dog: <strong>{{ $dog->name }}</strong></h2>
                    </div>
                </div>  
                <div class='delete'>                      
                    <div class="alert alert-danger" style='width:50vw; height: 120px; border: 1px solid lightgray;'>
                        <h2 style='font-size:40px;'>&rarr; Selected Dog: <strong>{{ $dog->name }}</strong></h2>
                    </div>
                    
                    <div class="alert alert-danger" style='width:50vw; border: 1px solid lightgray;'>
                        <p><strong>**Deleting {{ $dog->name }} will also delete all tag associations and facts**</strong></p>
                    </div>
                    
                </div>  
        
                <form class='edit' method='post' style='display:none;' action='{{ action("AdminController@edit") }}'>
                    {{ csrf_field() }}
                    <input type='hidden' name='id' value='{{ $dog->id }}'>
                    <h3>*Name:</h3> 
                    <input type='text' required name='name' value='{{ $dog->name }}'>
                    <h3>AliasOne:</h3>
                    <input type='text' name='aliasOne' placeholder='AliasOne' value='{{ $dog->aliasOne }}'>
                    <h3>AliasTwo:</h3>
                    <input type='text' name='aliasTwo' placeholder='AliasTwo' value='{{ $dog->aliasTwo }}'>
                    <h3>AliasThree:</h3>
                    <input type='text' name='aliasThree' placeholder='AliasThree' value='{{ $dog->aliasThree }}'>
                    
                    <h3>*Group:</h3>
                    <select class='form-control' name='group'>
                        <option value='Herding' {{ ($dog->group == 'Herding') ? 'SELECTED' : '' }}> Herding</option>
                        <option value='Hound' {{ ($dog->group == 'Hound') ? 'SELECTED' : '' }}>Hound</option>
                        <option value='Non-Sporting' {{ ($dog->group == 'Non-Sporting') ? 'SELECTED' : '' }}>Non-Sporting</option>
                        <option value='Sporting' {{ ($dog->group == 'Sporting') ? 'SELECTED' : '' }}>Sporting</option>
                        <option value='Working' {{ ($dog->group == 'Working') ? 'SELECTED' : '' }}>Working</option>
                        <option value='Toy' {{ ($dog->group == 'Toy') ? 'SELECTED' : '' }}>Toy</option>
                    </select>
                    
                    <h3>*Apartment:</h3>
                    <select class='form-control' name='apartment'>                        
                        <option value='0' {{ ($dog->apartment == 0) ? 'SELECTED' : '' }}>Not Apartment-Friendly</option>
                        <option value='1' {{ ($dog->apartment == 1) ? 'SELECTED' : '' }}> Apartment-Friendly</option>
                    </select>                    
                    
                    <h3>*Size:</h3>
                    <select class='form-control' name='size'>
                        <option value='tiny' {{ ($dog->size == 'tiny') ? 'SELECTED' : '' }}>Tiny</option>
                        <option value='small' {{ ($dog->size == 'small') ? 'SELECTED' : '' }}> Small</option>
                        <option value='medium' {{ ($dog->size == 'medium') ? 'SELECTED' : '' }}>Medium</option>
                        <option value='large' {{ ($dog->size == 'large') ? 'SELECTED' : '' }}> Large</option>
                    </select>                                        
                    
                    
                    <h3>*Energy:</h3>
                    <input type='number' required min='1' max='5' name='energy' value='{{ $dog->energy }}'>
                    <h3>*Social:</h3>
                    <input type='number' required min='1' max='5' name='social' value='{{ $dog->social }}'>
                    <h3>*Intelligence:</h3>
                    <input type='number' required min='1' max='5' name='intelligence' value='{{ $dog->intelligence }}'>
                    <h3>*Cleanliness:</h3>
                    <input type='number' required min='1' max='5' name='cleanliness' value='{{ $dog->cleanliness }}'>
                    <h3>*Fun:</h3>
                    <input type='number' required min='1' max='5' name='adventure' value='{{ $dog->adventure }}'>
                    <br>
                    <br>
                    <div class="alert alert-warning" style='width:50vw; border: 1px solid lightgray;'>
                        <p><strong>**Please review changes before submitting**</strong></p>
                    </div>
                    <input type='submit'>
                </form>
                
                <form class='delete' method='post' style='display:none;' action='{{ action("AdminController@delete") }}'>
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
    <script>
        var allDogs = {!! $allDogs !!}; 
        
        // create jQuery autocomplete validation 
        // only matches beginning of word
        // ignores white spaces
        $(".adminSearch").autocomplete({
            source: function(request, response) {
                var re = ($.ui.autocomplete.escapeRegex((request.term).replace(" ", "")));
                if (re == "") {
                    return false; 
                }

                var matcher = new RegExp("^" + re, "i" );
                var result = $.grep(allDogs, function(item,index){
                    item = item.replace(" ", ""); 
                    return matcher.test(item);
                });
                response(result);
            }
        }); 
    </script>

    <script src='/js/admin.js'></script>
@endpush