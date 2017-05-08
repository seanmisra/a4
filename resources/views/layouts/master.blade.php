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
        
        {{-- Global CSS: Bootstrap, Font Awesome, jQuery UI, master.css --}}
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link href='/css/master.css' rel='stylesheet'> 
    
        
        {{-- Any additional CSS dependencies should go here --}}
        @stack('head')
    </head>

    <body>
        {{-- Code for loader gif if applicable, should go here --}}
        @stack('loader')
    
        {{-- Code for navbar present on each page --}}
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><i class="fa fa-paw" aria-hidden="true"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li id="about"><a href="#">About</a>&nbsp;&nbsp;</li>
                        <li id="breeds"><a href="/breeds">Breeds</a>&nbsp;&nbsp;</li>
                        <li id="github"><a target='_blank' href="https://github.com/seanmisra/a4">GitHub</a></li>
                        @if(Config::get('app.env') == 'local')
                            <li id="adming"><a href="/admin">Admin</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        
        {{-- All other body content should go here --}}
        @yield('content')
        
        {{-- Global JS: jQuery, jQuery UI, Bootstrap, Colorbox, master.js --}}
        <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='/js/colorbox.js'></script>
        <script src='/js/master.js'></script>
        
        {{-- Any additional JS dependencies should go here --}}
        @stack('body')
    </body>
</html>