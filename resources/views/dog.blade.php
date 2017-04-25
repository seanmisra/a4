@extends('layouts.master')

@push('head')
    <style>
        body {
            text-align: center; 
            background-color: rgba(0, 0, 0, .1); 
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
            font-size: 22px;
        }
        
        .similarBreed:hover {
            opacity: .7; 
            cursor: pointer; 
        }
        footer {
            width:100%;
            height:60px;   
            background: rgba(0,0,0,.05);
        }
        .mainImg {
            border-radius: 10px; 
        }
        p {
            font-size: 18px;
        }
        #funFact {
            width: 800px;
            margin: 0 auto; 
        }
        .label {
            font-size: 20px;
            font-weight: 300;
        }
        .label:hover {
            opacity: .8; 
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
        <img class='mainImg' height=250 src='images/sample_dog.jpg'>
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
        <div id = "funFact">
            <h2>Did you Know?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor.</p>
            <p><a href="#">Refresh</a></p>
        </div>
            
        <br>
        <h2>Keywords</h2>
            <br>
            <span class="label label-default">Cute</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Active</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Hairy</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Trick Guru</span> 
            <br><br>
            <span class="label label-default">Smelly</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">Very Hungry</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Loyal</span>&nbsp;&nbsp;&nbsp;<span class="label label-default">Big</span>
            <br><br>
            <span class="label label-default">Trouble-maker</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Dirty</span>&nbsp;&nbsp;&nbsp;<span class="label label-success">Loud</span>&nbsp;&nbsp;&nbsp;<span class="label label-primary">Stubborn</span>
            <br><br>
        <h2>Similar Breeds</h2>
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>&nbsp;
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>&nbsp;
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>&nbsp;
        <img class = "similarBreed" height=100 src='images/sample_dog.jpg'>&nbsp;
    </main>
    <br><br>
    <footer>        
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
@stop