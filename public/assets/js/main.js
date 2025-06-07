"use strict";
$(function () {
  adjustMainPadding();

  $(".header__nav-button").on("click", function () {
    $(this).toggleClass("is-active");
    $(this).siblings(".header__nav").toggleClass("is-active");
  });
});

function adjustMainPadding() {
  const headerHeight = $(".header").outerHeight();
  $(".main").css("padding-top", headerHeight);
}
