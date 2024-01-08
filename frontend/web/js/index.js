$(document).ready(function(t){function n(n){var e=t(window).scrollTop()+t(window).height();return t(n).offset().top+t(n).height()<=e}function e()       {t(".counter").each(function(){var e=t(this),o=e.attr("data-count");ended=e.attr("ended"),"true"!=ended&&n(e)&&(t({countNum:e.text()}).animate({countNum:o},  {duration:2500,easing:"swing",step:function(){e.text(Math.floor(this.countNum))},complete:function()                      {e.text(this.countNum)}}),e.attr("ended","true"))})}n(".counter")&&e(),t(document).scroll(function(){n(".counter")&&e()})});


$(function () {
  $(window).scroll(function () {
    var $height = $(window).scrollTop();
    if ($height > 200) {
      $(".navigation").addClass("active");
    } else {
      $(".navigation").removeClass("active");
    }
  });
});

//menu
$(".menu-h").click(function () {
  $(".menu-l").addClass("active");
  $(".bg-p").addClass("active");
});
$(".sucs").click(function () {
  $(".menu-l").removeClass("active");
  $(".modal-last").addClass("active");
  $(".bg-p").removeClass("active");

  $(".modal-first").removeClass("active");
  $(".bg-m").addClass("active");
});
$(".konsul").click(function () {
  $(".menu-l").removeClass("active");
  $(".modal-first").addClass("active");
  $(".bg-m").addClass("active");
  $(".bg-p").removeClass("active");

});
$(".bg-p").click(function () {
  $(".menu-l").removeClass("active");
  $(this).removeClass("active");
});
$(".back").click(function () {
  $(".modal-last").removeClass("active");
  $(".bg-m").removeClass("active");
  $(".bg-p").removeClass("active");
  $(".menu-l").removeClass("active");
  $(".modal-web").removeClass("active");
});
$(".menu-l .menu-bar li a").click(function () {
  $(".menu-l").removeClass("active");
  $(".bg-p").removeClass("active");
});

// .tab

$("#tabs-nav li:first-child").addClass("active");
$(".tab-content").hide();
$(".tab-content:first").fadeIn( "slow", function() {
});;

// Click function
$("#tabs-nav li").click(function () {
  $("#tabs-nav li").removeClass("active");
  $(this).addClass("active");
  $(".tab-content").hide();

  var activeTab = $(this).find("a").attr("href");
  $(activeTab).fadeIn();
  return false;
});



//playyy


//audio play



var btnT = $('#to-top');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btnT.addClass('show');
  } else {
    btnT.removeClass('show');
  }
});

btnT.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 1000);
});





//scrollreveal

window.sr = ScrollReveal({ reset: false });
sr.reveal('.img-bg-r', { origin: 'right', opacity: 0, distance: '200px', duration: 2000 });
sr.reveal('.logos', { origin: 'top', opacity: 0, delay: 1500, distance: '50px', duration: 1000 });
sr.reveal('.m1', { origin: 'right', opacity: 0, delay: 3000, distance: '100px', duration: 1500 });
sr.reveal('.m2', { origin: 'right', opacity: 0, delay: 3200, distance: '100px', duration: 1500 });
sr.reveal('.m3', { origin: 'right', opacity: 0, delay: 3400, distance: '100px', duration: 1500 });
sr.reveal('.m4', { origin: 'right', opacity: 0, delay: 3600, distance: '100px', duration: 1500 });

