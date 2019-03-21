$(function(){


  $("#open-search").on("click",function(){
    $(".search-form").fadeToggle();
  $( "#search-bar" ).focus();});

$(".close-button").on("click",function(){
  $(".search-form").fadeOut();
$( "#open-search" ).focus();});


$(window).on("scroll", function() {
var scroll = $(window).scrollTop();
var heightNav = $("header").height();
//alert(heightNav);
var heightWrapper=$(".wrapper").height();

if (scroll >= heightNav)  {

    $(".sticky-bar").addClass("decNav");


}

else{
  $(".sticky-bar").removeClass("decNav");
}
});


});
