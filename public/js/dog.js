console.log("The image path is " + imagePath);
$.ajax({
    url: imagePath,
    type:'HEAD',
    error:
        function(){
            $('.loader').fadeOut(400); 
            $('.visiblePage').fadeTo(1000, 1);
            $('.mainImg').attr('src', '/images/sample_dog.jpg'); 

        },
    success:
        function(){
            $('.loader').fadeOut(400); 
            $('.visiblePage').fadeTo(1000, 1);
            console.log("Image found"); 
            $('.mainImg').attr('src', imagePath); 
        }
});

$('#similarBreedOne').attr('title', similarOne); 
$('#similarBreedTwo').attr('title', similarTwo); 
$('#similarBreedThree').attr('title', similarThree); 
$('#similarBreedFour').attr('title', similarFour); 


$.ajax({
    url: imagePathOne,
    type:'HEAD',
    error:
        function(){
            console.log("Image not found"); 
            $('#similarBreedOne').attr('src', '/images/sample_dog.jpg'); 
        },
    success:
        function(){
            console.log("Image found"); 
            $('#similarBreedOne').attr('src', imagePathOne); 
        }
});  

$.ajax({
    url: imagePathTwo,
    type:'HEAD',
    error:
        function(){
            console.log("Image not found"); 
            $('#similarBreedTwo').attr('src', '/images/sample_dog.jpg'); 

        },
    success:
        function(){
            console.log("Image found"); 
            $('#similarBreedTwo').attr('src', imagePathTwo); 
        }
}); 

$.ajax({
    url: imagePathThree,
    type:'HEAD',
    error:
        function(){
            console.log("Image not found"); 
            $('#similarBreedThree').attr('src', '/images/sample_dog.jpg'); 
        },
    success:
        function(){
            console.log("Image found"); 
            $('#similarBreedThree').attr('src', imagePathThree); 
        }
}); 

$.ajax({
    url: imagePathFour,
    type:'HEAD',
    error:
        function(){
            console.log("Image not found"); 
            $('#similarBreedFour').attr('src', '/images/sample_dog.jpg'); 
        },
    success:
        function(){
            console.log("Image found"); 
            $('#similarBreedFour').attr('src', imagePathFour); 
        }
}); 

//refresh facts
$(".fa-refresh").click(function() {
    var randomElem = Math.floor(Math.random()*facts.length);


    $("#factContent").fadeOut(function() {
        $(this).text(facts[randomElem]['content']).fadeIn('slow');
    }); 
    $("#factSource").fadeOut(function() {
        $(this).text(facts[randomElem]['source']).fadeIn('slow');
    }); 

})

//click exaplantion to make it dissapear
$("#explanation").click(function() {
    $(this).hide(1000);   
})

var hideExplanation = function() {
    $("#explanation").hide(1000);  
}; 

setTimeout(hideExplanation, 10000);
        