
// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.stickyNav').addClass('sticky');
    } else {
        $('.stickyNav').removeClass('sticky');
    }
});
// If user clicks anywhere outside of the modal, Modal will close
//
// var modal = document.getElementById('modal-wrapper');
// window.onclick = function(event) {
//     if (event.target != modal) {
//         modal.style.display="none" ;
//     }
// };
//Pop UP Login
function popUp(){
	document.getElementById('modal-wrapper').style.display='block';
  if (screen.width <= 800) {
  document.getElementById("login").href="login.html";
  }
};
function popUpClose(){
	document.getElementById('modal-wrapper').style.display='none';
};



$('.main_h li a').click(function() {
    if ($('.stickyNav').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.stickyNav').removeClass('open-nav');
    }
});

$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});
