//button signUp
//https://codepen.io/ayamflow/pen/Dufxr

// Sticky Header
$(window).scroll(function() {

  if ($(window).scrollTop() > 100) {
    $('.stickyNav').addClass('sticky');
  } else {
    $('.stickyNav').removeClass('sticky');
  }
});

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

function loaddata() {
  // var name = document.getElementById("getEmail");
  //
  // if (name) {
  //   $.ajax({
  //     type: 'post',
  //      processData: false,
  //     url: 'update.php',
  //     data: {
  //       name: name,
  //     },
  //     success: function(response) {
  //
  //       $('#paste').html(response);
  //
  //     }
  //   });
  // } else {
  //   $('#paste').html("");
  // }
                    var name=$("#getEmail").val();

                    $.ajax({
                        url:'update.php',
                        method:'POST',
                        data:{
                            name:name,

                        },
                        success:function(response){
                            alert(response);
                        }
                    });
            //     });
            // });
};

setInterval(loaddata, 6000);




// require 'database.php';
