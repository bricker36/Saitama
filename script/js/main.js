// Show Menu on Hover
$("#nav").mouseleave(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-0').removeClass("bb-transparent");
})
$("#menu-1").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-1').removeClass("bb-transparent");
})
$("#menu-2").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-2').removeClass("bb-transparent");
})
$("#menu-3").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-3').removeClass("bb-transparent");
})
$("#menu-4").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-4').removeClass("bb-transparent");
})
$("#menu-5").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-5').removeClass("bb-transparent");
})
$("#menu-6").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-6').removeClass("bb-transparent");
})
$("#menu-7").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-7').removeClass("bb-transparent");
})
$("#menu-8").mouseenter(function() {
  $('#billboard img').addClass("bb-transparent");
  $('#bb-8').removeClass("bb-transparent");
})

// Open config
$("#config-button").click(function() {
  $('.config').toggleClass("hidden");
})
// Prevent Highlight of config button
$('#config-button').on("mousedown", function () {
  return false;
})
