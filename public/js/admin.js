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