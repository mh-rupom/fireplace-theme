<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><?php bloginfo('name'); ?></title> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="frp_container">
        <!-- sidebar -->
        <div class="frp_sidebar">
            <div class="frp_sidebar_logo">
                <img src="https://placehold.co/170x60/png" alt="">
                <div class="frp_text_after_logo">
                    <span>Design your perfect fireplace</span>
                </div>
            </div> 
            <div class="frp_sidebar_option frp_sidebar_reset">
                <img src="assets/images/reset_icon.svg" alt=""><span>Reset</span>
            </div>
            <div class="frp_sidebar_option frp_sidebar_choose_model" data-pagecontent="1">
                <span>CHOOSE A MODEL</span>
                <div class="frp_option_count count_inactive">
                    <span>1</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="2">
                <span>CHOOSE SIZE</span>
                <div class="frp_option_count count_inactive">
                    <span>2</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="3">
                <span>BACKGROUND</span>
                <div class="frp_option_count count_inactive">
                    <span>3</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="4">
                <span>BURNER</span>
                <div class="frp_option_count count_inactive">
                    <span>4</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="5">
                <span>MEDIA</span>
                <div class="frp_option_count count_inactive">
                    <span>5</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="6">
                <span>ROOM SCENE</span>
                <div class="frp_option_count count_inactive">
                    <span>6</span>
                </div>
                <div class="frp_triangle_right"></div>
                <div class="frp_triangle_left"></div>
            </div>
            <div class="frp_sidebar_option" data-pagecontent="7">
                <span class="turn_on_text">TURN ME ON</span>
                <div class="frp_option_count count_inactive">
                    <span>7</span>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="frp_content frp_content_with_header">
            <div class="frp_content_header">
                <div class="frp_header_menu_with_love_img">
                    <div class="frp_header_list_menus">
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="1">
                            <span>Model</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="2">
                            <span>Size</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="3">
                            <span>Background</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="4">
                            <span>Burner</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="5">
                            <span>Media</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="6">
                            <span>Room Scene</span>
                        </div>
                        <div class="frp_header_menu_item menu_inactive_background" data-headoption="7">
                            <span>Turn me on</span>
                        </div>
                    </div>
                    <div class="frp_content_header_love_img">
                        <img src="assets/images/love_soft_icon.svg" alt="">
                    </div>
                </div>
                <div class="frp_content_header_find_dealer">
                    <img src="assets/images/location_small_icon.svg" alt="">
                    <span>FIND DEALER</span>
                </div>
            </div>
            <!-- model content -->
            <div class="frp_main_content frp_choose_your_model_content" data-maincontent="1">
                <div class="frp_choose_your_model_text">
                    <span>Choose Your Model</span>
                </div>
                <div class="frp_choose_model_options">
                    <div class="frp_model">
                        <img src="https://placehold.co/250x230/png" alt="">
                        <label for="frp_model_field_1">
                            <input type="checkbox" name="" id="frp_model_field_1">
                            <span>TRADITIONAL</span>
                        </label>
                    </div>
                    <div class="frp_model">
                        <img src="https://placehold.co/250x230/png" alt="">
                        <label for="frp_model_field_2">
                            <input type="checkbox" name="" id="frp_model_field_2">
                            <span>FRONT</span>
                        </label>
                    </div>
                    <div class="frp_model">
                        <img src="https://placehold.co/250x230/png" alt="">
                        <label for="frp_model_field_3">
                            <input type="checkbox" name="" id="frp_model_field_3">
                            <span>THREE SIDED</span>
                        </label>
                    </div>
                    <div class="frp_model">
                        <img src="https://placehold.co/250x230/png" alt="">
                        <label for="frp_model_field_4">
                            <input type="checkbox" name="" id="frp_model_field_4">
                            <span>CORNER RS</span>
                        </label>
                    </div>
                    <div class="frp_model">
                        <img src="https://placehold.co/250x230/png" alt="">
                        <label for="frp_model_field_5">
                            <input type="checkbox" name="" id="frp_model_field_5">
                            <span>CORNER LS</span>
                        </label>
                    </div>
                </div>
                <div class="frp_model_btn frp_model_next_btn">
                    <button class="frp_a_btn frp_next_btn" data-pagecontent="2">NEXT</button>
                </div>
            </div>
            <!-- size content -->
            <div class="frp_main_content" data-maincontent="2">
                <div class="frp_choose_content frp_choose_your_size_content">
                    <div class="frp_choose_text frp_choose_your_size_text">
                        <span>Choose Your Size</span>
                    </div>
                    <div class="frp_choose_size_options">
                        <section>
                            <div class="frp_size_fields">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 75</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 75H</span>
                                </label>
                            </div>
                            <div class="frp_size_images">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                            </div>
                        </section>
                        <section>
                            <div class="frp_size_fields">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 110</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 110 H</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 110 HH</span>
                                </label>
                            </div>
                            <div class="frp_size_images">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                            </div>
                        </section>
                        <section>
                            <div class="frp_size_fields">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 130</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 130H</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 130HH</span>
                                </label>
                            </div>
                            <div class="frp_size_images">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                            </div>
                        </section>
                        <section>
                            <div class="frp_size_fields">
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 150</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 150H</span>
                                </label>
                                <label for="">
                                    <input type="checkbox" name="" id="">
                                    <span>Front 150HH</span>
                                </label>
                            </div>
                            <div class="frp_size_images">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                                <img src="https://placehold.co/100x80/png" alt="">
                            </div>
                        </section>
                    </div>
                </div>
                <div class="frp_right_side_content">
                    <div class="frp_you_are_designing_text">
                        <span>You are designing:</span>
                    </div>
                    <div class="frp_product_details">
                        <p>
                            <span class="frp_data_title">MODEL NO - </span><span>FRONT</span>
                        </p>
                        <p>
                            <span class="frp_data_title">LINEAR FIREPLACE - </span><span>Clear 110H</span>
                        </p>
                    </div>
                    <div class="frp_product_image">
                        <img src="https://placehold.co/150x120/png" alt="">
                    </div>
                    <div class="frp_btns ">
                        <button class="frp_a_btn frp_back_btn" data-pagecontent="">BACK</button>
                        <button class="frp_a_btn frp_next_btn" data-pagecontent="">NEXT</button>
                    </div>
                </div>
            </div>
            <!-- background -->
            <div class="frp_main_content" data-maincontent="3">
                <div class="frp_choose_content ">
                    <div class="frp_choose_text ">
                        <span>Choose Your Background</span>
                    </div>
                    <div class="frp_choose_fields">
                        <div class="frp_background">
                            <img src="https://placehold.co/175x100/png" alt="">
                            <label for="frp_background_field_1">
                                <input type="checkbox" name="" id="frp_background_field_1">
                                <span>Black Reflection Panel</span>
                            </label>
                        </div>
                        <div class="frp_background">
                            <img src="https://placehold.co/175x100/png" alt="">
                            <label for="frp_background_field_2">
                                <input type="checkbox" name="" id="frp_background_field_2">
                                <span>Standard Panel</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="frp_right_side_content">
                    <div class="frp_you_are_designing_text">
                        <span>You are designing:</span>
                    </div>
                    <div class="frp_product_details">
                        <p>
                            <span class="frp_data_title">MODEL NO - </span><span>FRONT</span>
                        </p>
                        <p>
                            <span class="frp_data_title">LINEAR FIREPLACE - </span><span>Clear 110H</span>
                        </p>
                        <p>
                            <span class="frp_data_title">BACKGROUND - </span><span>Standard Panel</span>
                        </p>
                    </div>
                    <div class="frp_product_image">
                        <img src="https://placehold.co/300x180/png" alt="">
                    </div>
                    <div class="frp_btns ">
                        <button class="frp_a_btn frp_back_btn" data-backbtn="">BACK</button>
                        <button class="frp_a_btn frp_next_btn" data-nextbtn="">NEXT</button>
                    </div>
                </div>
            </div>
            <!-- burner content -->
            <div class="frp_main_content" data-maincontent="4">
                <div class="frp_choose_content ">
                    <div class="frp_choose_text ">
                        <span>Choose Your Burner</span>
                    </div>
                    <div class="frp_choose_fields frp_choose_burner">
                        <div class="frp_burner">
                            <img src="https://placehold.co/300x80/png" alt="">
                            <label for="frp_burner_field_1">
                                <input type="checkbox" name="" id="frp_burner_field_1">
                                <span>FLAT BURNER</span>
                            </label>
                        </div>
                        <div class="frp_burner">
                            <img src="https://placehold.co/300x80/png" alt="">
                            <label for="frp_burner_field_2">
                                <input type="checkbox" name="" id="frp_burner_field_2">
                                <span>WILDERNESS</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="frp_right_side_content">
                    <div class="frp_you_are_designing_text">
                        <span>You are designing:</span>
                    </div>
                    <div class="frp_product_details">
                        <p>
                            <span class="frp_data_title">MODEL NO - </span><span>FRONT</span>
                        </p>
                        <p>
                            <span class="frp_data_title">LINEAR FIREPLACE - </span><span>Clear 110H</span>
                        </p>
                        <p>
                            <span class="frp_data_title">BACKGROUND - </span><span>Standard Panel</span>
                        </p>
                        <p>
                            <span class="frp_data_title">BURNER - </span><span>FLAT BURNER</span>
                        </p>
                    </div>
                    <div class="frp_product_image">
                        <img src="https://placehold.co/330x210/png" alt="">
                    </div>
                    <div class="frp_btns ">
                        <button class="frp_a_btn frp_back_btn" data-backbtn="">BACK</button>
                        <button class="frp_a_btn frp_next_btn" data-nextbtn="">NEXT</button>
                    </div>
                </div>
            </div>
            <!-- media content -->
            <div class="frp_main_content" data-maincontent="5">
                <div class="frp_choose_content ">
                    <div class="frp_choose_text ">
                        <span>Choose Your Media</span>
                    </div>
                    <div class="frp_choose_media_items">
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Bonfire Logs w/ Black Embers</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Long or Short Branches</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Refactory Clay Log Set</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Weathered Driftwood L</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Small Gray Pebble Set</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Large Gray Pebble Set</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Small White Pebble Set</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Large White Pebble Set</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                        <div class="frp_media_item">
                            <img src="https://placehold.co/140x94/png" alt="">
                            <label for="">
                                <span>Ancient Amber</span>
                                <input type="checkbox" name="" id="">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="frp_right_side_content">
                    <div class="frp_you_are_designing_text">
                        <span>You are designing:</span>
                    </div>
                    <div class="frp_product_details">
                        <p>
                            <span class="frp_data_title">MODEL NO - </span><span>FRONT</span>
                        </p>
                        <p>
                            <span class="frp_data_title">LINEAR FIREPLACE - </span><span>Clear 110H</span>
                        </p>
                        <p>
                            <span class="frp_data_title">BACKGROUND - </span><span>Standard Panel</span>
                        </p>
                        <p>
                            <span class="frp_data_title">BURNER - </span><span>FLAT BURNER</span>
                        </p>
                    </div>
                    <div class="frp_product_image">
                        <img src="https://placehold.co/150x120/png" alt="">
                    </div>
                    <div class="frp_btns ">
                        <button class="frp_a_btn frp_back_btn" data-backbtn="">BACK</button>
                        <button class="frp_a_btn frp_next_btn" data-nextbtn="">NEXT</button>
                    </div>
                </div>
            </div>
            <!-- Room scene content -->
            <div class="frp_main_content" data-maincontent="6">
                <div class="frp_choose_content ">
                    <div class="frp_choose_text ">
                        <span>Choose Your Media</span>
                    </div>
                    <div class="frp_choose_room_scene_items">
                        <div class="frp_room_scene_item">
                            <img src="https://placehold.co/100x80/png" alt="">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Large Gray Pebble Set</span>
                            </label>
                        </div>
                        <div class="frp_room_scene_item">
                            <img src="https://placehold.co/100x80/png" alt="">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Small White Pebble Set</span>
                            </label>
                        </div>
                        <div class="frp_room_scene_item">
                            <img src="https://placehold.co/100x80/png" alt="">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Large White Pebble Set</span>
                            </label>
                        </div>
                        <div class="frp_room_scene_item">
                            <img src="https://placehold.co/100x80/png" alt="">
                            <label for="">
                                <input type="checkbox" name="" id="">
                                <span>Ancient Amber</span>
                            </label>
                        </div>
                    </div>
                    <div class="frp_room_scene_upload_file">
                        <div class="frp_upload_file_what_to_see_text">
                            <span>What to see what it will look like for you?</span>
                            <label for="frp_upload_file_input">
                                <input type="file" name="" id="frp_upload_file_input" hidden>
                                <span><img src="assets/images/add_icon.svg" alt=""></span>
                            </label>
                            <button class="frp_uplaod_file_btn">
                                <span>Upload a facade view of the room</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="frp_right_side_content frp_right_content_room_scene_or_turn_me_on">
                    <div class="frp_room_scene_turn_me_on_right_content_img">
                        <img src="https://placehold.co/150x220/png" alt="">
                    </div>
                    <div class="frp_room_scene_or_turn_on_right_content_data_table">
                        <table>
                            <tr>
                                <th>TYPE</th>
                                <th>SELECTION</th>
                            </tr>
                            <tr>
                                <td>MODEL</td>
                                <td>Front</td>
                            </tr>
                            <tr>
                                <td>SIZE</td>
                                <td>Clear 150</td>
                            </tr>
                            <tr>
                                <td>BURNER</td>
                                <td>Flet BURNER</td>
                            </tr>
                            <tr>
                                <td>MEDIA</td>
                                <td>Stones</td>
                            </tr>
                            <tr>
                                <td>BACKGROUND</td>
                                <td>Black Panel</td>
                            </tr>
                            <tr>
                                <td>ROOM SCENE</td>
                                <td>Tile Wall</td>
                            </tr>
                        </table>
                    </div>
                    <div class="frp_save_wishlist_get_quote_find_dealer">
                        <div class="frp_wishlist_quote_dealer frp_save_wishlist">
                            <span>SAVE MY WISHLIST</span><span><img src="assets/images/love_icon.svg" alt=""></span>
                        </div>
                        <div class="frp_wishlist_quote_dealer frp_get_quote">
                            <span>GET A QUOTE</span><span><img src="assets/images/quote_icon.svg" alt=""></span>
                        </div>
                        <div class="frp_wishlist_quote_dealer frp_find_dealer">
                            <span>FIND YOUR DEALER</span><span><img src="assets/images/location_icon.svg" alt=""></span>
                        </div>
                    </div>
                    <div class="frp_right_content_room_scene_or_turn_on_icons">
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/whatsapp_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/facebook_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/social_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/fax_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/mail_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon share_icon_text">
                            <span><img src="assets/images/share_icon.svg" alt=""></span><span>SHARE YOUR DESIGN</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- turn me on content -->
            <div class="frp_main_content" data-maincontent="7">
                <div class="frp_choose_content content_turn_on_me">
                    <div class="frp_turn_on_me_background_img">
                        <!-- <img src="assets/images/room_img.jpeg" alt=""> -->
                    </div>
                    <div class="frp_turn_on_me_fire_img">
                        <img src="https://placehold.co/150x120/png" alt="">
                    </div>
                </div>
                <div class="frp_right_side_content frp_right_content_room_scene_or_turn_me_on">
                    <div class="frp_room_scene_turn_me_on_right_content_img">
                        <img src="https://placehold.co/150x200/png" alt="">
                    </div>
                    <div class="frp_room_scene_or_turn_on_right_content_data_table">
                        <table>
                            <tr>
                                <th>TYPE</th>
                                <th>SELECTION</th>
                            </tr>
                            <tr>
                                <td>MODEL</td>
                                <td>Front</td>
                            </tr>
                            <tr>
                                <td>SIZE</td>
                                <td>Clear 150</td>
                            </tr>
                            <tr>
                                <td>BURNER</td>
                                <td>Flet BURNER</td>
                            </tr>
                            <tr>
                                <td>MEDIA</td>
                                <td>Stones</td>
                            </tr>
                            <tr>
                                <td>BACKGROUND</td>
                                <td>Black Panel</td>
                            </tr>
                            <tr>
                                <td>ROOM SCENE</td>
                                <td>Tile Wall</td>
                            </tr>
                        </table>
                    </div>
                    <div class="frp_save_wishlist_get_quote_find_dealer">
                        <div class="frp_wishlist_quote_dealer frp_save_wishlist">
                            <span>SAVE MY WISHLIST</span><span><img src="assets/images/love_icon.svg" alt=""></span>
                        </div>
                        <div class="frp_wishlist_quote_dealer frp_get_quote">
                            <span>GET A QUOTE</span><span><img src="assets/images/quote_icon.svg" alt=""></span>
                        </div>
                        <div class="frp_wishlist_quote_dealer frp_find_dealer">
                            <span>FIND YOUR DEALER</span><span><img src="assets/images/location_icon.svg" alt=""></span>
                        </div>
                    </div>
                    <div class="frp_right_content_room_scene_or_turn_on_icons">
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/whatsapp_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/facebook_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/social_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/fax_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon">
                            <span><img src="assets/images/mail_icon.svg" alt=""></span>
                        </div>
                        <div class="room_scene_or_turn_on_icon share_icon_text">
                            <span><img src="assets/images/share_icon.svg" alt=""></span><span class="share_design_text">SHARE YOUR DESIGN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
