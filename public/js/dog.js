// main image: update with imagePath if found; if not, use sample_dog.jpg
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
            $('.mainImg').attr('src', imagePath); 
        }
});


// similar-breed image updator
// update imgElement src with imgPath if found
// if not found, use the sample_dog image
function updateImg (imgPath, imgElement) {
    $.ajax({
    url: imgPath,
    type:'HEAD',
    error:
        function(){
            $(imgElement).attr('src', '/images/sample_dog.jpg'); 
        },
    success:
        function(){
            $(imgElement).attr('src', imgPath); 
        }
   });   
}


// update each of the similar breed imgs
updateImg(imagePathOne, '#similarBreedOne'); 
updateImg(imagePathTwo, '#similarBreedTwo'); 
updateImg(imagePathThree, '#similarBreedThree'); 
updateImg(imagePathFour, '#similarBreedFour'); 


// update the similar breed title attributes
$('#similarBreedOne').attr('title', similarOne); 
$('#similarBreedTwo').attr('title', similarTwo); 
$('#similarBreedThree').attr('title', similarThree); 
$('#similarBreedFour').attr('title', similarFour); 


//refresh facts (element only available if more than 2 facts)
$(".fa-refresh").click(function() {
    var randomElem = Math.floor(Math.random()*facts.length);
    var source; 
    
    $("#factContent, #factSource").fadeOut(function() {
        // create <a> tag if source found, if not use default message
        if (facts[randomElem]['source'])
            source = "Source: <a target='_blank' href='" + facts[randomElem]['source'] + "'>" + facts[randomElem]['source'] + "</a>"
        else 
            source = "No Source"; 
        
        $("#factContent").text(facts[randomElem]['content']).fadeIn('slow');
        $("#factSource").html(source).fadeIn('slow');
    }); 
}); 


//click exaplantion to make it dissapear
$("#explanation").click(function() {
    $(this).hide(1000);   
})


// automatically hide explanation after 10 sec.
var hideExplanation = function() {
    $("#explanation").hide(1000);  
}; 
setTimeout(hideExplanation, 10000);
        