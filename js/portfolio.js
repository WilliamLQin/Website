$(document).ready(function(){

  $("[id^='content']").hide();
  $("#content-cprvr").show();

  $("[id^='changer']").click(function(){

    $("[id^='content']").hide();
    $("#content-" + $(this).attr("name")).show();

  });

});
