$( document ).ready(function() {

    $("#check-xpath").click(function(){
        $("#evaluations").load("query.php");
        $("#evaluations").show();
    });

});