@extends('layouts.master')

@push('head')
    <link rel='stylesheet' href='/css/dog.css'>
@endpush

@section('title')
    Dog Data -- {{ $dog }}
@stop

@push('loader')
    <div class='loader'>
        <p>...{{ $dog }} is loading...</p>
    </div>
    <div class='visiblePage'>
@endpush

@section('content')
    <header>
        <h1>{{ $dog }}</h1>
        <p>{{ $group }} Group<p>
        <br>
        <img class='mainImg' height=300 src='//:0'>
        @if(Session::get('explanation')!=null)
            <br><br><div class='alert alert-success' id="explanation" style="width: 60vw; margin: 0 auto; font-size: 20px; text-align: center; ">
                <div class='message'><br>{!! Session::get('explanation') !!}<br><br></div>
            </div>
        @endif
    </header>
        
    <main>
        <br>
        <h2>Summary</h2><br>
<!--        SMART STAR COLORS SHOULD BE REPLACED WITH CSS CLASSES LATER-->
        <table class="table" align="center">
            <tbody>
                <tr class="active">
                    <td>Energy</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$energy; $x++)
                            @if($energy == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($energy == 1 || $energy == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif
                        @endfor
                    </td>
                    <td><i class="fa fa-cog" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Social Skills</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$social; $x++)
                            @if($social == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($social == 1 || $social == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif
                        @endfor
                    </td>
                    <td><i class="fa fa-commenting" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Intelligence</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$intelligence; $x++)
                            @if($intelligence == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($intelligence == 1 || $intelligence == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif                      
                        @endfor
                    </td>
                    <td><i class="fa fa-calculator" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Cleanliness</td>
                    <td>Test</td>
                    <td>
                        @for($x = 0; $x<$cleanliness; $x++)
                            @if($cleanliness == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($cleanliness == 1 || $cleanliness == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif   
                        @endfor
                    </td>
                    <td><i class="fa fa-leaf" aria-hidden="true"></i></td>
                </tr>
                <tr class="active">
                    <td>Fun</td>
                    <td>Test</td>
                    <td>
                     @for($x = 0; $x<$adventure; $x++)
                            @if($adventure == 5)
                                <span class="glyphicon glyphicon-star" style="color:#428bca;"></span>
                            @elseif($adventure == 1 || $adventure == 2)
                                <span class="glyphicon glyphicon-star" style="color:#d9534f;"></span>
                            @else
                                <span class="glyphicon glyphicon-star" style="color:rgb(120, 120, 120);"></span>
                            @endif 
                        @endfor
                    </td>
                    <td><i class="fa fa-paw" aria-hidden="true"></i></td>
                </tr>
            </tbody>
        </table>
        <br>
        <div id = "funFact">
            <br>
            <h2>Did you Know?</h2>
            <p id="factContent" style="font-size: 22px; line-height: 40px;">{!! isset($facts[0]) ? $facts[0]['content'] : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet mauris neque. Ut scelerisque lacus vitae congue placerat. Nullam aliquam nisi sit amet fringilla egestas. In sit amet scelerisque tortor." !!}<br><p id="factSource" style="font-size:12px;">{!! isset($facts[0]) ? "Source: ".$facts[0]['source'] : "No Source" !!}</p>

            @if(sizeof($facts) > 1)
                <p><span style="font-size: 50px;"><i class="fa fa-refresh" aria-hidden="true" style='color: #428bca;'></i></p>
            @else
                <br><br>
            @endif
        </div>    
        <br>
        <h2>Keywords</h2>
            <br>
            <span class="label label-default">{{ isset($tags[0])?$tags[0]:"Tag1" }}</span>&nbsp;&nbsp;
            <span class="label label-primary">{{ isset($tags[1])?$tags[1]:"Tag2" }}</span>&nbsp;&nbsp;
            <span class="label label-info">{{ isset($tags[2])?$tags[2]:"Tag3" }}</span>&nbsp;&nbsp;
            <span class="label label-success">{{ isset($tags[3])?$tags[3]:"Tag4" }}</span> 
            <br><br><br>
            <span class="label label-default">{{ isset($tags[4])?$tags[4]:"Tag5" }}</span>&nbsp;&nbsp;
            <span class="label label-info">{{ isset($tags[5])?$tags[5]:"Tag6" }}</span>&nbsp;&nbsp;
            <span class="label label-primary">{{ isset($tags[6])?$tags[6]:"Tag7" }}</span>&nbsp;&nbsp;
            <span class="label label-default">{{ isset($tags[7])?$tags[7]:"Tag8" }}</span>
            <br><br><br>
            <span class="label label-default">{{ isset($tags[8])?$tags[8]:"Tag9" }}</span>&nbsp;&nbsp;
            <span class="label label-primary">{{ isset($tags[9])?$tags[9]:"Tag10" }}</span>&nbsp;&nbsp;
            <span class="label label-success">{{ isset($tags[10])?$tags[10]:"Tag11" }}</span>&nbsp;&nbsp;
            <span class="label label-primary">{{ isset($tags[11])?$tags[11]:"Tag12" }}</span>
            <br><br><br><br><br>

        <h2>Similar Breeds</h2>
        <a href="/breeds/{{ (isset($similarBreeds[0])) ? $similarBreeds[0] : "" }}"><img class = "similarBreed" id="similarBreedOne" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[1])) ? $similarBreeds[1] : "" }}"><img class = "similarBreed" id="similarBreedTwo" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[2])) ? $similarBreeds[2] : "" }}"><img class = "similarBreed" id="similarBreedThree" height=130 src='//:0'></a>&nbsp;
        <a href="/breeds/{{ (isset($similarBreeds[3])) ? $similarBreeds[3] : "" }}"><img class = "similarBreed" id="similarBreedFour" height=130 src='//:0'></a>&nbsp;
    </main>
    <br><br>
    <footer>        
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
</div>
@stop

@push('body')
    {{-- Converts PHP variables to JS variables --}}
    @include('php-js-conversion-dog')

    <script src='/js/dog.js'></script>
@endpush

