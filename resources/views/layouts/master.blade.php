<!doctype html> 
<html lang='en'> 
    <head>
        {{-- Metadata --}}
        <meta charset="utf-8">
        <meta name = 'description' content='Find and search for dogs'>
        <meta name ='author' content='Sean Misra'>
        <meta name='keywords' content='Dogs, Pets, Harvard Extension, Laravel, PHP, DWA15, Sean Misra'>
        <title>
            @yield('title', 'Foobooks')
        </title>
        
        {{-- Global CSS --}}
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
        
        {{-- Any additional CSS dependencies should go here --}}
        @stack('head')
    </head>

    <body>
        {{-- All body content should go here --}}
        @yield('content')
        
        {{-- Any additional JS dependencies should go here --}}
        @stack('body')
    </body>
</html>