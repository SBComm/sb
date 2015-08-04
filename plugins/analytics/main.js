/**
 * Created by DAVMILLER on 8/6/14.
 */

$(function () {
    $("#startDate").datepicker({maxDate: "-1", defaultDate: "-1m -1d"});
    $("#startDate").datepicker("setDate", "-1m -1d");
    $("#endDate").datepicker({maxDate: "-1", defaultDate: "-1d"});
    $('#endDate').datepicker("setDate", "-1d");
});

$('.icon-question-sign').click(function () {
    var parent = $(this).parents('.control-group');
    if (!$(parent).hasClass('info')) {
        $(parent).addClass('info');
        $(parent).find('.help-inline').show();
    } else {
        $(parent).removeClass('info');
        $(parent).find('.help-inline').hide();
    }
});

function loadData() {
    var startDate = $('#startDate').datepicker({formatDate: 'yy-mm-dd'}).val();
    var endDate = $('#endDate').datepicker({formatDate: 'yy-mm-dd'}).val();
    var area = $('#area').find(":selected").attr('id');
    var filter = $('#filter').val();
    var metrics = "";
    $('input:checked').each(function () {
        metrics = metrics.concat($(this).val());
        metrics = metrics.concat(",");
    });
    metrics = metrics.slice(0, -1);
    var data = JSON.stringify({startDate: startDate, endDate: endDate, area: area, metrics: metrics, filter: filter});

    var checked = $('input:checked').length;

    var pass = true;

    console.log('this:' + startDate + ':');

    if (startDate == "" || startDate == " " || startDate == "null" || startDate == null) {
        pass = false;
        $('#startDiv').addClass("error");
        $('#startHelp').html("Please select a start date.");
        $('#startHelp').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated flash');
        });
    } else {
        $('#startDiv').removeClass("error");
        $('#startHelp').html("");
    }

    if (endDate == "" || endDate == " " || endDate == "null" || endDate == null) {
        pass = false;
        $('#endDiv').addClass("error");
        $('#endHelp').html("Please select an end date.");
        $('#endHelp').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated flash');
        });
    } else {
        $('#endDiv').removeClass("error");
        $('#endHelp').html("");
    }

    if (area == "blank") {
        pass = false;
        $('#areaDiv').addClass("error");
        $('#areaHelp').html("Please select a site from the list above.");
        $('#areaHelp').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated flash');
        });
    } else {
        $('#areaDiv').removeClass("error");
        $('#areaHelp').html("");
    }

    if (checked <= 0) {
        pass = false;
        $('#metricsDiv').addClass("error");
        $('#metricsHelp').html("You must select at least metric.");
        $('#metricsHelp').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass('animated flash');
        });
    } else {
        $('#metricsDiv').removeClass("error");
        $('#metricsHelp').html("");
    }

    if (pass == true) {
        $('div.error > div.controls > .help-inline').html("");
        $('.error').removeClass("error");
        $('#target').html("");
        var target = document.getElementById('target');
        var spinner = new Spinner().spin(target);
        var runReportButton = $('.form-actions .search-button');
        runReportButton.html('<em class="fa fa-spin fa-spinner"></em>');
        $.ajax({
            url: "plugins/analytics/getResults.php",
            type: "POST",
            data: {data: data}
        }).done(function (html) {
            $('#target').html(html);
            $('html,body').animate({
                scrollTop: $('#target').offset().top
            }, 1000);
            runReportButton.html('Run Report <em class="fa fa-angle-right"></em>');
            $('.partial-print-trigger').on('click',function(event) {
                event.preventDefault();
                var printTarget = $(this).attr('data-partial-print-target');
                $(this).closest(printTarget).addClass('partial-print-target');
                $('body').addClass('hide-for-print');
                window.print();
                $(this).closest(printTarget).removeClass('partial-print-target');
                $('body').removeClass('hide-for-print');
            });
        });
    } else {
        $('html,body').animate({
            scrollTop: $('#run-report').offset().top
        }, 250);
    }
}

