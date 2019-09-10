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

$( document ).ready(function() {
  $( "#alterar-log" ).click(function() {
    $( ".menu-show" ).css( "display", "none" );
    $( "#panel" ).css( "width", "60px" );
    $( ".right_col" ).css( "margin-left", "60px" );
    //$( ".main_container" ).css( "background", "#F4F6F8" );
    $( ".fa-chevron-down" ).css( "display", "none" );
    $( "#alterar-log-der" ).css( "display", "inline-block" );
    $( "#alterar-log" ).css( "display", "none" );
    $('.menu_section>ul').addClass('paneloculto');
    $('.menu_section>ul').removeClass('panelactivo');
    var claseoculto = $(".menu_section>ul").hasClass("paneloculto");


      if (jQuery('.child_menu').is(":visible") ) {
        $( ".child_menu" ).css( "display", "none" );
      } 

      if (claseoculto == true) {
        $('.left_col').hover(function() {
          $( "#panel" ).css( "width", "216px" );
          $( ".menu-show" ).css( "display", "inline-block" );
          $( ".right_col" ).css( "margin-left", "216px" );
          $( ".fa-chevron-down" ).css( "display", "inline-block" );

        }, function() {
          $( "#panel" ).css( "width", "60px" );
          $( ".menu-show" ).css( "display", "none" );
          $( ".right_col" ).css( "margin-left", "60px" );
          $( ".fa-chevron-down" ).css( "display", "none" );
          $( ".child_menu" ).css( "display", "none" );
        }); 
      }

  });

  $( "#alterar-log-der" ).click(function() {
    $( "#panel" ).css( "width", "216px" );
    $( ".right_col" ).css( "margin-left", "216px" );
    $( ".menu-show" ).css( "display", "inline-block" );
    $( ".fa-chevron-down" ).css( "display", "inline-block" );
    $( "#alterar-log-der" ).css( "display", "none" );
    $( "#alterar-log" ).css( "display", "inline-block" );
    $( "li" ).removeClass( "active" );
    $('.menu_section>ul').removeClass('paneloculto');
    $('.menu_section>ul').addClass('panelactivo');
    var claseactivo = $(".menu_section>ul").hasClass("panelactivo");

    if (claseactivo == true) {
      $('.left_col').hover(function() {
        $( "#panel" ).css( "width", "216px" );
        $( ".right_col" ).css( "margin-left", "216px" );
        $( ".menu-show" ).css( "display", "inline-block" );
        $( ".fa-chevron-down" ).css( "display", "inline-block" );

       
      }, function() {
        $( "#panel" ).css( "width", "216px" );
        $( ".menu-show" ).css( "display", "inline-block" );
        $( ".right_col" ).css( "margin-left", "216px" );
        $( ".fa-chevron-down" ).css( "display", "inline-block" );
      }); 
    }

  });
});




