$(function() {
    
        $("#projects_video").hide();
        $("#showImage").hide();

        $("#showVideo").click(function() {
            
            $("#projects_video").fadeIn(); 
            $("#projects_image").hide();
            $("#showVideo").hide();
            $("#showImage").show();
        });

        $("#showImage").click(function() {
            
            $("#projects_image").fadeIn(); 
            $("#projects_video").hide();
            $("#showImage").hide();
            $("#showVideo").show();
        });
   
});