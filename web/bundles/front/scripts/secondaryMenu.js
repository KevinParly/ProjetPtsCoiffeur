$(function(){
  var isDisplayed = false;
  var button = $('.quickMenu li');
  var buttonSummary = '.buttonSummary';
  var quickButtonTitle = '.quickButtonTitle';

  $('#side_nav_displayer button').click(function(){
    if(!isDisplayed){
      isDisplayed = true;
      $("#side_nav").animate({width: '100%'}, '500');
    }else{
      isDisplayed = false;
      $("#side_nav").animate({width: '0px'}, '500');
    }
  });

  button.mouseover(function(){
    $(this).children(buttonSummary).animate({top: '0px', opacity: '1'},'500');
    $(this).children(quickButtonTitle).css('border-bottom','solid #FFF 1px');
  });
  button.mouseleave(function(){
    $(this).children(buttonSummary).animate({top: '-10px', opacity: '0'},'500');
    $(this).children(quickButtonTitle).css('border-bottom','none');
  })
});
