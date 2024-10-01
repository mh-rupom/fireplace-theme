jQuery(document).ready(function($) {
    // $.each($('.frp_content .frp_main_content'), function () { 
    //      $(this).hide();
    // });
    $('.frp_content .frp_main_content').hide().end().find('.frp_choose_your_model_content').show();
    $('.frp_content .frp_header_menu_item').hide().eq(0).show()
    $('.frp_content .frp_header_menu_item').eq(0).removeClass('menu_inactive_background')
    $('.frp_sidebar .frp_sidebar_option').eq(1).find('.frp_option_count').removeClass('count_inactive');
    let pagecontent = '';
    $(document).on('click', '.frp_sidebar .frp_sidebar_option,.frp_content .frp_main_content .frp_a_btn', function() {
        pagecontent = $(this).data('pagecontent');
        if (pagecontent) {
            $('.frp_sidebar .frp_option_count').addClass('count_inactive');
            $('.frp_sidebar .frp_sidebar_option[data-pagecontent="' + pagecontent + '"] .frp_option_count').removeClass('count_inactive');
            $('.frp_content .frp_header_menu_item').addClass('menu_inactive_background')
            $('.frp_content .frp_header_menu_item[data-headoption="' + pagecontent + '"]').removeClass('menu_inactive_background')
            $('.frp_content .frp_main_content,.frp_content .frp_choose_your_model_content').hide();
            $('.frp_content .frp_main_content[data-maincontent="' + pagecontent + '"]').fadeIn();
        }
        $('.frp_content .frp_header_menu_item').hide()
        for (let menu_item = 1; menu_item <= pagecontent ; menu_item++){
            $('.frp_content .frp_header_menu_item[data-headoption="' + menu_item + '"]').fadeIn()
        }
        $('.frp_content .frp_main_content .frp_next_btn').attr('data-pagecontent', pagecontent + 1);
        $('.frp_content .frp_main_content .frp_back_btn').attr('data-pagecontent', pagecontent - 1);
    });
    $(document).on('click','.frp_sidebar .frp_sidebar_reset',function(){
        $('.frp_content .frp_main_content').fadeOut()
        $('.frp_content .frp_header_menu_item').fadeOut()
    })
});
