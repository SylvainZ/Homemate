
function myFunction() {
    $.ajax({
        url: "Modele/notification.php",
        type: "POST",
        processData:false,
        success: function(data){
            $("#notification-count").remove();
            $("#notification-latest").show();
            $("#notification-latest").html(data);
        },
        error: function(){}
    });
}

$(document).ready(function() {
    //lors du clique sur la page, la liste de notification disparaît
    $('body').click(function(e){
        if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
        }
    });
});