// custom load for "about" colorbox; as regular load has issues with close button
$(document).bind('cbox_open', function(){
    $('#cboxContent').fadeOut(0);
    }).bind('cbox_complete', function(){
    $('#cboxContent').fadeIn(600);
});


// colorbox
$("#about").colorbox({html: "<h1 style='color:rgb(50,50,50)'>About</h1><div class='icon' style='font-size:50px;'>🐕</div><main id='aboutMain'><br><h2>Premise:</h2><p class='aboutDetails'>Dog Data was created by <a href='https://github.com/seanmisra' target='_blank'>Sean Misra</a> for Dynamic Web Applications (<a href='http://dwa15.com/' target='_blank'>CSCI-E 15</a>) at Harvard Extension, during the Spring 2017 semester. This project constitutes the final assignment of the course and is meant to emphasize <a href='https://github.com/laravel/laravel' target='_blank'>Laravel</a>, MVC, MySQL, form processing, and Eloquent ORM. The site is built with the LAMP stack (Linux, Apache, MySQL, and PHP).</p><br><br><h2>Data:</h2><p class='aboutDetails'>Data has been researched from numerous sites, including <a href='http://dogtime.com/' target='_blank'>dogtime.com</a>, <a href='http://akc.org/' target='_blank'>akc.org</a>, and <a href='http://mentalfloss.com/' target='_blank'>mentalfloss.com</a>. All images have been obtained royalty-free from <a href='https://pixabay.com/' target='_blank'>Pixabay.com</a> and <a href='https://www.wikipedia.org/' target='_blank'>Wikipedia.org</a>. At this point in the project, there is limited data, and research has been given just a 'first-pass'. Please exercise caution when using the content, either for decision-making or research.</p><br><h2>Contribute:</h2><p class='aboutDetails'>Find this project <a href='https://github.com/seanmisra/a4' target='_blank'>@GitHub</a>. All contributions are welcome - content, front-end, algorithms, typos, new breeds, etc.</p><br><h2>Inspiration:</h2><p class='aboutDetails'>My late chocolate lab, Nala.</p><br><br></main>", opacity:0.8, speed: 500, overlay:.2}); 