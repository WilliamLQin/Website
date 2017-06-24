$(function() {
  var div = $('.module.module-1by1');
  div.css('height', div.width()*(1/1));

  var div = $('.module.module-2by1');
  div.css('height', div.width()*(1/2));

  var div = $('.module.module-1by2');
  div.css('height', div.width()*(2/1));

  var div = $('.module.module-4by3');
  div.css('height', div.width()*(3/4));

  var div = $('.module.module-3by4');
  div.css('height', div.width()*(4/3));

  var div = $('.module.module-3by5');
  div.css('height', div.width()*(5/3));

  var div = $('.module.module-5by3');
  div.css('height', div.width()*(3/5));

  var div = $('.module.module-9by16');
  div.css('height', div.width()*(16/9));

  var div = $('.module.module-16by9');
  div.css('height', div.width()*(9/16));
})
