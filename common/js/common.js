/* Ready function */
$(document).ready(function(){

    $(function() {

        var reSizing = function () {
            var topFirstscn = $('.top_first_scene').innerHeight();
            $('#top-first-scene').css({
                'height' : topFirstscn
            });
            $('#backlist-in-journey').on({
                click: function () {
                    var innfirstHeight = $('.inner_first_scene').innerHeight();
                    $('html, body, .wrapper').stop().animate({ scrollTop: innfirstHeight }, 625, 'easeInOutExpo');
                    return false;
                }
            });
            $('.salts_call').on({
                click: function () {
                    var snackshowHere = $('.salts_item_group').innerHeight();
                    $('html, body, .wrapper').stop().animate({ scrollTop: snackshowHere }, 250);
                    return false;
                }
            });
        };
        reSizing();

        var itemThumbs = function () {
            $('.salts_thumb_img').each(function() {
                var src = $(this).attr('data-href');
                $(this).css({
                    'background-image' : 'url(' + src + ')'
                });
            });
        };
        itemThumbs();

        var itemimgChange = function () {
            $('.salts_item_img_default, .salts_itemimg_tmb_list_1').addClass('current');
            var next = "";
            var now = "";
            $('.salts_itemimg_tmb_list').click(function () {
                $('.salts_item_img_list, .salts_itemimg_tmb_list').removeClass('current');
                next = "#" + $(this).attr('data-itemname');
                if (next == now) {
                    $('.salts_itemimg_tmb_list').removeClass('current');
                    $(next).addClass('current');
                    now = "";
                } else {
                    if (now) {
                        $('.salts_item_img_list, .salts_itemimg_tmb_list').removeClass('current');
                        $(this).addClass('current');
                        // $('.salts_item_img_list').removeClass('current');
                        $(next).addClass('current');
                    } else {
                        $(this).addClass('current');
                        $(next).addClass('current');
                    }
                    now = next;
                }
                return false;
            });
        };
        itemimgChange();

        var itemelmtCall = function () {
            $('.salts_item_group, .salts_item_list').addClass('is__pandding');
            var next = "";
            var now = "";
            $('.salts_call').click(function () {
                $('.salts_thumb_group').addClass('act__on');
                setTimeout(function(){
                    $('.salts_item_group').removeClass('is__pandding');
                }, 550);
                next = "#" + $(this).attr('data-call');
                if (next == now) {
                    // $('.salts_call').removeClass('is__pandding');
                    setTimeout(function(){
                        $(next).removeClass('is__pandding');
                    }, 550);
                    now = "";
                } else {
                    if (now) {
                        $('.salts_item_list').addClass('is__pandding');
                        // $(this).removeClass('is__pandding');
                        // $('.salts_item_img_list').removeClass('current');
                        setTimeout(function(){
                            $(next).removeClass('is__pandding');
                        }, 550);
                    } else {
                        // $(this).removeClass('is__pandding');
                        setTimeout(function(){
                            $(next).removeClass('is__pandding');
                        }, 550);
                    }
                    now = next;
                }
                return false;
            });
            $('.salts_item_close').on({
                click: function () {
                    $('.salts_thumb_group').removeClass('act__on');
                    $('.salts_item_group, .salts_item_list').addClass('is__pandding');
                    $('.salts_item_img_list, .salts_itemimg_tmb_list').removeClass('current');
                    setTimeout(function(){
                        $('.salts_item_img_default, .salts_itemimg_tmb_list_1').addClass('current');
                    }, 10);
                    return false;
                }
            });
        };
        itemelmtCall();

        //Scroll Event
        var scrollPointEvent = function() {
            var scrollValue = $(window).scrollTop();
            $('.elmt_show_position').each(function() {
                var elmyshowTop =  $(this).offset().top;
                if (scrollValue > elmyshowTop - 150) {
                    $('.tfs_elmt_ikastr_ika, .tfs_elmt_the_ikastr_ika, .tfs_elmt_ikastr_curtainleft, .tfs_elmt_ikaalien, .tfs_elmt_ikauruma, .tfs_elmt_couple').removeClass('is__pandding');
                    $('.tfs_elmt_cloud_1_wrap').removeClass('elmt_show_position');
                    setTimeout(function(){
                        $('.tfs_elmt_the_ikauruma_lefthand, .tfs_elmt_the_ikauruma_righthand').removeClass('is__pandding');
                    }, 2250);
                };
            });
            $('.stage_show_here').each(function() {
                var scrollunitTop =  $(this).offset().top;
                if (scrollValue > scrollunitTop ) {
                    setTimeout(function(){
                        $('.stage_decorate_2_left, .stage_decorate_2_right').addClass('act__on');
                    }, 250);
                    setTimeout(function(){
                        $('.stage_1_the_ikauruma_lefthand').addClass('act__fin');
                    }, 550);
                    setTimeout(function(){
                        $('.stage_1_the_ikauruma_righthand').addClass('act__fin');
                    }, 600);
                    setTimeout(function(){
                        $('.stage_1_ikauruma_wrap, .stage_1_the_ika').addClass('act__on');
                    }, 2075);
                    setTimeout(function(){
                        $('.stage_1_desc_dailogue').addClass('act__on');
                    }, 2300);
                    setTimeout(function(){
                        $('.stage_1_desc_text').addClass('act__on');
                    }, 2450);
                    setTimeout(function(){
                        $('.stage_slider_nav_next').addClass('act__on');
                    }, 3400);
                    setTimeout(function(){
                        $('.inn_slide_of_stage .slick-dots').addClass('act__on');
                    }, 4200);
                };
            });
        };
        scrollPointEvent();

        var allSlickelement = function(){
        }
        allSlickelement();

        $(window).resize(function() {
            reSizing();
            scrollPointEvent();
        });
        $(window).scroll(function() {
            reSizing();
            scrollPointEvent();
        });
        $(window).on('load',function(){
            allSlickelement();
            reSizing();
            itemThumbs();
            itemimgChange();
            itemelmtCall();
            scrollPointEvent();
            $(window).scrollTop(0);
        });
        $(window).on('beforeunload',function(){
            $('.wrapper').removeClass('nav_is_open').addClass('nav_is_close');
            $('.common_load').removeClass('loaded');
            $('#top-first-scene').removeClass('activated');
            setTimeout(function(){
                $(window).scrollTop(0);
            }, .1);
        });

    });

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
            return false;
        }
    });

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
    $('.inn_slide_of_stage').slick({
        dots: true,
        nextArrow: '<span class="stage_slider_nav stage_slider_nav_next"></span>',
        prevArrow: '<span class="stage_slider_nav stage_slider_nav_prev"></span>',
        infinite: false,
        speed: 525,
        vertical: false,
        rtl: true,
        swipe: false,
        cssEase: 'cubic-bezier(.15,.7,.25,1)',
        responsive:[
            {
                breakpoint: 962,
                settings:{
                    vertical: true,
                    rtl: false
                }
            }
        ]
    });

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
            $(window).scrollTop(0);
        }, 1);
        setTimeout(function(){
            transitUnt.addClass('loaded');
        }, 125);
        setTimeout(function(){
            coverElmt.addClass('loaded');
        }, 350);
        setTimeout(function(){
            $('.tfs_elmt_mlogo').removeClass('is__pandding');
        }, 800);
        setTimeout(function(){
            $('#top-first-scene, .tfs_elmt_moon, .tfs_elmt_sun').removeClass('is__pandding');
        }, 1500);
        setTimeout(function(){
            $('.tfs_elmt_ikastore').removeClass('is__pandding');
        }, 3000);
        setTimeout(function(){
            $('html').removeClass('top_page');
            $('#top-first-scene').addClass('activated');
            $('.tfs_elmt_cloud_1_wrap').addClass('elmt_show_position');
        }, 5700);
        setTimeout(function(){
            $('.tfs_elmt_mtfuji').removeClass('is__pandding');
        }, 7600);
        setTimeout(function(){
            $('.tfs_elmt_baloon_1, .tfs_elmt_baloon_2').removeClass('is__pandding');
        }, 10000);
    }
    window.onpageshow = function(e) {
    if( e.persisted == true ){
    hideLoading();
    }
    }
});













