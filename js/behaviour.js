$(document).ready(function(){
    $(".searchmenu").focus(function(){
        $(".footer").hide(2200);
    });
});


$(document).ready(function(){
    $(".serresults").hover(function(){
        $(this).delay(3000).css("color", "red");
    });
});


