window.addEventListener('scroll',function(){
  var header =document.querySelector('header');
  header.classList.toggle('sticky-full',window.scrollY>0);
})
//odometer
$(function () {
  $.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();

    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on("resize scroll", function () {
    $(".odometer").each(function () {
      if ($(this).isInViewport()) {
        setTimeout(function () {
          $("#degree").html(90);
          $("#MBA").html(1);
          $("#university").html(100000);
        }, 0);
      } else {
      }
    });
  });
});

//for swipping carousel on phones
$(".carousel").on("touchstart", function (event) {
  const xClick = event.originalEvent.touches[0].pageX;
  $(this).one("touchmove", function (event) {
    const xMove = event.originalEvent.touches[0].pageX;
    const sensitivityInPx = 5;

    if (Math.floor(xClick - xMove) > sensitivityInPx) {
      $(this).carousel("next");
    } else if (Math.floor(xClick - xMove) < -sensitivityInPx) {
      $(this).carousel("prev");
    }
  });
  $(this).on("touchend", function () {
    $(this).off("touchmove");
  });
});
 
//search icon animation
$(document).ready(function () {
  $(".search").each(function () {
    var self = $(this);
    var div = self.children("div");
    var placeholder = div.children("input").attr("placeholder");
    var placeholderArr = placeholder.split(/ +/);
    if (placeholderArr.length) {
      var spans = $("<div />");
      $.each(placeholderArr, function (index, value) {
        spans.append($("<span />").html(value + "&nbsp;"));
      });
      div.append(spans);
    }
    self.click(function () {
      self.addClass("open");
      setTimeout(function () {
        self.find("input").focus();
      }, 750);
    });
    $(document).click(function (e) {
      if (!$(e.target).is(self) && !jQuery.contains(self[0], e.target)) {
        self.removeClass("open");
      }
    });
  });
});

 
 //load more
 $(function () {
  x=1;
  $('.events-chunk').slice(0, 1).show();
  $('#loadMore').on('click', function (e) {
      e.preventDefault();
      x = x+1;
      $('.events-chunk').slice(0, x).slideDown();
  });
});