// chart js
var ChartColor = ["#5D62B4", "#54C3BE", "#EF726F", "#F9C446", "rgb(93.0, 98.0, 180.0)", "#21B7EC", "#04BCCC"];



  // file upload js start
  
  // Upload btn on change call function
  
  $(document).ready(function($) {
    // Upload btn on change call function
    $(".uploadlogo").change(function() {
      var filename = readURL(this);
      $(this).parent().children('span').html(filename);
    });
  
    // Read File and return value  
    function readURL(input) {
      var url = input.value;
      var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
      if (input.files && input.files[0] && (
        ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "gif" || ext == "pdf"
        )) {
        var path = $(input).val();
        var filename = path.replace(/^.*\\/, "");
        // $('.fileUpload span').html('Uploaded Proof : ' + filename);
        return ""+filename;
      } else {
        $(input).val("");
        return "Only image/pdf formats are allowed!";
      }
    }
  });

  // file upload js end

// Handler for .load() called.

$(window).scroll(function() {
    var sticky = $('.header'), scroll = $(window).scrollTop();
    if (scroll > 300) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});


$(document).ready(function() {

// custom search start
  $(".custom-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".custom-search-list li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
// custom search end


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




// data table start
$(document).ready(function() {
  var table = $('#example, #example2').DataTable( {
  lengthChange: false,
  buttons: [ 'copy', 'excel', 'pdf',
  {
  extend: "print",
  customize: function(win)
  {
  var last = null;
  var current = null;
  var bod = [];
  
  var css = '@page { size: landscape; }',
  head = win.document.head || win.document.getElementsByTagName('head')[0],
  style = win.document.createElement('style');
  
  style.type = 'text/css';
  style.media = 'print';
  
  if (style.styleSheet)
  {
  style.styleSheet.cssText = css;
  }
  else
  {
  style.appendChild(win.document.createTextNode(css));
  }
  
  head.appendChild(style);
  }
  },
  ]
  } );
  table.buttons().container()
  .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
  } );
  // data table end



new WOW().init();

