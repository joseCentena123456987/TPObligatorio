$(document).ready(function () {
    var getActiveSlideIndex = function () {
      return $("#myCarousel .active").index("#myCarousel .carousel-item");
    };
    var slider = function (IndexNumber) {
      $(".slider .image")
        .removeClass("active")
        .eq(IndexNumber)
        .addClass("active");
    };
    slider(getActiveSlideIndex());
    $("#myCarousel").on("slid.bs.carousel", function () {
      slider(getActiveSlideIndex());
    });
  });




  