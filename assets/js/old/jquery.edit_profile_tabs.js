/*!
 * Simple jQuery Equal Heights
 *
 * Copyright (c) 2013 Matt Banks
 * Dual licensed under the MIT and GPL licenses.
 * Uses the same license as jQuery, see:
 * http://docs.jquery.com/License
 *
 * @version 1.5.1
 */
$( document ).ready(function() {

    $('.loading_img').css('display', 'none');
     $("#ac_second_tab").hide();
     $("#ac_third_tab").hide();
     $("#ac_fourth_tab").hide();
     $("#ac_first_tab").fadeIn();
     $("#detail_one").addClass("ac_active");
     $("#detail_one").removeClass("ac_same");
     $("#detail_two").removeClass("ac_active");
     $("#detail_three").removeClass("ac_active");
     $("#detail_four").removeClass("ac_active");


    $("#detail_one").click(function(){
    $('.loading_img').css('display', 'block');
    setTimeout(function(){         
     $("#ac_second_tab").hide();
     $("#ac_third_tab").hide();
     $("#ac_fourth_tab").hide();
     $("#ac_first_tab").fadeIn();
     $("#detail_one").addClass("ac_active");
     $("#detail_one").removeClass("ac_same");
     $("#detail_two").removeClass("ac_active");
     $("#detail_two").addClass("ac_same");
     $("#detail_three").removeClass("ac_active");
     $("#detail_three").addClass("ac_same");
     $("#detail_four").removeClass("ac_active");
     $("#detail_four").addClass("ac_same");
     $('.loading_img').css('display', 'none');
    }, 1200);
    });


    $("#detail_two").click(function(){
    $('.loading_img').css('display', 'block');
    setTimeout(function(){         
     $("#ac_first_tab").hide();
     $("#ac_third_tab").hide();
     $("#ac_fourth_tab").hide();
     $("#ac_second_tab").fadeIn();
     $("#detail_two").addClass("ac_active");
     $("#detail_two").removeClass("ac_same");
     $("#detail_one").removeClass("ac_active");
     $("#detail_one").addClass("ac_same");
     $("#detail_three").removeClass("ac_active");
     $("#detail_three").addClass("ac_same");
     $("#detail_four").removeClass("ac_active");
     $("#detail_four").addClass("ac_same");
     $('.loading_img').css('display', 'none');
    }, 1200);
    });

    $("#detail_three").click(function(){
    $('.loading_img').css('display', 'block');
    setTimeout(function(){         
     $("#ac_first_tab").hide();
     $("#ac_second_tab").hide();
     $("#ac_fourth_tab").hide();
     $("#ac_third_tab").fadeIn();
     $("#detail_three").addClass("ac_active");
     $("#detail_three").removeClass("ac_same");
     $("#detail_two").removeClass("ac_active");
     $("#detail_two").addClass("ac_same");
     $("#detail_one").addClass("ac_same");
     $("#detail_four").addClass("ac_same");
     $("#detail_one").removeClass("ac_active");
     $("#detail_four").removeClass("ac_active");
     $('.loading_img').css('display', 'none');
    }, 1200);
    });

    $("#detail_four").click(function(){
    $('.loading_img').css('display', 'block');
    setTimeout(function(){         
     $("#ac_first_tab").hide();
     $("#ac_second_tab").hide();
     $("#ac_third_tab").hide();
     $("#ac_fourth_tab").fadeIn();
     $("#detail_four").addClass("ac_active");
     $("#detail_four").removeClass("ac_same");
     $("#detail_two").removeClass("ac_active");
     $("#detail_two").addClass("ac_same");
     $("#detail_one").addClass("ac_same");
     $("#detail_three").addClass("ac_same");
     $("#detail_one").removeClass("ac_active");
     $("#detail_three").removeClass("ac_active");
     $('.loading_img').css('display', 'none');
    }, 1200);
    });

    $(".ac_prof_details").hide();
    // $('#ac_toggle_up').css('display', 'block');
    $(".ac_profle").click(function(){
    setTimeout(function(){  
    $(".ac_toggle_up").toggle();
    $(".ac_prof_details").fadeToggle();
}, 100);


    });

$(".ac_changepass").hide();
    // $('#ac_toggle_up').css('display', 'block');
    $(".ac_pass").click(function(){
    setTimeout(function(){  
    $(".ac_toggle_up_two").toggle();
    $(".ac_changepass").fadeToggle();
}, 100);
});

  $(".ac_pref_detail").hide();
    // $('#ac_toggle_up').css('display', 'block');
    $(".ac_prefer").click(function(){
    setTimeout(function(){  
    $(".ac_toggle_up_three").toggle();
    $(".ac_pref_detail").fadeToggle();
}, 100);
});  
    });
