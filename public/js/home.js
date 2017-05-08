//*************************************HOME_SEARCH*************************************//


// on load: transition out gif, display page w/ background image
path = "images/home.png";
var img = new Image();
img.src = path; 
img.onload = function() {
    $('.loader').fadeOut(400); 
    $('.visiblePage').fadeTo(1000, 1);
    $('body').css({'background': 'url(' + path + ')' + 'no-repeat 50% 50% fixed', 'background-size': 'cover'});   
}


// create jQuery autocomplete validation 
// only matches beginning of word
// ignores white spaces
$("#homeSearch").autocomplete({
    source: function(request, response) {
        var re = ($.ui.autocomplete.escapeRegex((request.term).replace(" ", "")));
        if (re == "") {
            return false; 
        }

        var matcher = new RegExp("^" + re, "i" );
        var result = $.grep(allDogs, function(item,index){
            item = item.replace(" ", ""); 
            return matcher.test(item);
        });
        response(result);
    }
}); 


// toggle between match and search options via click
$("#searchOption").click(function() {
    $(".searchView").show(500); 
    $("#matchView").hide(500); 
    $(this).html("<strong>Search</strong>");
    $("#matchOption").html("Match");

});
$("#matchOption").click(function() {
    $(".searchView").hide(500);  
    $("#matchView").show(500); 
    $(this).html("<strong>Match</strong>");
    $("#searchOption").html("Search");
});


// validation errors on homepage are always related to match option
// thus, if there is an error, automatically switch to match option
if (errors == true) {
    $(".searchView").hide(500);  
    $("#matchView").show(500); 
     $("#matchOption").html("<strong>Match</strong>");
    $("#searchOption").html("Search");
}


//*************************************HOME_MATCH*************************************//


// function to update HTML5 input dog image
function sliderImage() {
    var value = $("#sizeSlider").val(); 
    if (value >= 75) {
        $("#smallDog, #smallerDog, #mediumDog").hide();
        $("#largeDog").show(500); 
        $("#preference").html("I prefer <strong>large</strong> dogs");
    }
    else if (value >= 50) {
        $("#smallDog, #smallerDog, #largeDog").hide();
        $("#mediumDog").show(500); 
        $("#preference").html("I prefer <strong>medium-sized</strong> dogs");
    }
    else if (value >= 25) {
        $("#smallDog, #mediumDog, #largeDog").hide();
        $("#smallerDog").show(500); 
        $("#preference").html("I prefer <strong>small</strong> dogs");
    }
    else {
        $("#smallerDog, #mediumDog, #largeDog").hide();
        $("#smallDog").show(500); 
        $("#preference").html("I prefer <strong>tiny</strong> dogs");
    }
}


// update slider image on page load
sliderImage(); 


// update slider image whenever it is moved
$("#sizeSlider").change(function() {
    sliderImage(); 
}); 


// update keyword text input
$(".label").click(function() {
    var currentText = $("#keywords").val();  
    var newKey = $(this).text(); 
    
    if (!currentText.includes(newKey)) {  
        if (currentText.length > 0)
            $("#keywords").val(currentText + ", " + newKey); 
        else 
            $("#keywords").val(newKey); 
    }
    
    if (currentText.length > 150) {
        $("#keywords").css('font-size', '10px'); 
    }
    else if (currentText.length > 100) {
        $("#keywords").css('font-size', '12px'); 
    }
    else if (currentText.length > 45 ) {
       $("#keywords").css({'font-size': '16px', 'width': '70vw'}); 
    }
    else {
       $("#keywords").css({'font-size': '22px', 'width': '50vw'}); 
    }
});        


// update 3D submit button
$(".cube").mouseenter(function() {
    var keywords = $("#keywords").val(); 
    if (keywords == "") {
        $(".active-state").css({'color':'#d9534f', 'font-size':'30px', 'background-color':'white'}).text('No Keywords');
    }
    else {
        var words = keywords.split(", ")

        if (words.length > 2) {
            $(".active-state").css({'color':'#5cb85c', 'font-size':'70px', 'background-color':'white'}).html('<i class="fa fa-paw" aria-hidden="true"></i>');
        }
        else {
            $(".active-state").css({'color':'#f0ad4e', 'font-size':'25px', 'background-color':'white'}).text("Try adding more keywords"); 
        }
    }
}); 


//submit form on button click
$('#submitButton').click(function() {
    $("#matchView").submit();  
}); 

// refresh keywords
$("#refresh").click(function() {
    var shuffledTags = shuffle(allTags); 
    
    $(".keywordTag").fadeOut(function() {
        $("#tagOne").text(shuffledTags[0]).fadeIn('slow');
        $("#tagTwo").text(shuffledTags[1]).fadeIn('normal');
        $("#tagThree").text(shuffledTags[2]).fadeIn('fast');
        $("#tagFour").text(shuffledTags[3]).fadeIn('slow');
        $("#tagFive").text(shuffledTags[4]).fadeIn('normal');
        $("#tagSix").text(shuffledTags[5]).fadeIn('fast');
        $("#tagSeven").text(shuffledTags[6]).fadeIn('slow');
        $("#tagEight").text(shuffledTags[7]).fadeIn('normal');
        $("#tagNine").text(shuffledTags[8]).fadeIn('fast');
        $("#tagTen").text(shuffledTags[9]).fadeIn('slow');
        $("#tagEleven").text(shuffledTags[10]).fadeIn('normal');
        $("#tagTwelve").text(shuffledTags[11]).fadeIn('fast');
        $("#tagThirteen").text(shuffledTags[12]).fadeIn('slow');
        $("#tagFourteen").text(shuffledTags[13]).fadeIn('normal');
        $("#tagFifteen").text(shuffledTags[14]).fadeIn('fast');
        $("#tagSixteen").text(shuffledTags[15]).fadeIn('slow');
    }); 
});


// shuffle array
// source: https://www.frankmitchell.org/2015/01/fisher-yates/ 
function shuffle (array) {
    var i = 0, j = 0, temp = null; 

    for (i = array.length - 1; i > 0; i -= 1) {
        j = Math.floor(Math.random() * (i + 1)); 
        temp = array[i]; 
        array[i] = array[j]; 
        array[j] = temp;
    }     
    return array
}


// keyword eraser
$(".fa-eraser").click(function() {
    $("#keywords").val("");
}); 


// keyword back-spacer
$(".fa-arrow-left").click(function() {
    var keyArray = $("#keywords").val().split(", "); 

    //remove last value
    keyArray.pop(); 
    
    //create new string
    var newVal= "";
    for (var i = 0; i<keyArray.length; i++)
        newVal += keyArray[i] += ", "; 

    //cut last extraneous comma
    var newVal = newVal.substring(0, newVal.length - 2); 

    $("#keywords").val(newVal); 
}) 


// don't let user type in keyword input
$("#keywords").keydown(function(e){
    e.preventDefault();
});
