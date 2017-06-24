$(document).ready(function(){

  $("#content-" + $(this).name).show();

  $("#changer").click(function(){

    $("[id^='content']").hide();
    $("#content-" + $(this).name).show();

  });

});
