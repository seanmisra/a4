// create jQuery autocomplete validation 
// only matches beginning of word
// ignores white spaces
$("input[name=adminSearch]").autocomplete({
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


// update drop-down view on page load 
var menu = $('select[name=option]');
selected = menu.val(); 
changeDisplay(selected); 


// update drop-down view when changed
menu.change(function() {
    var selected = menu.val(); 
    changeDisplay(selected); 
});      


// toggle tags visibility
$(".showTags").click(function() {
    $('.allTags').toggle('slow'); 
}); 


// add fact input (for adding Dog) - can only add 5 facts at once
var factCount = 1;  
$("#addFact").click(function() {
    if (factCount == 6)
        $('.allFacts').append("<div class='alert alert-danger'>Can only add 5 facts at once!</div>");
    else if (factCount < 6)        
        $('.allFacts').append("<h3>Fact " + factCount + " Content:</h3><textarea name='facts[]' placeholder='Enter fact'></textarea><br>" + "<h3>Fact " + factCount + " Source:</h3><input type='url' placeholder='Enter URL' name='sources[]'><br><br><br>");
    
    factCount++; 
})


// add fact input (for editing Dog)
var factCountEdit = 1;  
$("#addFactEdit").click(function() {
    $('.allFactsEdit').append("<h3>New Fact " + factCountEdit + " Content:</h3><textarea name='facts[]' placeholder='Enter fact'></textarea><br>" + "<h3>New Fact " + factCountEdit + " Source:</h3><input type='url' placeholder='Enter URL' name='sources[]'><br><br><br>");
    factCountEdit++; 
})

            
// update drop-down view
function changeDisplay(value) {
    switch(value) {
        case 'Add': {            
            $('.delete').hide(300); 
            $('.add').show(300); 
            $('.edit').hide(300); 
            break; 
        }
        case 'Edit': {
            $('.delete').hide(300); 
            $('.add').hide(300); 
            $('.edit').show(300); 
            break; 
        }
        default: {
            $('.delete').show(300); 
            $('.add').hide(300); 
            $('.edit').hide(300);  
        }    
    }
}