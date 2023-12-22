$(document).ready(function () {
  var cn = 0;
  $(".ham-icon").click(function () {
    if (cn == 0) {
      var st = "hidden";
      cn = 1;
      $("#header").addClass("bluebg");
    } else {
      var st = "unset";
      cn = 0;
      $("#header").removeClass("bluebg");
    }
    $("body").css("overflow", st);
    $(".my-sidenav1").slideToggle("slow");
  });

  $(".ham-icon1").click(function () {
    $(".my-sidenav").css("max-width", "100%");
  });

  $(".inspired-btmbtn").click(function () {
    $("html, body").animate({ scrollTop: $("#mission").offset().top }, 1000);
  });

  $(".cross-btn1").click(function () {
    $(".my-sidenav").css("max-width", "0");
  });

  $(".openMenu").click(function () {
    $(".desktopHamburger").css("max-width", "340px");
  });

  $(".closeMenu").click(function () {
    $(".desktopHamburger").css("max-width", "0px");
  });

  $(
    ".performance-slider .owl-prev, .performance-slider .owl-next, .performance-slider .owl-dots .owl-dot"
  ).click(function () {
    setTimeout(function () {
      new WOW().init();
    }, 1000);
  });

  //   $(window).on("scroll", function() {

  //   if($(this).scrollTop() > 50) {
  //   $('#header').addClass("sticky");
  //  }
  //  else {
  //   $('#header').removeClass("sticky");
  //  }
  // });

  collectMapSvg();
});

$(document).ready(function () {
  $(".my-sidenav").accordion();
});

$(".mainSlider.owl-carousel").owlCarousel({
  autoplay: false,
  autoplayTimeout: 5000,
  loop: false,
  nav: true,
  navText: "",
  dots: false,
  touchDrag: true,
  mouseDrag: false,
  smartSpeed: 1000,
  stagePadding: 260,
  margin: 80,
  responsive: {
    0: {
      items: 1,
      stagePadding: 0,
      margin: 0,
    },
    600: {
      items: 1,
      stagePadding: 0,
      margin: 50,
    },
    1000: {
      items: 1,
    },
  },
});

$(".testimonialSlider.owl-carousel").owlCarousel({
  autoplay: false,
  autoplayTimeout: 5000,
  loop: false,
  nav: true,
  navText: "",
  dots: false,
  touchDrag: true,
  mouseDrag: false,
  smartSpeed: 1000,
  stagePadding: 80,
  margin: 20,
  responsive: {
    0: {
      items: 1,
      stagePadding: 0,
      margin: 0,
    },
    600: {
      items: 2,
      stagePadding: 0,
      margin: 20,
    },
    1000: {
      items: 2,
    },
  },
});

$(".hyattSliders.owl-carousel").owlCarousel({
  autoplay: false,
  autoplayTimeout: 5000,
  loop: false,
  nav: true,
  navText: "",
  dots: true,
  touchDrag: true,
  mouseDrag: false,
  smartSpeed: 1000,
  margin: 0,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

$(".checkoutSlider.owl-carousel").owlCarousel({
  autoplay: false,
  autoplayTimeout: 5000,
  loop: true,
  nav: true,
  navText: "",
  dots: false,
  touchDrag: true,
  mouseDrag: false,
  smartSpeed: 1000,
  margin: 20,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 4,
    },
  },
});

$(".panel-collapse").on("shown.bs.collapse", function (e) {
  var $panel = $(this).closest(".panel");
  $("html,body").animate(
    {
      scrollTop: $panel.offset().top - 80,
    },
    500
  );
});
/*
 * Replace all SVG images with inline SVG
 */
function collectMapSvg() {
  $("img.mapsvg").each(function () {
    //$('.'+cls).css({ fill: "#ff0000" });
    var $img = $(this);
    var imgID = $img.attr("id");
    var imgClass = $img.attr("class");
    var imgURL = $img.attr("src");

    $.get(
      imgURL,
      function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = $(data).find("svg");

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== "undefined") {
          $svg = $svg.attr("id", imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== "undefined") {
          $svg = $svg.attr("class", imgClass + " replaced-svg");
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr("xmlns:a");

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (
          !$svg.attr("viewBox") &&
          $svg.attr("height") &&
          $svg.attr("width")
        ) {
          $svg.attr(
            "viewBox",
            "0 0 " + $svg.attr("height") + " " + $svg.attr("width")
          );
        }

        // Replace image with new SVG
        $img.replaceWith($svg);
      },
      "xml"
    );
  });
}

$(document).ready(function () {
  var bigimage = $("#big");
  var thumbs = $("#thumbs");
  //var totalslides = 10;
  var syncedSecondary = true;

  bigimage
    .owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: false,
      // autoplay: true,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200,
      navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
      ],
    })
    .on("changed.owl.carousel", syncPosition);

  thumbs
    .on("initialized.owl.carousel", function () {
      thumbs.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      items: 3,
      dots: false,
      nav: true,
      navText: [
        '<i class="fa fa-arrow-left" aria-hidden="true"></i>',
        '<i class="fa fa-arrow-right" aria-hidden="true"></i>',
      ],
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: 3,
      responsiveRefreshRate: 100,
    })
    .on("changed.owl.carousel", syncPosition2);

  function syncPosition(el) {
    //if loop is set to false, then you have to uncomment the next line
    //var current = el.item.index;

    //to disable loop, comment this block
    console.log(el);
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    //to this
    thumbs
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumbs.find(".owl-item.active").length - 1;
    console.log(onscreen);
    var start = thumbs.find(".owl-item.active").first().index();
    var end = thumbs.find(".owl-item.active").last().index();
    console.log(end);
    if (current > end) {
      thumbs.data("owl.carousel").to(current, 100, true);
    }
    if (current < start) {
      thumbs.data("owl.carousel").to(current - onscreen, 100, true);
    }
  }

  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      bigimage.data("owl.carousel").to(number, 100, true);
    }
  }

  thumbs.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    bigimage.data("owl.carousel").to(number, 300, true);
  });
});
