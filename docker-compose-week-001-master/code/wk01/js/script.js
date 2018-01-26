$(document).ready(function() {
  var $signal = $("#signal");

  $("#buttonImg").click (function () {
    $signal.removeClass("hide");
    $signal.addClass("show");
    console.log("click");
  });
});
