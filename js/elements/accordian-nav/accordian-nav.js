$(document).ready(function () {
    
    //Show first item
    /*
    $('#accordian-nav').children('li').first().children('span').addClass('active')
        .next().addClass('is-open').show();
    */
        
    $('#accordian-nav').on('click', 'li > span', function() {
        
      if (!$(this).hasClass('active')) {

        $('#accordian-nav .is-open').removeClass('is-open').hide();
        $(this).next().toggleClass('is-open').toggle();
          
        $('#accordian-nav').find('.active').removeClass('active');
        $(this).addClass('active');
      } else {
        $('#accordian-nav .is-open').removeClass('is-open').hide();
        $(this).removeClass('active');
      }

      if($(window).width()<560) {
        $('#accordian-nav').css('margin-bottom','60px');
      } else {
        var theHeight = $('#accordian-nav .is-open').height() + 60;
        $('#accordian-nav').css('margin-bottom',theHeight);
      }

   });
});


$(window).load(function(){
  /*console.log("ww: "+$(window).width());*/
  var theHeight = $('#accordian-nav').height();
  $('#accordian-nav section').each(function() {
    console.log(theHeight);
    $(this).css('top',theHeight);
  });
  if($(window).width()<560) {
    $('#accordian-nav').css('margin-bottom','60px');
  } else {
    theHeight = $('#accordian-nav .is-open').height() + 60;
    $('#accordian-nav').css('margin-bottom',theHeight);
  }
});
$(window).resize(function(){
  /*console.log("ww: "+$(window).width());*/
  var theHeight = $('#accordian-nav').height();
  $('#accordian-nav section').each(function() {
    console.log(theHeight);
    $(this).css('top',theHeight);
  });
  if($(window).width()<560) {
    $('#accordian-nav').css('margin-bottom','60px');
  } else {
    theHeight = $('#accordian-nav .is-open').height() + 60;
    $('#accordian-nav').css('margin-bottom',theHeight);
  }

});