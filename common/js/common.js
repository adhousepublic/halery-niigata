/* Ready function */
$(document).ready(function(){

    $(function() {

        var reSizing = function () {
            var innfirstHeight = $('.inner_first_scene').innerHeight();
            // var topFirstscn = $('.top_first_scene').innerHeight();
            // $('#top-first-scene').css({
            //     'height' : topFirstscn
            // });
            $('#backlist-in-journey').on({
                click: function () {
                    $('html, body, .wrapper').stop().animate({ scrollTop: innfirstHeight }, 625, 'easeInOutExpo');
                    return false;
                }
            });
        };
        reSizing();

        //Scroll Event
        // var scrollPointEvent = function() {
        // };
        // scrollPointEvent();
        
        //parallax event
        // var paraScroll = function(){
        //     var pra1 = $(this).scrollTop() / - 50;
        //     var pra2 = $(this).scrollTop() / 50;
        //     var pra3 = $(this).scrollTop() / 100;
        //     var pra4 = $(this).scrollTop() / 200;
        //     var pra5 = $(this).scrollTop() / 25;
        //     var pra6 = $(this).scrollTop() / -250;
        //     $(".paraitem").css({
        //         "-webkit-transform" : "translate3d(0px, " + pra2 + "%, 0)",
        //         "-ms-transform" : "translate3d(0px, " + pra2 + "%, 0)",
        //         "transform" : "translate3d(0px, " + pra2 + "%, 0)"
        //     });
        //     $(".paraunit").css({
        //         "-webkit-transform" : "translate3d(0px, " + pra1 + "%, 0)",
        //         "-ms-transform" : "translate3d(0px, " + pra1 + "%, 0)",
        //         "transform" : "translate3d(0px, " + pra1 + "%, 0)"
        //     });
        //     $(".para_horizon_l").css({
        //         "-webkit-transform" : "translate3d(" + pra2 + "%, 0px, 0)",
        //         "-ms-transform" : "translate3d(" + pra2 + "%, 0px, 0)",
        //         "transform" : "translate3d(" + pra2 + "%, 0px, 0)"
        //     });
        //     $(".para_vertical_bg").css({
        //         "-webkit-transform" : "translate3d(0px, " + pra3 + "%, 0)",
        //         "-ms-transform" : "translate3d(0px, " + pra3 + "%, 0)",
        //         "transform" : "translate3d(0px, " + pra3 + "%, 0)"
        //     });
        //     $(".para_vertical_mv").css({
        //         "-webkit-transform" : "translate3d(0px, " + pra5 + "%, 0)",
        //         "-ms-transform" : "translate3d(0px, " + pra5 + "%, 0)",
        //         "transform" : "translate3d(0px, " + pra5 + "%, 0)"
        //     });
        //     $(".para_horizon_r").css({
        //         "-webkit-transform" : "translate3d(-" + pra4 + "%, 0px, 0)",
        //         "-ms-transform" : "translate3d(-" + pra4 + "%, 0px, 0)",
        //         "transform" : "translate3d(-" + pra4 + "%, 0px, 0)"
        //     });
        //     $(".para_opacity").css({
        //         'opacity' :  'calc(1 + ' + pra6 + ')'
        //     });
        // }
        // paraScroll();

        // var loadmoreEvent = function(){
        //     $(".pg_recipes .the_recipe").slice(0, 6).show();
        //     $("#load-more").click(function(e){
        //         e.preventDefault();
        //         $(".pg_recipes .the_recipe:hidden").slice(0, 6).show();
        //         if($(".pg_recipes .the_recipe:hidden").length == 0){
        //             alert('全てのレシピが読み込まれました！');
        //             $(this).addClass('load_false');
        //         }
        //     });
        // }
        // loadmoreEvent();

        // var moveEffect = function(){
        //     $('.mover_link').on({
        //         click: function () {
        //             var gotowhere = $(this).attr("href");
        //             function disableScroll(event) {
        //                 event.preventDefault();
        //               }
        //               document.addEventListener('touchmove', disableScroll, { passive: false });
        //             // $('.the_page_mover').css({
        //             //     "opacity": 0
        //             // });
        //             $('.the_page_mover').removeClass('loaded');
        //             $('.wrapper').removeClass('nav_is_close');
        //             setTimeout(function(){
        //                 $('html, body, .wrapper').stop().animate({ scrollTop: 0 }, 0.01);
        //             }, 450);
        //             setTimeout(function(){
        //                 window.location.href = gotowhere;
        //             }, 650);
        //             return false;
        //         }
        //     });
        // }
        // moveEffect();

        //jumping to member-section with scroll from report page
        // var anchorEvent = function(){
        //     var url = $(location).attr('href');
        //     if(url.indexOf("?id=") != -1){
        //         var id = url.split("?id=");
        //         var $target = $('#' + id[id.length - 1]);
        //         if($target.length){
        //             setTimeout(function(){
        //             var pos = $target.offset().top;
        //             $("html, body").animate({scrollTop:pos}, 800, 'easeInOutExpo');
        //             }, 1000);
        //         }
        //     }
        // }
        // anchorEvent();
        var topSlickelement = function(){
        $('.top_slide_of_campaign').slick({
            dots: true,
            nextArrow: '<span class="top_slider_nav top_slider_nav_next"></span>',
            prevArrow: '<span class="top_slider_nav top_slider_nav_prev"></span>',
            autoplay: true,
            autoplaySpeed: 3250,
            speed: 625,
            centerMode: true,
            centerPadding: '14.5%',
            slidesToShow: 1,
            // slidesToScroll: 1,
            cssEase: 'cubic-bezier(1,-0.45,.35,1.35)',
            responsive:[
                {
                    breakpoint: 642,
                    settings:{
                        centerPadding: false,
                        speed: 825,
                        cssEase: 'cubic-bezier(1,-0.65,.25,1.65)'
                    }
                }
            ]
        });
        }
        topSlickelement();

        $(window).resize(function() {
            reSizing();
            // scrollPointEvent();
            // paraScroll();
        });
        $(window).scroll(function() {
            reSizing();
            // scrollPointEvent();
            // paraScroll();
        });
        $(window).on('load',function(){
            topSlickelement();
            reSizing();
            // scrollPointEvent();
            // paraScroll();
            // loadmoreEvent();
            // anchorEvent();
            // $('html, body, .wrapper').stop().animate({ scrollTop: 0 }, 0.01);
            // function disableScroll(event) {
            //     event.preventDefault();
            //   }
            //   document.addEventListener('touchmove', disableScroll, { passive: false });
        });
        // $(window).on('beforeunload',function(){
        //     // $('.wrapper').removeClass('loaded nav_is_open').addClass('nav_is_close');
        //     $(window).scrollTop(0);
        // });

    });

    // $(function() {
    //     var animationFlag = false;
    //     $(window).on('scroll', function() {
    //         var scTop = $(window).scrollTop();
    //         var tgtTop = $('#the-virtual-homestaging').offset().top;
    //         if(scTop >= tgtTop) {
    //             if(!animationFlag) {
    //                 animationFlag = true;
    //                 $('#my-vrpnrm').children().append("<iframe src=" + "https://dist.repmp.com/cm/v1/inner.html?pid=QiFdtjjvWOutVJiC" + " scrolling=" + "no" + "></iframe>");
    //             }
    //         }
    //     })
    // });

    //click event

    $('.nav_switch_open').on({
        click: function () {
            $('.wrapper').removeClass('nav_is_close').addClass('nav_is_open');
            return false;
        }
    });

    $('.nav_switch_close').on({
        click: function () {
            $('.wrapper').removeClass('nav_is_open').addClass('nav_is_close');
            return false;
        }
    });

    $('#scroll-top').on({
        click: function () {
            $('html, body, .wrapper').stop().animate({ scrollTop: 0 }, 625, 'easeInOutExpo');
            // $('.wrapper').removeClass('nav_is_open').addClass('nav_is_close');
            // setTimeout(function(){
            //     $('.wrapper').removeClass('nav_is_close');
            // }, 500);
            return false;
        }
    });

    //mouse event
    // $('#the-nav .n_link').each(function() { hover的元素加current;其他元素加pandding
    //     $(this).on({
    //         mouseenter: function () {
    //             $('#the-nav .n_link').addClass('pandding');
    //             $(this).addClass('current').removeClass('pandding');
    //         },
    //         mouseleave: function () {
    //             $('#the-nav .n_link').removeClass('current pandding');
    //             $(this).removeClass('current pandding');
    //         }
    //     });
    // });

});

