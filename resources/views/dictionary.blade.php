@extends('layouts.master')

@section('title')
    Dog Data - All Breeds
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
        
        @if(Session::get('invalidSearchMessage')!=null)
            <div class='alert alert-danger'>
                <div class='message'>{!! Session::get('invalidSearchMessage') !!}</div>
            </div>
        @endif

        <select class='form-control' id='breedMenu'>
            {{-- below option with several ternaries is for the Close Trip option --}}
            <option value='none'> Select Group </option>
            @foreach($allGroups as $group)
                <option value='{{ $group }}'>{{ $group }}</option>
            @endforeach
        </select>
        
        <br><br>
        @foreach($dogMap as $group => $dogs)
            <ul class="list-group {{ $group }}" style="display:none; margin-bottom: 200px;">
                @foreach($dogs as $dog)
                <li class="list-group-item"><a href="/breeds/{{ $dog }}">{{ $dog }}</a></li>
                @endforeach
            </ul>
        @endforeach        
    </main>
        
    <footer>
        <br>
        <p>Created at Harvard Extension. Spring 2017.</p>
    </footer>
@stop

@push('body')
    <script src='/js/dictionary.js'></script>
@endpush

    
