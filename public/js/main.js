let index = 1;
const trueArray = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];


function getClefs() {
    $.ajax(window.base_url + '/getClefsData', {
        type: 'GET',
        success: function (data, status, xhr) {
            localStorage.setItem('Clefs', JSON.stringify(data))
        },
    });
}

function resetTest() {
    localStorage.setItem('active-question-number', 0);
    localStorage.setItem('click-count', 0);
    $('#active-question-number').html(localStorage.getItem('active-question-number'))
    getClefs();
    $('#renderButtonHidden').trigger('click');
    const positions = JSON.parse($('#positions').val());
    let circle;
    for (let i = 1; i < 8; i++) {
        circle = $('.RangeInfo .img' + i);
        let top = positions[i - 1] * 8;
        circle.css('top', top + 'px')
    }
}

function renderTests() {
    $('.Range .info').show();
    const activeClefs = $('.Clefs .active');
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
    const CLEFS = JSON.parse(localStorage.getItem('Clefs'));
    let selectedClefs = CLEFS.find(x => x.id == selectedId);
    let name16 = JSON.parse(selectedClefs.a_with_16th)[1];
    let indexInArray16 = trueArray.indexOf(name16) + 1
    $('.Range .info').hide();
    let temp1 = 16 - circlePos;
    let temp2;
    let TrueAnswer;
    if (temp1 >= 6) {
        temp2 = temp1 / 7
        TrueAnswer = temp1 - Math.floor(temp2) * 7 - 1;
    } else {
        TrueAnswer = temp1 - 1;
    }
    ;
    let trueIndex = indexInArray16 + TrueAnswer;
    if (trueIndex >= 7) {
        trueIndex = trueIndex - 7;
    }
    let TrueName = trueArray[trueIndex];
    $('.correct').removeClass('correct')
    $('.item').removeClass('disabled actionable')
    $('.item').removeClass('disabled correct')
    console.log('AAAAAAAAAA ', TrueName);
    $('[data-clef=' + TrueName).addClass('correct');


    if (circlePos <= -3) {
        $('.music-note .left-ov.top , .music-note .RangeLinesLeft.TopLines').show();
    }

    if (circlePos > 0) {
        $('.music-note .left-ov.top , .music-note .RangeLinesLeft.TopLines').hide();
    }


    if (circlePos >= 10) {
        $('.music-note .left-ov.bottom , .music-note .RangeLinesLeft.BottomLines').show();
    }

    if (circlePos <= 9) {
        $('.music-note .left-ov.bottom , .music-note .RangeLinesLeft.BottomLines').hide();
    }

    let questionNumber = localStorage.getItem('active-question-number') * 1 + 1;
    localStorage.setItem('active-question-number', questionNumber);
    $('#active-question-number').html(questionNumber)
    let count = localStorage.getItem('click-count');
    count = count * 1;
    let percent = (--questionNumber / count) * 100;
    if (isNaN(percent)) percent = 0;

    $('#percent').html((Math.round(percent * 100) / 100).toFixed(2) + '%')
}

$(document).ready(function () {
    $('form').find('.img' + index).children('img').attr("src", "/img/active.svg");
    localStorage.setItem('rendered_html', '');
    resetTest();
})
$('.plus_minus .minus').click(function () {
    var $input = $(this).parent().parent().find('input');
    let min = $input.attr('min');
    var count = parseInt($input.val()) - 1;
    if (count + 1 >= min) {
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        $('.questions-number p').text(count)
    }

    return false;
});

$('.plus_minus .plus').click(function () {
    var $input = $(this).parent().parent().find('input');
    let max = $input.attr('max');
    var count = parseInt($input.val()) + 1;
    if (count - 1 < max) {
        $input.val(count);
        $input.change();
        $('.questions-number p').text(count)
    }
    return false;
});

$(document).on("click", ".worksheet .item li", function () {
    $('.TestLevelPopup').fadeIn();
    $('body').addClass('hidden-b')
});

$(document).on("click", ".difficultly .btn", function () {
    var attr = $(this).attr('rel');
    var nmb = $(this).find('span').text();
    let index = parseInt(nmb);
    let temp1 = Math.ceil(index / 20);
    let topPosition = temp1 * 2 * 8 + 32;
    let bottomPosition = temp1 * -2 * 8;
    $('.Range-item-text .img.img1').css('top', bottomPosition + 'px');
    $('.Range-item-text .img.img2').css('top', topPosition + 'px')
    $('.questions-number p').text(nmb);
    $(".difficultly .btn").removeClass('active');
    $(this).addClass('active');


    $('.NumberOfQuestions').addClass('open');
    $('.NumberOfQuestions .info').slideDown();
    $(".NumberOfQuestions .Number-item").removeClass('active');
    $('.' + attr).addClass('active')
});


$(document).on("click", ".close-popup", function () {
    $('.popup').fadeOut();
    $('body').removeClass('hidden-b');
});

$('.customize-items li.item .title').on('click', function () {
    $(this).parent().toggleClass('open');
    $(this).parent().find('.info').slideToggle();
});


window.onbeforeunload = function (event) {
    return confirm("Confirm refresh");
};

