function getWidth(){
    if($("body").width() < 992){
        $("#navbarNav").addClass("collapse");
    }
    else{
        $("#navbarNav").removeClass("collapse");
    }
}

getWidth();

$(window).resize(function(){
    getWidth();
});