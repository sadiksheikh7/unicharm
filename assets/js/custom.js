// slick slider
$('.multiple-items').slick({
  infinite: false,
  centerMode: true,
  slidesToShow: 1,
  slidesToScroll: 1,

  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]

});

$(document).ready(function () {
  $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
      slidesToShow: 5, // 3,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: false,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
          }
        }
      ]
  });

  var filtered = false;
  $('.filterer').on('click', function(){
    var whichID = $(this).attr('id');
    console.log(whichID);
    if(whichID != 'js-filter-all'){
      if( $('.slider').hasClass('filtered') ){
        $('.slider-for').slick('slickUnfilter');
        $('.slider-nav').slick('slickUnfilter');
        $('.slider-for').slick('slickGoTo',0);
        $('.slider-nav').slick('slickGoTo',0);
        filtered = false;
      } else{
        $('.slider').addClass('filtered');
      }
      if(whichID === 'js-filter-video'){
        if (filtered === false) {
          $('.slider-for').slick('slickFilter','.video');
          $('.slider-nav').slick('slickFilter','.video');
          $('.slider-for').slick('slickGoTo',0);
          $('.slider-nav').slick('slickGoTo',0);
          filtered = true;
        } else {
          $('.slider-for').slick('slickUnfilter');
          $('.slider-nav').slick('slickUnfilter');
          $('.slider-for').slick('slickGoTo',0);
          $('.slider-nav').slick('slickGoTo',0);
          filtered = false;
        }
      } else if(whichID === 'js-filter-screenshot'){
        if (filtered === false) {
          $('.slider-for').slick('slickFilter','.screenshot');
          $('.slider-nav').slick('slickFilter','.screenshot');
          $('.slider-for').slick('slickGoTo',0);
          $('.slider-nav').slick('slickGoTo',0);
          filtered = true;
        } else {
          $('.slider-for').slick('slickUnfilter');
          $('.slider-nav').slick('slickUnfilter');
          $('.slider-for').slick('slickGoTo',0);
          $('.slider-nav').slick('slickGoTo',0);
          filtered = false;
        }
      } else if(whichID === 'js-filter-concept'){
          if (filtered === false) {
            $('.slider-for').slick('slickFilter','.concept');
            $('.slider-nav').slick('slickFilter','.concept');
            $('.slider-for').slick('slickGoTo',0);
            $('.slider-nav').slick('slickGoTo',0);
            filtered = true;
          } else {
            $('.slider-for').slick('slickUnfilter');
            $('.slider-nav').slick('slickUnfilter');
            $('.slider-for').slick('slickGoTo',0);
            $('.slider-nav').slick('slickGoTo',0);
            filtered = false;
          }
      }
    } else{
        $('.slider').removeClass('filtered');
        $('.slider-for').slick('slickUnfilter');
        $('.slider-nav').slick('slickUnfilter');
        $('.slider-for').slick('slickGoTo',0);
        $('.slider-nav').slick('slickGoTo',0);
    }

  });
});



// Button Rpplr effects JS Start
(function($) {
$(".ripple-effect").click(function(e){
    var rippler = $(this);
    if(rippler.find(".teffect").length === 0) {
        rippler.append("<span class='teffect'></span>");
    }
    var teffect = rippler.find(".teffect");
    teffect.removeClass("animate");
    if(!teffect.height() && !teffect.width())
    {
        var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
        teffect.css({height: d, width: d});
    }
    var x = e.pageX - rippler.offset().left - teffect.width()/2;
    var y = e.pageY - rippler.offset().top - teffect.height()/2;
    teffect.css({
        top: y+'px',
        left:x+'px'
    }).addClass("animate");
});
})(jQuery);
// Button Rpplr effects JS End



// Handler for .load() called.

$(window).scroll(function() {
    var sticky = $('.header'), scroll = $(window).scrollTop();
    if (scroll > 300) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});


  $(document).ready(function() {
	$('a[rel="relativeanchor"]').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 500);
	    return false;
  }); 
  
  $('.toggle-bar').click(function() {
    $('.sidebar').toggleClass('active');
    $('.main-panel').toggleClass('full-width');
    
  });

// edit form start
  $(".clickme").click(function (e) {
    $('.toggletag').toggleClass('open');
    e.stopPropagation()
  });

  $(document).click(function (e) {
    if (! $(e.target).hasClass('toggletag')) $(".toggletag").removeClass('open');
  });
// edir for end

});

// For a pie chart
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: data,
  options: options
});

new WOW().init();