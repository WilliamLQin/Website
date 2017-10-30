$(document).ready(function(){

  // $("[id^='content']").hide();
  // $("#content-base").show();
  //
  // $("[id^='changer']").click(function(){
  //
  //   $("[id^='content']").hide();
  //   $("#content-" + $(this).attr("name")).show();
  //
  // });


  $("[rel='tooltip']").tooltip();

    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    );

});
