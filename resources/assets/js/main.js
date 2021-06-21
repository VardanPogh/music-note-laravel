$(document).ready(function () {
    $('#renderButton').trigger('click')
})
$('.plus_minus .minus').click(function () {
    var $input = $(this).parent().parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
});

$('.plus_minus .plus').click(function () {
    var $input = $(this).parent().parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
});

$(document).on("click", ".worksheet .item li", function () {
    $('.TestLevelPopup').fadeIn();
    $('body').addClass('hidden-b')
});

$(document).on("click", ".difficultly .btn", function () {
    $(".difficultly .btn").removeClass('active');
    $(this).addClass('active');
});

$(document).on("click", ".close-popup", function () {
    $('.popup').fadeOut();
    $('body').removeClass('hidden-b');
});

$('.customize-items li.item .title').on('click', function () {
    $(this).parent().toggleClass('open');
    $(this).parent().find('.info').slideToggle();
});

$('.test-item .item').on('click', function () {
    $(this).addClass('disabled');
    if ($(this).hasClass("correct")) {
        $(this).addClass('actionable')
    }
});

$('.customize-items .Clefs .Clefs-item').on('click', function () {
    var attr = $(this).attr('rel');

    if ($('.customize-items .Clefs .Clefs-item.active').length === 1) {
        if (!$(this).hasClass("active")) {
            $(this).addClass('active');
        }
    } else {
        $(this).toggleClass('active');
    }

    $('.Range').addClass('open');
    $('.Range .info').slideDown();

    if ($(this).hasClass("active")) {
        $('.' + attr).addClass('active')
    } else {
        $('.' + attr).removeClass('active')
    }
});


$('.RangeArrows .top1').on('click', function () {
    console.log('asdcsa')
    let circle = $(this).parent().parent().find('.RangeInfo .img1');
    if (circle.css('top') != '-112px') {
        circle.css('top', '-=8');
    }

    if (parseInt(circle.css('top')) <= -8) {
        $('.TopLines1').show();
    } 

    if (parseInt(circle.css('top')) <= 72) {
        $(this).parent().parent().find('.left-ov.bottom , .RangeLinesLeft.BottomLines1').hide();
    } 
});

$('.RangeArrows .bottom1').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img1');
    if (circle.css('top') != '128px') {
        circle.css('top', '+=8');
    }
 
    if (parseInt(circle.css('top')) >= -8) {
        $(this).parent().parent().find('.left-ov.top , .RangeLinesLeft.TopLines').hide();
    } 

    if (parseInt(circle.css('top')) >= 72) {
        $(this).parent().parent().find('.left-ov.bottom , .RangeLinesLeft.BottomLines').show();
    } 
 
});

$('.RangeArrows .top2').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img2');
    if (circle.css('top') != '-112px') {
        circle.css('top', '-=8');
    }

    if (parseInt(circle.css('top')) <= -8) {
        $(this).parent().parent().find('.right-ov.top , .RangeLinesRight.TopLines').show();
    } 

    if (parseInt(circle.css('top')) <= 72) {
        $(this).parent().parent().find('.right-ov.bottom , .RangeLinesRight.BottomLines').hide();
    } 
});

$('.RangeArrows .bottom2').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img2');
    if (circle.css('top') != '128px') {
        circle.css('top', '+=8');
    }

    if (parseInt(circle.css('top')) >= -8) {
        $(this).parent().parent().find('.right-ov.top , .RangeLinesRight.TopLines').hide();
    } 

    if (parseInt(circle.css('top')) >= 72) {
        $(this).parent().parent().find('.right-ov.bottom , .RangeLinesRight.BottomLines').show();
    } 
});


$('#renderButton').on('click', function () {
    let activeClefs = $('.Clefs .active');
    let selectedClefsIndex = Math.floor(Math.random() * activeClefs.length);
    let selectedId = activeClefs[selectedClefsIndex].id;
    let circle1 = $('.tab-' + selectedId + ' .img1');
    let top1 = circle1.position().top / 8
    let circle2 = $('.tab-' + selectedId + ' .img2');
    $('.notes').hide();
    $('.note' + selectedId).show();
    let top2 = circle2.position().top / 8
    let circlePos = Math.floor(Math.random() * (top2 - top1 + 1)) + top1;
    $('.music-note .RangeImg .img1').css('top', circlePos * 12.5);
    
    if (circlePos <= -3) {
        $('.music-note .left-ov.top , .music-note .RangeLinesLeft.TopLines').show();
    } 

    if (circlePos > 0) {
        $('.music-note .left-ov.top , .music-note .RangeLinesLeft.TopLines').hide();
    } 
})

 