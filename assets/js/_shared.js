var showMessage = function(message, type){
    $("#messages-container").html('<div class="text-center alert alert-'+type+' alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>' + message +'</div>');
};
var getFormattedDate = function (date) {
    var year = date.getFullYear();
    var month = (1 + date.getMonth()).toString();
    month = month.length > 1 ? month : '0' + month;
    var day = date.getDate().toString();
    day = day.length > 1 ? day : '0' + day;
    return day + '/' + month + '/' + year;
};

var logout = function(){
    $.get(base_url+'account/logout', function(){
        document.location.href=base_url;
    });
};

var clearForms = function(){
    $("input[type=text], textarea").val("");
    $("select").prop('selectedIndex', 0);
};