sr.reveal('.m5', { origin: 'bottom', opacity: 0, delay: 2000, distance: '50px', duration: 1500 });
sr.reveal('.m6', { origin: 'bottom', opacity: 0, delay: 2200, distance: '50px', duration: 1500 });
sr.reveal('.m7', { origin: 'bottom', opacity: 0, delay: 2400, distance: '50px', duration: 1500 });
sr.reveal('.m8', { origin: 'bottom', opacity: 0, delay: 2600, distance: '50px', duration: 1500 });
sr.reveal('.m9', { origin: 'bottom', opacity: 0, delay: 2800, distance: '50px', duration: 1500 });
sr.reveal('.ab', { origin: 'bottom', opacity: 0, delay: 300, distance: '100px', duration: 1500 });
sr.reveal('.ab2', { origin: 'bottom', opacity: 0, delay: 600, distance: '100px', duration: 1500 });
sr.reveal('.at2', { origin: 'top', opacity: 0, delay: 500, duration: 1500 });
sr.reveal('.ab3', { origin: 'bottom', opacity: 0, delay: 900, distance: '100px', duration: 1500 });
sr.reveal('.ab4', { origin: 'bottom', opacity: 0, delay: 1200, distance: '100px', duration: 1500 });
sr.reveal('.ab5', { origin: 'bottom', opacity: 0, delay: 1500, distance: '50px', duration: 1500 });
sr.reveal('.ab6', { origin: 'bottom', opacity: 0, delay: 1200, distance: '50px', duration: 1500 });
sr.reveal('.ab7', { origin: 'bottom', opacity: 0, delay: 1300, distance: '50px', duration: 1500 });
sr.reveal('.ab8', { origin: 'bottom', opacity: 0, delay: 1400, distance: '50px', duration: 1500 });
sr.reveal('.at', { origin: 'top', opacity: 0, distance: '100px', duration: 1500 });
sr.reveal('.ar', { origin: 'right', opacity: 0, delay: 300, distance: '100px', duration: 1500 });
sr.reveal('.ar2', { origin: 'right', opacity: 0, delay: 600, distance: '0px', duration: 1500 });
sr.reveal('.ar3', { origin: 'right', opacity: 0, delay: 900, distance: '100px', duration: 1500 });
sr.reveal('.ar4', { origin: 'right', opacity: 0, delay: 1200, distance: '100px', duration: 1500 });
sr.reveal('.al', { origin: 'left', opacity: 0, distance: '80px', duration: 1500 });


// swiper

var swiper = new Swiper(".my-swww", {
  // Optional parameters
  slidesPerView: 3,
  spaceBetween: 20,
  speed: 500,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next1",
    prevEl: ".btn-prew1",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    650: {
      slidesPerView: 3,
    },
    1050: {
      slidesPerView: 4,
    },
  },
});
// swiper

var swiper = new Swiper(".my-swwwww", {
  // Optional parameters
  slidesPerView: 4,
  spaceBetween: 20,
  speed: 600,
  direction: "horizontal",
  loop: true,
  navigation: {
    nextEl: ".btn-next3",
    prevEl: ".btn-prev3",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});
var swiper = new Swiper(".my-swwww", {
  // Optional parameters
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 800,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next2",
    prevEl: ".btn-prev2",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    700: {
      slidesPerView: 1,
    },
    1000: {
      slidesPerView: 1,
    },
  },
  
});



//tabs

var tabs = document.getElementById('icetab-container').children;
var tabcontents = document.getElementById('icetab-content').children;

var myFunction = function() {
	var tabchange = this.mynum;
	for(var int=0;int<tabcontents.length;int++){
		tabcontents[int].className = ' tabcontent';
		tabs[int].className = ' icetab';
	}
	tabcontents[tabchange].classList.add('tab-active');
	this.classList.add('current-tab');
}	


for(var index=0;index<tabs.length;index++){
	tabs[index].mynum=index;
	tabs[index].addEventListener('click', myFunction, false);
}



//fansy
$('[data-fancybox]').fancybox({
  // Options will go here
  buttons : [
    'close'
  ],
  wheel : false,
  transitionEffect: "slide",
   // thumbs          : false,
  hash            : false,
  loop            : true,
  // keyboard        : true,
  toolbar         : false,
  // animationEffect : false,
  // arrows          : true,
  clickContent    : false
});

//tilt

VanillaTilt.init(document.querySelectorAll(".box"), {
  max: 20,
  speed: 600,
  scale: 1,
  transition: true,
  easing: "cubic-bezier(.03,.98,.52,.99)",
  perspective: 600,
  glare: true,
});






