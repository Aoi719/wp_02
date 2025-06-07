"use strict";
$(function () {
  adjustMainPadding();
});

function adjustMainPadding() {
  const headerHeight = $(".header").outerHeight();
  $(".main").css("padding-top", headerHeight);
}
