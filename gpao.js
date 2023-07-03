// JavaScript Document
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover({container: 'body', trigger: 'hover', html: true});
    $(':input[type="number"]').keydown(function(e){
        var key = e.charCode || e.keyCode || 0;
        // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
        // home, end, period, and numpad decimal
        return (
            key == 8 || 
            key == 9 ||
            key == 13 ||
            key == 46 ||
            key == 110 ||
            key == 190 ||
            (key >= 35 && key <= 40) ||
            (key >= 48 && key <= 57) ||
            (key >= 96 && key <= 105));
    });
    $('form').submit(function(e){
        $(this).find(':submit').html("<div class=\"spinner-grow text-white\" role=\"status\"><span class=\"sr-only\">Chargement...</span></div>");
        $(this).find(':submit').attr("disabled", true);
    });
})