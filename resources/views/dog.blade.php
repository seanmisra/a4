@extends('layouts.master')

@push('head')
    <style>
        body {
            text-align: center; 
        }
        h1 {
            font-size: 50px;
        }
        td:nth-child(n) {  
            font-weight: bold; 
        }
        .table {
            text-align: left; 
            width: 800px;
            font-size: 16px;
        }
        
        .similarBreed:hover {
            opacity: .7; 
        }
        footer {
            width:100%;
            height:60px;   
            background: rgba(0,0,0,.05);
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
        <img height=250 src='images/sample_dog.jpg'>
    </header>
        
    <main>
        <br>
        <h2>Summary</h2>
        <table class="table" align="center">
            <tbody>
                <tr class="active">
                    <td>Energy</td>
                    <td>
                        @for($x = 0; $x<$energy; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                </tr>
                <tr class="active">
                    <td>Social Skills</td>
                    <td>
                        @for($x = 0; $x<$social; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                </tr>
                <tr class="active">
                    <td>Intelligence</td>
                    <td>
                        @for($x = 0; $x<$intelligence; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                </tr>
                <tr class="active">
                    <td>Cleanliness</td>
                    <td>
                        @for($x = 0; $x<$cleanliness; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                </tr>
                <tr class="active">
                    <td>Adventure-Seeking</td>
                    <td>
                     @for($x = 0; $x<$adventure; $x++)
                            <span class="glyphicon glyphicon-star"></span>
                        @endfor
                    </td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <h2>Did you Know?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor.</p>
        <p><a href="#">Refresh</a></p>
        
        <br>
        <h2>Keywords</h2>
        <a href="#">Cute</a> | <a href="#">Active</a> | <a href="#">Hairy</a> | <a href="#">Trick guru</a>
        <br>
        <a href="#">Smelly</a> | <a href="#">Very hungry</a> | <a href="#">Loyal</a> | <a href="#">Big</a>
        <br>
        <a href="#">Trouble-maker</a> | <a href="#">Dirty</a> | <a href="#">Loud</a> | <a href="#">Stubborn</a>
        <br>
        <h3>Similar Breeds</h3>
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>
    </main>
    <br><br>
    <footer>        
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
@stop