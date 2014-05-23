$(document).ready(function () {
    
    $(".text-filter").blur(function() {
      if($(this).val()=='') {
        $(".clear-filter").addClass("hide");
      }
    });

    $(".clear-filter").on('click',function() {
      var e = $.Event("keypress");
      e.keyCode = 13; // 13 for enter
      $(".text-filter").val('').keydown();
      // keydown triggers LiveFilter
      $(".clear-filter").addClass("hide");
    });

    $(".text-filter").change(function() {
      if($(this).val()!='') {
        $(".clear-filter").removeClass("hide");
        $('.filter-status').html('Showing results for <em class="search-term">' + $(this).val() + '</em>');
      } else {
        $(".clear-filter").addClass("hide");
        $('.filter-status').html('');
      }
    });
    
});