$(function () {

  var hashElement;

  $(window).bind('hashchange', function () {

    //strip off the #
    var hash = window.location.hash.substring(1);

    //get the element that has data-hash value of hash in URL
    hashElement = $('[data-hash="'+hash+'"]');

    if (!$(hashElement).hasClass('active')) {

      $('#accordion-nav .is-open').removeClass('is-open').addClass('hide');
      $(hashElement).next().toggleClass('is-open').toggleClass('hide');
        
      $('#accordion-nav').find('.active').removeClass('active');
      $(hashElement).addClass('active');
    } else {
      $('#accordion-nav .is-open').removeClass('is-open').addClass('hide');
      $(hashElement).removeClass('active');
    }

    if($(window).width()<560) {
      $('#accordion-nav').css('margin-bottom','60px');
      var scrollTo;
      if(hash!='') {
        scrollTo = hashElement;
      } else {
        scrollTo = '#accordion-nav';
      }
      $('body').scrollTo( scrollTo, 500 );
    } else {
      var theHeight = $('#accordion-nav .is-open').height() + 60;
      $('#accordion-nav').css('margin-bottom',theHeight);
    }

  });

});

$(document).ready(function () {
    
    $('#accordion-nav').children('li').children('span').next().each(function() {
      $(this).addClass('hide');
    });

    //Show first item
    /*
    $('#accordion-nav').children('li').first().children('span').addClass('active')
        .next().addClass('is-open').show();
    */
        
    $('#accordion-nav').on('click', 'li > span', function() {
      
      var thisHash = $(this).data('hash');
      if(window.location.hash.substring(1) == thisHash) {
        window.location.hash = 'overview';
      } else {
        window.location.hash = $(this).data('hash');
      }

    });

    $('.choose-category-image').on('click',function() {
      $('body').scrollTo( '.main', 1200 );
    });

    $(window).trigger("hashchange");
    
});


$(window).load(function(){
  /*console.log("ww: "+$(window).width());*/
  var theHeight = $('#accordion-nav').height();
  $('#accordion-nav section').each(function() {
    $(this).css('top',theHeight);
  });
  if($(window).width()<560) {
    $('#accordion-nav').css('margin-bottom','60px');
  } else {
    theHeight = $('#accordion-nav .is-open').height() + 60;
    $('#accordion-nav').css('margin-bottom',theHeight);
  }
});
$(window).resize(function(){
  /*console.log("ww: "+$(window).width());*/
  var theHeight = $('#accordion-nav').height();
  $('#accordion-nav section').each(function() {
    $(this).css('top',theHeight);
  });
  if($(window).width()<560) {
    $('#accordion-nav').css('margin-bottom','60px');
  } else {
    theHeight = $('#accordion-nav .is-open').height() + 60;
    $('#accordion-nav').css('margin-bottom',theHeight);
  }

});