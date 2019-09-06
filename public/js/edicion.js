$(document).ready(function(){
    $(".validar").keydown(function(event){
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
})



   $('#alterar').click(function () {
    $('#panel').slideToggle(600, function () {
        $(this).toggleClass('active', $(this).is(':visible'));
    });
});