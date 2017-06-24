$(document).ready(function(){

  $("[id^='content']").hide();
  $("#content-laserfield").show();

  $("#changer").click(function(){

    $("[id^='content']").hide();
    $("#content-" + $(this).attr("name")).show();

  });

});