$(function(){
    var winHeightThis = $(window).innerHeight();
    var coverElmt = $('.common_load');
    var links = $('.mover_link');
    var transitUnt = $('.the_page_mover');
    var bar = $('#bar');
    links.on('click',function(event){
    event.preventDefault();
    coverElmt.removeClass('loaded');
    transitUnt.removeClass('nav_is_open').addClass('nav_is_close');
    setTimeout(function(){
        coverElmt.removeClass('loaded');
    }, 250);
    var href = $(this).attr('href'),
    wait = 550;
    setTimeout(function(){
    location.href = href ;
    }, wait);
    });
    var url = $(location).attr('href');
    var posMinus = winHeightThis * .2;
    if(url.indexOf("?id=") != -1){
        var id = url.split("?id=");
        var $target = $('#' + id[id.length - 1]);
        if($target.length){
            setTimeout(function(){
                var pos = $target.offset().top;
                var posMore = pos - posMinus;
                $("html, body").animate({scrollTop:posMore}, 1250, 'easeInOutExpo');
            }, 900);
        }
    };
    $('#page-top, #page-inner').imagesLoaded({ background: true })
    .progress( advanceLoading )
    .done( hideLoading )
    function advanceLoading(e){
    var length = e.images.length,
    count = e.progressedCount,
    progress =  ( count / length ) * 100;
    bar.width( progress + 'vw' );
    if( progress == 100 ){
    bar.addClass('is-hidden');
    }
    }
    function hideLoading(){
        setTimeout(function(){
            transitUnt.addClass('loaded');
        }, 125);
        setTimeout(function(){
            coverElmt.addClass('loaded');
        }, 350);
    }
    window.onpageshow = function(e) {
    if( e.persisted == true ){
    hideLoading();
    }
    }
});













