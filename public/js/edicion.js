$(document).ready(function(){
    $(".validar").keydown(function(event){
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
})


/*
   $('#alterar').click(function () {
    $('#panel').toggle(500,"swing");
});*/

jQuery('#alterar').click(function(e) {
    e.preventDefault();
    if (jQuery('#panel').is(":visible") ) {
      jQuery('#panel').stop(true,true).hide("slide", { direction: "left" }, 200);
    } else {
      jQuery('#panel').stop(true,true).show("slide", { direction: "left" }, 200);
    }
  });