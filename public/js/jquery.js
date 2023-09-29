$(function() {
    
        $("#projects_video").hide();
        $("#showImage").hide();

        $("#showVideo").click(function() {
            // Mostrar el elemento "#projectsBtn" al hacer clic en el botón
            $("#projects_video").fadeIn(); // También puedes usar .fadeIn() para una animación
            $("#projects_image").hide();
            $("#showVideo").hide();
            $("#showImage").show();
        });

        $("#showImage").click(function() {
            // Mostrar el elemento "#projectsBtn" al hacer clic en el botón
            $("#projects_image").fadeIn(); // También puedes usar .fadeIn() para una animación
            $("#projects_video").hide();
            $("#showImage").hide();
            $("#showVideo").show();
        });
   
});