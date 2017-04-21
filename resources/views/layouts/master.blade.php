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
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        
        
        {{-- Any additional CSS dependencies should go here --}}
        @stack('head')
        
        <style>
            .navbar{
                border: none;
                border-radius: 0;
                background-color: rgba(0,0,0,0);
                transition: all .5s;
            }
            .navbar:hover {
                background-color: rgba(0,0,0,.05);
            }
            .navbar-nav {
                font-size: 17px; 
            }
            .navbar-brand {
                font-size: 20px; 
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><i class="fa fa-paw" aria-hidden="true"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/about">About</a></li>
                    <li><a href="/breeds">Breeds</a></li>
                    <li><a target='_blank' href="https://github.com/seanmisra/a4">GitHub</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        
        {{-- All body content should go here --}}
        @yield('content')
        
        {{-- Any additional JS dependencies should go here --}}
        @stack('body')
    </body>
</html>