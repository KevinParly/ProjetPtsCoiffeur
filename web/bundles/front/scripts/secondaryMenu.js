$(function(){
  var isDisplayed = true;
  $('#side_nav_displayer button').click(function(){
    if(!isDisplayed){
      isDisplayed = true;
      $("#side_nav").animate({width: '100%'}, '500');
    }else{
      isDisplayed = false;
      $("#side_nav").animate({width: '0px'}, '500');
    }
  });
});
