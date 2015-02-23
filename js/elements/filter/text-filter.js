$(document).ready(function () {
    
    $(".text-filter").blur(function() {
      if($(this).val()=='') {
        $(".clear-filter").addClass("hide").addClass("hide-accessible");
      }
    });

    $(".clear-filter").on('click',function() {
      var e = $.Event("keypress");
      e.keyCode = 13; // 13 for enter
      $(".text-filter").val('').keydown();
      // keydown triggers LiveFilter
      $(".clear-filter").addClass("hide").addClass("hide-accessible");
    });

    $(".text-filter").change(function() {
      if($(this).val()!='') {
        $(".clear-filter").removeClass("hide").removeClass("hide-accessible");
        $('.filter-status').html('Showing results for <em class="search-term">' + $(this).val() + '</em>');
      } else {
        $(".clear-filter").addClass("hide").addClass("hide-accessible");
        $('.filter-status').html('');
      }
    });
    
});