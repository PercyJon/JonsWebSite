//The clock toy

/*var clockInt;
$(document).ready(function() {

    $('#clock3D').fadeIn(200);
    runClock3D();
    $('#clock3D').draggable({
        containment: "parent",
        start: function() {
            TweenMax.to($('#clock3D'), 1, {
                scale: 1,
                ease: Elastic.easeOut
            });
        },
        stop: function() {
            TweenMax.to($('#clock3D'), 1, {
                scale: 0.5,
                ease: Elastic.easeOut
            });
        }
    });

});

function runClock3D() {
    clearInterval(clockInt);
    TweenMax.to($('#clock3D'), 30, {
        rotationY: '=-360deg',
        rotationX: '=-360deg',
        scale: 0.5,
        ease: Linear.easeNone,
        repeat: -1
    });

    function updateClock() {
        var d = new Date();
        TweenMax.to($('.clk_sec'), 0.8, {
            rotationZ: (d.getSeconds() * 6) + '_short',
            ease: Bounce.easeOut
        });

        TweenMax.to($('.clk_min'), 0.8, {
            rotationZ: (d.getMinutes() * 6) + '_short',
            ease: Bounce.easeOut
        });
        $('.clk_hr').each(function() {
            var z = parseFloat($(this).parent().attr('data-zone'));
            TweenMax.to($(this), 0.8, {
                rotationZ: (((d.getHours() + 0) + z) * 30) + (d.getMinutes() * 0.5) + '_short',
                ease: Bounce.easeOut
            });
        });
    }
    clockInt = setInterval(updateClock, 1000);
    updateClock();
}*/

