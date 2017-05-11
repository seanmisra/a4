// update drop-down menu

var menu = $('#breedMenu');
var selected = menu.val(); 

menu.change(function() {
    var selected = menu.val(); 
    changeDisplay(selected); 
}); 

function changeDisplay(value) {
    $(".list-group").hide(); 
    var className = '.'+value;
    $(className).show(700); 
}