//check the answer
$('.test-item .item').on('click', function () {
    $(this).addClass('disabled');

    if ($(this).hasClass("correct")) {
        $(this).addClass('actionable');

        let maxCount = parseInt($('.questions-number p').text());
        let activeQuestion = parseInt(localStorage.getItem('active-question-number'));
        let renderedHtml = localStorage.getItem('rendered_html');
        renderedHtml += '<div style="width: 30%;margin:1%"><div class="music-note"> ' + ($('.testingPage .left .music-note').html()) + '</div><p style="text-align: center;font-size: 40px">' + $('.testingPage .left .actionable').html() + '</p> <hr style="margin-top: -5px;"/></div>';
        localStorage.setItem('rendered_html', renderedHtml);
        $('.test-item .item').addClass('disabled');
        $('.test-item').addClass('disabled');
        if (activeQuestion < maxCount) {
            setTimeout(() => {
                $('#renderButtonHidden').trigger('click');
            }, 1000);
        } else {
            if (activeQuestion == maxCount) {
                $('#finishResult .left').html(renderedHtml);

                let height = $("#finishResult").height();
                let width = $("#finishResult").width();
                $("#finishResult").css('background-color', '#6c6969')
                var doc = new jsPDF("p", "px", [height, width], true);
                html2canvas($("#finishResult"), {
                    useCORS: true,
                    onrendered: function (canvas) {
                        var imgData = canvas.toDataURL('image/jpeg');
                        doc.addImage(imgData, 'JPEG', 0, 0);
                        console.log(imgData);
                        doc.save('Spec_Sheet.pdf');
                    }
                });

            }
        }
    }
    let count = localStorage.getItem('click-count');
    let questionNumber = localStorage.getItem('active-question-number') * 1 - 1;
    count = count * 1 + 1;
    localStorage.setItem('click-count', count);
    let percent = (questionNumber / count) * 100;
    if (!$(this).hasClass("correct")) {

        $('#percent').html((Math.round(percent * 100) / 100).toFixed(0) + '%')
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


$('.adminPage .RangeArrows .top1').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img' + index);
    if (circle.css('top') != '-112px') {
        circle.css('top', '-=8');
    }

    if (parseInt(circle.css('top')) <= -8) {
        $('.TopLines' + index).show();
        $('.left-ov' + index + '.top').show();
    }

    if (parseInt(circle.css('top')) <= 72) {
        $('.BottomLines' + index).hide();
        $('.left-ov' + index + '.bottom').hide();
    }
});

$('.adminPage .RangeArrows .bottom1').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img' + index);
    if (circle.css('top') != '128px') {
        circle.css('top', '+=8');
    }

    if (parseInt(circle.css('top')) >= -8) {
        $('.TopLines' + index).hide();
        $('.left-ov' + index + '.top').hide()
    }

    if (parseInt(circle.css('top')) >= 72) {
        $('.BottomLines' + index).show();
        $('.left-ov' + index + '.bottom').show();
    }
});

$('#leftArrow').on('click', function () {
    if (index != 1) {
        $('.img' + index).children('img').attr("src", "/img/note7.svg");
        $('.img' + --index).children('img').attr("src", "/img/active.svg");
    }

});
$('#rightArrow').on('click', function () {
    if (index != 7) {
        $('.img' + index).children('img').attr("src", "/img/note7.svg");
        $('.img' + ++index).children('img').attr("src", "/img/active.svg");
    }
});

$('#submitButton').on('click', function () {
    let result = [];
    let circle;
    for (let i = 1; i < 8; i++) {
        circle = $(this).parent().parent().find('.RangeInfo .img' + i);
        result.push(circle.css('top').split('p')[0] * 1 / 8);
    }
    $('#positions').val(JSON.stringify(result));
    let circle1 = $(this).parent().parent().find('.RangeInfo .img' + 1)
    const positionA = circle1.css('top').split('p')[0] * 1 / 8;
    let reserveArray = ['G', 'F', 'E', 'D', 'C', 'B', 'A'];
    let temp = 16 - positionA;
    let temp2 = temp / 7;
    let position16 = temp - Math.floor(temp2) * 7 - 1;
    if (position16 === -1) position16 = 6;
    let requestArray = [positionA, reserveArray[position16]]
    $('#a_with_16th').val(JSON.stringify(requestArray));
    // console.log(position16)
    $('#hiddenButton').trigger('click')

})


$('#renderButton').on('click', function () {
    resetTest();
    renderTests()

});

$('#renderButtonHidden').on('click', function () {
    renderTests()
})


//---------------------------------
//---------------------------------
//---------------------------------
//---------------------------------

$('.testingPage .RangeArrows .top1').on('click', function () {
    let circle = $(this).parent().parent().find('.RangeInfo .img1');
    if (circle.css('top') != '-112px') {
        circle.css('top', '-=8');
    }

    if (parseInt(circle.css('top')) <= -8) {
        $(this).parent().parent().find('.left-ov.top , .RangeLinesLeft.TopLines').show();
    }

    if (parseInt(circle.css('top')) <= 72) {
        $(this).parent().parent().find('.left-ov.bottom , .RangeLinesLeft.BottomLines').hide();
    }
});

$('.testingPage .RangeArrows .bottom1').on('click', function () {
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

$('.testingPage .RangeArrows .top2').on('click', function () {
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

$('.testingPage .RangeArrows .bottom2').on('click', function () {
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
