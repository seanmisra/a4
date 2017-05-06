//        var randArray = ["one", "two", "three", "four", "five", "six", "seven"]; 
//        var randNumb = Math.round(Math.random()*6); 
//        var imageNumb = randArray[randNumb];
//        uncomment to randomize images, but want to keep one for now
path = "images/cover_"+"five"+".png";

//chek when main image loads     
var img = new Image();
img.src = path; 

img.onload = function() {
    $('.loader').fadeOut(400); 
    $('.visiblePage').fadeTo(1000, 1);
    $('body').css({'background': 'url(' + path + ')' + 'no-repeat 50% 50% fixed', 'background-size': 'cover'});   
}

//create jQuery autocomplete validation 
$("#homeSearch").autocomplete({
    source: function(request, response) {
        // remove whitespaces and escape regex chars
        var re = ($.ui.autocomplete.escapeRegex((request.term).replace(" ", "")));

        // if the trimmed result is nothing ignore it
        if (re == "") {
            return false; 
        }

        // case insensitive match, ignoring whitespaces in list
        // only matches beginning of word
        var matcher = new RegExp("^" + re, "i" );
        var result = $.grep(allDogs, function(item,index){
            item = item.replace(" ", ""); 
            return matcher.test(item);
        });
        response(result);
    }
}); 

// validation errors on homepage are always related to match option
if (errors == true) {
    $(".searchView").hide(500);  
    $("#matchView").show(500); 
     $("#matchOption").html("<strong>Match</strong>");
    $("#searchOption").html("Search");
}

$("#searchOption").click(function() {
    console.log("HERE!"); 
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


$(document).ready(function() {
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
})

$("#sizeSlider").change(function() {
    var value = $(this).val(); 
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
}); 

// update keyword text input
$(".label").click(function() {
    var currentText = $("#keywords").val();  
    var newKey = $(this).text(); 
    console.log(currentText);
    console.log(newKey); 

    // ignore repeat keywords
    if (currentText.includes(newKey));  
    // add trait
    else if (currentText.length > 0)
        $("#keywords").val(currentText + ", " + newKey); 
    // first trait
    else 
        $("#keywords").val(newKey); 
})        


$(".cube").mouseenter(function() {
    var keywords = $("#keywords").val(); 
    if (keywords == "") {
        $(".active-state").css({'color':'#d9534f', 'font-size':'30px', 'background-color':'white'}); 
        $(".active-state").text('No Keywords');
    }
    else {
        var words = keywords.split(", ")

        if (words.length > 2) {
            $(".active-state").css({'color':'#5cb85c', 'font-size':'70px', 'background-color':'white'}); 
            $(".active-state").html('<i class="fa fa-paw" aria-hidden="true"></i>');
        }
        else {
            $(".active-state").css({'color':'#f0ad4e', 'font-size':'25px', 'background-color':'white'}); 
            $(".active-state").text("Try adding more keywords")
        }
    }


})

// refresh keywords
$("#refresh").click(function() {
    var shuffledTags = shuffle(allTags); 
    $("#tagOne").fadeOut(function() {
        $(this).text(shuffledTags[0]).fadeIn('slow');
    }); 
    $("#tagTwo").fadeOut(function() {
        $(this).text(shuffledTags[1]).fadeIn('normal');
    }); 
    $("#tagThree").fadeOut(function() {
        $(this).text(shuffledTags[2]).fadeIn('fast');
    }); 
    $("#tagFour").fadeOut(function() {
        $(this).text(shuffledTags[3]).fadeIn('slow');
    }); 
    $("#tagFive").fadeOut(function() {
        $(this).text(shuffledTags[4]).fadeIn('normal');
    }); 
    $("#tagSix").fadeOut(function() {
        $(this).text(shuffledTags[5]).fadeIn('fast');
    }); 
    $("#tagSeven").fadeOut(function() {
        $(this).text(shuffledTags[6]).fadeIn('slow');
    }); 
    $("#tagEight").fadeOut(function() {
        $(this).text(shuffledTags[7]).fadeIn('normal');
    }); 
    $("#tagNine").fadeOut(function() {
        $(this).text(shuffledTags[8]).fadeIn('fast');
    }); 
    $("#tagTen").fadeOut(function() {
        $(this).text(shuffledTags[9]).fadeIn('slow');
    }); 
    $("#tagEleven").fadeOut(function() {
        $(this).text(shuffledTags[10]).fadeIn('normal');
    }); 
    $("#tagTwelve").fadeOut(function() {
        $(this).text(shuffledTags[11]).fadeIn('fast');
    }); 
    $("#tagThirteen").fadeOut(function() {
        $(this).text(shuffledTags[12]).fadeIn('slow');
    }); 
    $("#tagFourteen").fadeOut(function() {
        $(this).text(shuffledTags[13]).fadeIn('normal');
    });
    $("#tagFifteen").fadeOut(function() {
        $(this).text(shuffledTags[14]).fadeIn('fast');
    }); 
    $("#tagSixteen").fadeOut(function() {
        $(this).text(shuffledTags[15]).fadeIn('slow');
    });  
});


//shuffle array
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

//keyword eraser
$(".fa-eraser").click(function() {
    $("#keywords").val("");
}); 

//keyword back-spacer
$(".fa-arrow-left").click(function() {
    var keywords = $("#keywords").val(); 
    var keyArray = keywords.split(", "); 

    //remove last value
    keyArray.pop(); 
    var newVal= "";
    for (var i = 0; i<keyArray.length; i++)
        newVal += keyArray[i] += ", "; 

    var newVal = newVal.substring(0, newVal.length - 2); 

    $("#keywords").val(newVal); 
}) 

$("#keywords").keydown(function(e){
    e.preventDefault();
});