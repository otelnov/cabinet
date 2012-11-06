// JavaScript Document
$(function() {

    var $el, topPos, newHeight,
        $mainNav = $("#nav-slid");
    
    $mainNav.append("<li id='move-line'></li>");
    var $magicLine = $("#move-line");
    
    $magicLine
        .height($(".current_page_item").height())
        .css("top", $(".current_page_item a").position().top)
        .data("origTop", $magicLine.position().top)
        .data("origHeight", $magicLine.height());
        
    $("#example-one li a").click(function() {
        $el = $(this);
        topPos = $el.position().top;
        newHeight = $el.parent().height();
        $magicLine.stop().animate({
            top: topPos,
            height: newHeight
        });
    }, function() {
        $magicLine.stop().animate({
            top: $magicLine.data("origTop"),
            height: $magicLine.data("origHeight")
        });    
    });
});