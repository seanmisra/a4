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
    </style>
@endpush

@section('title')
    Dog Data -- {{ $dog }}
@stop

@section('content')
    <header>
        <h1>{{ $dog }}</h1>
        <p>Bigger Group<p>
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
                        <span class="glyphicon glyphicon-star"></span> 
                        <span class="glyphicon glyphicon-star"></span>
                    </td>
                </tr>
                <tr class="active">
                    <td>Social Skills</td>
                    <td>
                        <span class="glyphicon glyphicon-star"></span> 
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </td>
                </tr>
                <tr class="active">
                    <td>Intelligence</td>
                    <td>
                        <span class="glyphicon glyphicon-star"></span> 
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </td>
                </tr>
                <tr class="active">
                    <td>Cleanliness</td>
                    <td>
                        <span class="glyphicon glyphicon-star"></span> 
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>

                    </td>
                </tr>
                <tr class="active">
                    <td>Adventure-Seeking</td>
                    <td>
                        <span class="glyphicon glyphicon-star"></span> 
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <h2>Did you Know?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor.</p>
        <p><a ref="#">Refresh</a></p>
        
        <br>
        <h2>Keywords</h2>
        <a ref="#">Cute</a> | <a ref="#">Active</a> | <a ref="#">Hairy</a> | <a ref="#">Trick guru</a>
        <br>
        <a ref="#">Smelly</a> | <a ref="#">Very hungry</a> | <a ref="#">Loyal</a> | <a ref="#">Big</a>
        <br>
        <a ref="#">Trouble-maker</a> | <a ref="#">Dirty</a> | <a ref="#">Loud</a> | <a ref="#">Stubborn</a>
    </main>
        
    <footer>
        <br>
        <h3>Similar Breeds</h3>
        <img height=100 src='images/sample_dog.jpg'>
        <img height=100 src='images/sample_dog.jpg'>
        <img height=100 src='images/sample_dog.jpg'>
        <img height=100 src='images/sample_dog.jpg'>
        
        <br>
        <p>©2017</p>
    </footer>
@stop