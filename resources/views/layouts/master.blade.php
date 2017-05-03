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
            .navbar-nav {
                font-size: 23px; 
            }
            .navbar-brand {
                font-size: 23px; 
            }
            #colorbox {
                outline:none; 
            }
            #cboxContent {
                background-color: white; 
                color: black; 
                border: 3px solid black;  
            }
            #cboxLoadedContent {
                width: 55vw;
                height: 40vw;
                z-index:9999; 
            }
            .aboutMain>p {
                font-size: 16px !important; 
            }
            #aboutMain {
                padding-left: 5vw; 
                padding-right: 5vw; 
            }
            #cboxOverlay {
                background: url('/images/overlay.png'); 
                background-repeat: repeat;
                position:fixed; width:100%; height:100%;
                top:0; 
                left:0;
            }
            #cboxClose {
                width: 25vw; 
                height: 80px; 
                font-size: 20px; 
                background-color: #428bca; 
                border: none; 
                color: white; 
                text-transform:uppercase;
                transition: all .3s;  
            }
            #cboxClose:hover {
                background-color: white; 
                color: #428bca; 
            }
            #cboxClose:focus, #cboxClose:active {
                outline:none; 
            }
            .hidden { display:none !important; }
            
        </style>
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
        <script>
                   
            // custom load for "about" colorbox; as regular load has issues with close button
            $(document).bind('cbox_open', function(){
                $('#cboxContent').fadeOut(0);
                }).bind('cbox_complete', function(){
                $('#cboxContent').fadeIn(600);
            });
            
            $("#about").colorbox({html: "<h1 style='color:rgb(50,50,50)'>About</h1><div class='icon' style='font-size:50px;'>🐕</div><main id='aboutMain'><br><h2>Premise:</h2><p>Dog Data was created by <a href='https://github.com/seanmisra' target='_blank'>Sean Misra</a> for Dynamic Web Applications (<a href='http://dwa15.com/' target='_blank'>CSCI-E 15</a>) at Harvard Extension, during the Spring 2017 semester. This project constitutes the final assignment of the course and is meant to emphasize <a href='https://github.com/laravel/laravel' target='_blank'>Laravel</a>, MVC, MySQL, form processing, and Eloquent ORM. The site is built with the LAMP stack (Linux, Apache, MySQL, and PHP).</p><br><br><h2>Data:</h2><p>Data has been researched from numerous sites, including <a href='http://dogtime.com/' target='_blank'>dogtime.com</a>, <a href='http://akc.org/' target='_blank'>akc.org</a>, and <a href='http://mentalfloss.com/' target='_blank'>mentalfloss.com</a>. All images have been obtained royalty-free from <a href='https://pixabay.com/' target='_blank'>Pixabay.com</a> and <a href='https://www.wikipedia.org/' target='_blank'>Wikipedia.org</a>. At this point in the project, there is limited data, and research has been given just a 'first-pass'. Please exercise caution when using the content, either for decision-making or research.</p><br><h2>Contribute:</h2><p>Find this project <a href='https://github.com/seanmisra/a4' target='_blank'>@GitHub</a>. All contributions are welcome - content, front-end, algorithms, typos, new breeds, etc.</p><br><h2>Inspiration:</h2><p>My late chocolate lab, Nala.</p><br><br></main>", opacity:0.8, speed: 500, overlay:.2}); 
                
        </script>
        
        {{-- Any additional JS dependencies should go here --}}
        @stack('body')
    </body>
</html>