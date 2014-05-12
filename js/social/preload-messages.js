/*
/* 2014.04.20 Josh Palmeri
 * Adapted from http://jsfiddle.net/ywsaS/3/
 */
 
var result = 'Good things are coming your way...', //html for main result
    delay = 2000, //delay of sub results
    data = Array();
$(".preload-message span").each(function() {
    data.push($(this));
});
$('.preload-message').html('<span>Loading...</span>'); //clear all except for default start text
$('.preload-message').css('display','block');

//self executing function starting from array index 0
(function process_els(el_index) {
  
    var el = data[el_index],
        precheckUl = $('.preload-message'),
        loadingLi = $('<span class="loading"></span>'),
        sysPreId = "syspre_"+el_index;
  
  //show loading image
  precheckUl.append(loadingLi.clone().attr("id",sysPreId));
  
  //after simulated delay replace loading image with sub check result
  setTimeout( function()
  {
      precheckUl.find('span.loading:first').replaceWith(data[el_index]);
      
  }, delay);
  
  //to simulate the delay recursively call itself until all array elements have been processed
  if (el_index + 1 < data.length) {
    setTimeout(function() { process_els(el_index + 1); }, delay);
  }
    else
    {
        setTimeout(function() 
        {
            //append the final result after all sub checks have been inserted
            precheckUl.append("<span>" + result + "</span>");
        }, (delay*5));
    }
})(0);