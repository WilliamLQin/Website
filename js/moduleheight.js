$(function() {
  var div1by1 = $('.module.module-1by1');
  div1by1.css('height', div1by1.width()*(1/1));

  var div2by1 = $('.module.module-2by1');
  div2by1.css('height', div2by1.width()*(1/2));

  var div1by2 = $('.module.module-1by2');
  div1by2.css('height', div1by2.width()*(2/1));

  var div4by3 = $('.module.module-4by3');
  div4by3.css('height', div4by3.width()*(3/4));

  var div3by4 = $('.module.module-3by4');
  div3by4.css('height', div3by4.width()*(4/3));

  var div3by5 = $('.module.module-3by5');
  div3by5.css('height', div3by5.width()*(5/3));

  var div5by3 = $('.module.module-5by3');
  div5by3.css('height', div5by3.width()*(3/5));

  var div9by16 = $('.module.module-9by16');
  div9by16.css('height', div9by16.width()*(16/9));

  var div16by9 = $('.module.module-16by9');
  div16by9.css('height', div16by9.width()*(9/16));
})
