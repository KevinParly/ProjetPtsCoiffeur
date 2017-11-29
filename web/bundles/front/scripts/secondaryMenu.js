$(function(){
  var isDisplayed = false;
  var button = $('.quickMenu li');
  var buttonSummary = '.buttonSummary';
  var quickButtonTitle = '.quickButtonTitle';

  $('#side_nav_displayer button').click(function(){
    if(!isDisplayed){
      isDisplayed = true;
      $("#side_nav").stop(true,true).animate({width: '100%'}, '500');
    }else{
      isDisplayed = false;
      $("#side_nav").stop(true,true).animate({width: '0px'}, '500');
    }
  });
});
