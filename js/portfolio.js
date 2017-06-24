$(document).ready(){

  $("#changer").click(function(){

    $("[id^='content']").hide();
    $("#content-" + $(this).name).show();

  })

}
