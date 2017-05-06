// update drop-down menu on page load 
var menu = $('select[name=option]');
selected = menu.val(); 
changeDisplay(selected); 

// update drop-down menu when changed 
menu.change(function() {
    var selected = menu.val(); 
    changeDisplay(selected); 
});      

function changeDisplay(value) {
    switch(value) {
        case 'Add': {
            console.log("ADD!!");
            
            $('.delete').hide(300); 
            $('.add').show(300); 
            $('.edit').hide(300); 
            break; 
        }
        case 'Edit': {
            console.log("EDIT!!");
            $('.delete').hide(300); 
            $('.add').hide(300); 
            $('.edit').show(300); 
            break; 
        }
        default: {
            console.log("DELETE!!");
            $('.delete').show(300); 
            $('.add').hide(300); 
            $('.edit').hide(300);  
        }    
    }
}