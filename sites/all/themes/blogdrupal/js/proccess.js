$(document).ready(function () {
    $(".curved").arctext({radius: 250, rotate: true, dir: 1});
    $("#slider1Nivo").nivoSlider({effect: "random", pauseTime: 8000, captionEasing: "linear", slices: 15, boxCols: 8, boxRows: 4, animSpeed: 500, startSlide: 0, directionNav: true, controlNav: true, controlNavThumbs: false, pauseOnHover: true, manualAdvance: false, prevText: "Prev", nextText: "Next", randomStart: false, beforeChange: function () {
    }, afterChange: function () {
    }, slideshowEnd: function () {
    }, lastSlide: function () {
    }, afterLoad: function () {
    }});
    $("#anythingSlider2").anythingSlider({autoPlay: false, expand: true, pauseOnHover: true, hashTags: false, buildNavigation: false, buildStartStop: false, delay: 8000});
    $(".box9").hide();
    $("#bkTable").click(function () {
        $(".box9").fadeToggle();
        return false
    });
    $(".ipad-box9").hide();
    $(".topBar .bookTable").click(function () {
        $(".ipad-box9").slideToggle();
        return false
    });
    $("form#bkForm input, textarea").blur(function () {
        var c = $(this);
        var b = false;
        if (c.val() == "") {
            b = true
        }
        if (c.data("type") == "email") {
            var d = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            var a = c.val().replace("#", "@");
            if (!d.test(a)) {
                b = true
            }
        }
        b ? c.addClass("error") : c.removeClass("error");
        return true
    });
    $("form#bkForm").submit(function () {
        $(this).find("input, textarea").trigger("blur");
        var a = $(this).find(".error").length;
        return a == 0
    });
    $("ul.mainMenu li.subMenu ul").hide();
    $("ul.mainMenu li.subMenu > a").click(function () {
        $("ul.mainMenu li.subMenu ul").hide();
        $(this).next("ul").toggle();
        return false
    });
    $("body").click(function () {
        $("ul.mainMenu li.subMenu ul").hide()
    });
    $("a[data-rel]").each(function () {
        $(this).attr("rel", $(this).data("rel"))
    });
    selectnav("nav")
});