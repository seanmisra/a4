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
        
        <link href='/css/master.css' rel='stylesheet'> 
    </head>

    <body>
    {{-- If there is a loder it should go here --}}
    @stack('loader')
    
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
                    <li id="about"><a href="#">About</a>&nbsp;&nbsp;</li>
                    <li id="breeds"><a href="/breeds">Breeds</a>&nbsp;&nbsp;</li>
                    <li id="github"><a target='_blank' href="https://github.com/seanmisra/a4">GitHub</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
        
        {{-- All body content should go here --}}
        @yield('content')
        

        <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
        <script src='/js/colorbox.js'></script>
        <script src='/js/master.js'></script>
        
        {{-- Any additional JS dependencies should go here --}}
        @stack('body')
    </body>
</html>