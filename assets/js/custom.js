
window.onload = function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }


$('#listAll').click(function(){
    console.log('working...');
    var data = "fetchdata=t";
    $.ajax({
        url:'fetchdata.php',
        method:'POST',
        data:data,
        success:function(response){
            $('#renderTable').html(response).addClass('animated bounceInDown');
        },
        error:function(response){}
    });
});

(function ($) {
    "use strict";
    var mainApp = {
        main_fun: function () {
            $('#main-menu').metisMenu();
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            }); 
        }
        }            
    $(document).ready(function () {
        mainApp.main_fun();
    });
}(jQuery));
