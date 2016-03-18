$(function() {
    $('#lenguaje').change(function() {
        var lenguaje = $(this).val();
        window.location = '/lenguajes/' + lenguaje;
    });
});


