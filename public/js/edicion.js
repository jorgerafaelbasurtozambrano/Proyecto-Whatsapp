$(document).ready(function(){
    $(".validar").keydown(function(event){
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
})


jQuery('#alterar').click(function(e) {
    e.preventDefault();
    if (jQuery('#panel').is(":visible") ) {
      jQuery('#panel').stop(true,true).hide("slide", { direction: "left" }, 200);
       
    } else {
      jQuery('#panel').stop(true,true).show("slide", { direction: "left" }, 200);
    }
  });



   if (screen.width < 991){
    $('.right_col').click(function() {
        $('#panel').fadeOut();
       });
       
       $('#panel').click(function(event){
        event.stopPropagation();
       });
}

