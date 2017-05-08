@extends('layouts.master')

@section('title')
    Breed Dictionary
@stop

@push('head')
    <link rel='stylesheet' href='/css/dictionary.css'> 
@endpush

@section('content')
    <header>
        <h1>Dog Dictionary</h1>
        <h2>All breeds</h2>
    </header>
        
    <main>
        {{-- User will be directed to this page upon an invalid search --}}
        {{-- Display error message (stored with Session) if needed --}}
        @if(Session::get('invalidSearchMessage')!=null)
            <div class='alert alert-danger'>
                <div class='message'>{!! Session::get('invalidSearchMessage') !!}</div>
            </div>
        @endif

        {{-- Dog Group drop-down menu --}}
        <select class='form-control' id='breedMenu'>
            <option value='none'> Select Group </option>
            @foreach($allGroups as $group)
                <option value='{{ $group }}'>{{ $group }}</option>
            @endforeach
        </select>     
        <br><br>
        
        {{-- Display every breed from group, when group selected --}}
        @foreach($dogMap as $group => $dogs)
            <ul class="list-group {{ $group }}">
                @foreach($dogs as $dog)
                    <li class="list-group-item"><a href="/breeds/{{ str_replace(" ", "%20", $dog) }}">{{ $dog }}</a></li>
                @endforeach
            </ul>
        @endforeach        
    </main>
        
    {{-- Footer --}}
    <footer>
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
@stop

@push('body')
    <script src='/js/dictionary.js'></script>
@endpush
