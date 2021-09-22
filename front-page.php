<?php get_header();
?>
<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    ?>
  <main id="main-content">
    <div id="top-first-scene">
      <div class="top_first_scene">
        <!-- main-logo -->
        <div class="tfs_elmt_mlogo">
          <div class="tfs_elmt_mlogo_cntr">
            <div class="tfs_elmt_mlogo_dialogue">
              <svg class="tfs_elmt_mlogo_dlog_wrap" viewbox="0 0 550 70">
                <use xlink:href="#use-logo-main-dialogue" class="tfs_elmt_mlogo_the_dlog"></use>
              </svg>
            </div>
            <div class="tfs_elmt_mlogo_main">
              <svg class="tfs_elmt_mlogo_main_wrap" viewbox="0 0 405 216">
                <use xlink:href="#use-logo-main" class="tfs_elmt_mlogo_the_main"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- //main-logo -->
        <!-- elements on the sky -->
        <div class="tfs_elmts_on_the_sky">
          <div class="tfs_elmts_sky_content">
            <div class="tfs_elmt_moon">
                            <span class="tfs_elmt_moon_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-moon-1.svg" class="tfs_elmt_the_moon" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_sun">
                            <span class="tfs_elmt_sun_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-sun-1.svg" class="tfs_elmt_the_sun" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_cloud_1">
                            <span class="tfs_elmt_cloud_1_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-cloud-1.svg" class="tfs_elmt_the_cloud_1" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_baloon_2">
                            <span class="tfs_elmt_baloon_2_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-baloon-2.svg" class="tfs_elmt_the_baloon_2" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_jets">
              <div class="tfs_elmt_jets_wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-jets-1_body.svg" class="tfs_elmt_the_jets_body" alt="">
                <span class="tfs_elmt_jets_propeller">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-jets-2_propeller-1.svg" class="tfs_elmt_the_jets_propeller" alt="">
                                </span>
                <span class="tfs_elmt_jets_screw">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-jets-1_screw.svg" class="tfs_elmt_the_jets_screw" alt="">
                                </span>
              </div>
            </div>
            <div class="tfs_elmt_bird">
                            <span class="tfs_elmt_bird_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-bird-1.svg" class="tfs_elmt_the_bird" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_baloon_1">
                            <span class="tfs_elmt_baloon_1_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-baloon-1.svg" class="tfs_elmt_the_baloon_1" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_cloud_2">
                            <span class="tfs_elmt_cloud_2_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-cloud-2.svg" class="tfs_elmt_the_cloud_2" alt="">
                            </span>
            </div>
          </div>
        </div>
        <!-- //elements on the sky -->
        <!-- elements behind the ground -->
        <div class="tfs_elmts_behind_the_ground">
          <div class="tfs_elmts_behindground_content">
            <div class="tfs_elmt_mtfuji">
                            <span class="tfs_elmt_mtfuji_wrap">
                                <span class="tfs_elmt_fire_ohkasi tfs_elmt_fire_ohkasi_1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ohtsumami-1.svg" class="tfs_elmt_the_fire_ohkasi" alt="">
                                </span>
                                <span class="tfs_elmt_fire_ohkasi tfs_elmt_fire_ohkasi_2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ohtsumami-1.svg" class="tfs_elmt_the_fire_ohkasi" alt="">
                                </span>
                                <span class="tfs_elmt_fire_ohkasi tfs_elmt_fire_ohkasi_3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ohtsumami-1.svg" class="tfs_elmt_the_fire_ohkasi" alt="">
                                </span>
                                <span class="tfs_elmt_fire_ohkasi tfs_elmt_fire_ohkasi_4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ohtsumami-1.svg" class="tfs_elmt_the_fire_ohkasi" alt="">
                                </span>
                                <span class="tfs_elmt_fire_ohkasi tfs_elmt_fire_ohkasi_5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ohtsumami-1.svg" class="tfs_elmt_the_fire_ohkasi" alt="">
                                </span>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-fuji-1.svg" class="tfs_elmt_the_mtfuji" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_tokei">
                            <span class="tfs_elmt_tokei_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-tokeitai-1.svg" class="tfs_elmt_the_tokei" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_skytree">
                            <span class="tfs_elmt_skytree_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-skytree-1.svg" class="tfs_elmt_the_skytree" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_otera">
                            <span class="tfs_elmt_otera_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-otera-1.svg" class="tfs_elmt_the_otera" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_jesuschrist">
                            <span class="tfs_elmt_jesuschrist_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-jesuschrist-1.svg" class="tfs_elmt_the_jesuschrist" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_butsu">
                            <span class="tfs_elmt_butsu_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-butsu-1.svg" class="tfs_elmt_the_butsu" alt="">
                            </span>
            </div>
            <div class="tfs_elmt_green">
                            <span class="tfs_elmt_plant tfs_elmt_plant_1">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
              <span class="tfs_elmt_plant tfs_elmt_plant_2">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
              <span class="tfs_elmt_plant tfs_elmt_plant_3">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
              <span class="tfs_elmt_plant tfs_elmt_plant_4">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
              <span class="tfs_elmt_plant tfs_elmt_plant_5">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
              <span class="tfs_elmt_plant tfs_elmt_plant_6">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-plant-1.svg" class="tfs_elmt_the_plant" alt="">
                            </span>
            </div>
          </div>
        </div>
        <!-- //elements behind the ground -->
        <!-- elements on the ground -->
        <div class="tfs_elmts_on_the_ground">
          <div class="tfs_elmts_ground_content">
            <div class="tfs_elmt_the_ground">
                            <span class="tfs_elmt_the_ground_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-theroad-1.svg" class="tfs_elmt_the_road" alt="">
                            </span>
            </div>
            <div class="tfs_elmts_on_the_ground_wrap">
              <div class="tfs_elmt_ikastore">
                                <span class="tfs_elmt_ikastore_wrap">
                                    <span class="tfs_elmt_ikastr_ptrleft">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_parts-1.svg" class="tfs_elmt_the_ikastr_ptrleft" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_ptrright">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_parts-2.svg" class="tfs_elmt_the_ikastr_ptrleft" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_foot_2 tfs_elmt_ikastr_foot_2_left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-6-foot-2.svg" class="tfs_elmt_the_ikastr_foot_2" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_foot_2 tfs_elmt_ikastr_foot_2_right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-6-foot-2.svg" class="tfs_elmt_the_ikastr_foot_2" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_foot_1 tfs_elmt_ikastr_foot_1_left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-6-foot-1.svg" class="tfs_elmt_the_ikastr_foot_1" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_foot_1 tfs_elmt_ikastr_foot_1_right">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-6-foot-1.svg" class="tfs_elmt_the_ikastr_foot_1" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-1.svg" class="tfs_elmt_the_building_main" alt="">
                                    <span class="tfs_elmt_ikastr_boy">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-4-boy.svg" class="tfs_elmt_the_ikastr_boy" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_girl">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-3_building_main-5-girl.svg" class="tfs_elmt_the_ikastr_girl" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_curtainleft">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-2_curtain-left-1-12.svg" class="tfs_elmt_the_ikastr_curtainleft" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_ika">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-1.svg" class="tfs_elmt_the_ikastr_ika" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_curtainright">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-2_curtain-right.svg" class="tfs_elmt_the_ikastr_curtainright" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_sign">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ikastore-1_sign.svg" class="tfs_elmt_the_ikastr_sign" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikastr_eyeleft">
                                        <svg class="tfs_elmt_ikastr_eyeleft_base tfs_elmt_ikastr_eye_base_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-base" class="tfs_elmt_the_ikastr_eyeleft_base"></use>
                                        </svg>
                                        <svg class="tfs_elmt_ikastr_eyeleft_border tfs_elmt_ikastr_eye_border_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-border" class="tfs_elmt_the_ikastr_eyeleft_border"></use>
                                        </svg>
                                        <svg class="tfs_elmt_ikastr_eyeleft_ball tfs_elmt_ikastr_eye_ball_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-ball" class="tfs_elmt_the_ikastr_eyeleft_ball"></use>
                                        </svg>
                                    </span>
                                    <span class="tfs_elmt_ikastr_eyeright">
                                        <svg class="tfs_elmt_ikastr_eyeright_base tfs_elmt_ikastr_eye_base_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-base" class="tfs_elmt_the_ikastr_eyeright_base"></use>
                                        </svg>
                                        <svg class="tfs_elmt_ikastr_eyeright_border tfs_elmt_ikastr_eye_border_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-border" class="tfs_elmt_the_ikastr_eyeright_border"></use>
                                        </svg>
                                        <svg class="tfs_elmt_ikastr_eyeright_ball tfs_elmt_ikastr_eye_ball_color" viewbox="0 0 26 23">
                                            <use xlink:href="#use-ikastore-eye-ball" class="tfs_elmt_the_ikastr_eyeright_ball"></use>
                                        </svg>
                                    </span>
                                </span>
              </div>
              <div class="tfs_elmt_walkpeople tfs_elmt_walklady">
                                <span class="tfs_elmt_walkpeople_wrap tfs_elmt_walklady_wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-walklady-1.svg" class="tfs_elmt_the_walkpeople tfs_elmt_the_walklady" alt="">
                                </span>
              </div>
              <div class="tfs_elmt_walkpeople tfs_elmt_walkman">
                                <span class="tfs_elmt_walkpeople_wrap tfs_elmt_walkman_wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-walkman-1.svg" class="tfs_elmt_the_walkpeople tfs_elmt_the_walkman" alt="">
                                </span>
              </div>
              <div class="tfs_elmt_ikauriko tfs_elmt_ikauriko_male">
                                <span class="tfs_elmt_ikauriko_wrap tfs_elmt_ikauriko_male_wrap">
                                    <span class="tfs_elmt_ikauriko_hand tfs_elmt_ikauriko_male_hand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-2_hand.svg" class="tfs_elmt_the_ikauriko_hand tfs_elmt_the_ikauriko_male_hand" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-2_body.svg" class="tfs_elmt_the_ikauriko_body tfs_elmt_the_ikauriko_male_body" alt="">
                                </span>
              </div>
              <div class="tfs_elmt_ikauriko tfs_elmt_ikauriko_female">
                                <span class="tfs_elmt_ikauriko_wrap tfs_elmt_ikauriko_male_wrap">
                                    <span class="tfs_elmt_ikauriko_hand tfs_elmt_ikauriko_female_hand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-3_hand.svg" class="tfs_elmt_the_ikauriko_hand tfs_elmt_the_ikauriko_female_hand" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-3_body.svg" class="tfs_elmt_the_ikauriko_body tfs_elmt_the_ikauriko_male_body" alt="">
                                </span>
              </div>
              <div class="tfs_elmt_drive tfs_elmt_drive_navy">
                                <span class="tfs_elmt_drive_wrap tfs_elmt_drive_navy_wrap">
                                    <span class="tfs_elmt_driveexhust tfs_elmt_driveexhust_navy tfs_elmt_driveexhust_navy_2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_exhust.svg" class="tfs_elmt_the_driveexhust tfs_elmt_the_driveexhust_2 tfs_elmt_the_driveexhust_navy" alt="">
                                    </span>
                                    <span class="tfs_elmt_driveexhust tfs_elmt_driveexhust_navy tfs_elmt_driveexhust_navy_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_exhust.svg" class="tfs_elmt_the_driveexhust tfs_elmt_the_driveexhust_1 tfs_elmt_the_driveexhust_navy" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_body.svg" class="tfs_elmt_the_drive_body tfs_elmt_the_drive_navy_body" alt="">
                                    <span class="tfs_elmt_drivetire tfs_elmt_drivetire_navy">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_tire.svg" class="tfs_elmt_the_drivetire tfs_elmt_the_drivetire_navy" alt="">
                                    </span>
                                </span>
              </div>
              <div class="tfs_elmt_ikauruma">
                                <span class="tfs_elmt_ikauruma_wrap elmt_uruma_wrap">
                                    <span class="tfs_elmt_ikauruma_lefthand elmt_uruma_lefthand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="tfs_elmt_the_ikauruma_lefthand" alt="">
                                    </span>
                                    <span class="tfs_elmt_ikauruma_righthand elmt_uruma_righthand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="tfs_elmt_the_ikauruma_righthand" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="tfs_elmt_the_ikauruma_body" alt="">
                                    <span class="tfs_elmt_ikauruma_dialogue elmt_uruma_dialog">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_dialogue.svg" class="tfs_elmt_the_ikauruma_dialogue" alt="">
                                    </span>
                                </span>
              </div>
              <div class="tfs_elmt_petwalk">
                                <span class="tfs_elmt_petwalk_wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-petwalk-1.svg" class="tfs_elmt_the_petwalk" alt="">
                                </span>
              </div>
              <div class="tfs_elmt_drive tfs_elmt_drive_ong">
                                <span class="tfs_elmt_drive_wrap tfs_elmt_drive_ong_wrap">
                                    <span class="tfs_elmt_driveexhust tfs_elmt_driveexhust_ong tfs_elmt_driveexhust_ong_2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_exhust.svg" class="tfs_elmt_the_driveexhust tfs_elmt_the_driveexhust_2 tfs_elmt_the_driveexhust_ong" alt="">
                                    </span>
                                    <span class="tfs_elmt_driveexhust tfs_elmt_driveexhust_ong tfs_elmt_driveexhust_ong_1">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_exhust.svg" class="tfs_elmt_the_driveexhust tfs_elmt_the_driveexhust_1 tfs_elmt_the_driveexhust_ong" alt="">
                                    </span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-2_body.svg" class="tfs_elmt_the_drive_body tfs_elmt_the_drive_ong_body" alt="">
                                    <span class="tfs_elmt_drivetire tfs_elmt_drivetire_ong">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-drive-1_tire.svg" class="tfs_elmt_the_drivetire tfs_elmt_the_drivetire_ong" alt="">
                                    </span>
                                </span>
              </div>
              <div class="tfs_elmt_ikaalien">
                                <span class="tfs_elmt_ikaalien_wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-4.svg" class="tfs_elmt_the_ikaalien" alt="">
                                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- //elements on the ground -->
        <!-- elements fake couple -->
        <div class="tfs_elmts_fake_couple">
          <div class="tfs_elmts_fakecouple_content">
            <div class="tfs_elmt_couple">
                            <span class="tfs_elmt_couple_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-couple-1_male.svg" class="tfs_elmt_the_couple_male" alt="">
                                <span class="tfs_elmt_couple_female">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-couple-2_female.svg" class="tfs_elmt_the_couple_female" alt="">
                                </span>
                            </span>
            </div>
          </div>
        </div>
        <!-- //elements fake couple -->
      </div>
    </div>
    <div id="top-instagram">
      <p class="cmn_sub_sec_caption font_en_roboto f__24 f__ltr__5 f__ltr__5__center f__wt__5">instagram</p>
      <div class="top_insta_container w_max1024 w960_in_1024">
        <?php echo do_shortcode("[instagram-feed]"); ?>
<!--        <a href="#" class="top_insta_link cmn_link_unit" target="_blank">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/common/images/top/insta-1.jpg" alt="">-->
<!--        </a>-->
<!--        <a href="#" class="top_insta_link cmn_link_unit" target="_blank">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/common/images/top/insta-2.jpg" alt="">-->
<!--        </a>-->
<!--        <a href="#" class="top_insta_link cmn_link_unit" target="_blank">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/common/images/top/insta-1.jpg" alt="">-->
<!--        </a>-->
<!--        <a href="#" class="top_insta_link cmn_link_unit" target="_blank">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/common/images/top/insta-2.jpg" alt="">-->
<!--        </a>-->
<!--        <a href="#" class="top_insta_link cmn_link_unit" target="_blank">-->
<!--          <img src="--><?php //echo get_template_directory_uri(); ?><!--/common/images/top/insta-1.jpg" alt="">-->
<!--        </a>-->

      </div>
    </div>
    <div class="top_concept">
      <section class="top_concept_content w_max1024 w1024_to_960">
        <h1 class="top_concept_caption decort_text">
          <span class="top_concept_caption_text d_text">オカシなOh!つまみ</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/concept-caption.png" class="d_img" alt="">
        </h1>
        <p class="top_concept_description">
                    <span class="top_concept_desc_text top_concept_desc_text_1 f_writing_rl f__16 f__ln__36 f__ltr__1">ニッポン全国、津々浦々、
                        ギャップ萌えするローカルお菓子のアイドルや、
                        巷では見かけない新おつまみスターを見つけ出す、
                        ｢あたりめのハレリー｣の世界へようこそ。
                    </span>
          <span class="top_concept_desc_text top_concept_desc_text_2 f_writing_rl f__16 f__ln__36 f__ltr__1">私たちの使命は、全国もぐり菓子の発掘。
                        ありそうでなかった組み合わせなのに、
                        ひとくち食べたら一瞬で好きが止まらない！
                        それくらいの驚きとエンタメ感あふれる、
                        おつまみお菓子との遭遇をめざしています。
                    </span>
          <span class="top_concept_desc_text top_concept_desc_text_3 f_writing_rl f__16 f__ln__36 f__ltr__1">ジワるすっぱさで小学生男子をキュンとさせ、
                        オトナな刺激でティーンな女子をほんろうし、
                        カリポリ食感でママのアンニュイを吹き飛ばし、
                        夜ごとオジさまたちを骨ぬきにする。
                    </span>
          <span class="top_concept_desc_text top_concept_desc_text_4 f_writing_rl f__16 f__ln__36 f__ltr__1">そんなオカシなｏｈ！つまみワールド展開中です。</span>
        </p>
      </section>
      <div class="top_concept_bgimage">
        <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/concept-bg.png" class="top_concept_bgimage_img" alt="">
      </div>
    </div>
    <?php if(have_rows('bnr_slider')): ?>
    <div class="top_campaign_slider">
      <p class="cmn_sub_sec_caption font_en_roboto f__24 f__ltr__8 f__ltr__8__center f__wt__5">topics</p>
      <ul class="top_the_campaign_slide top_slide_of_campaign">
      <?php
      while(have_rows('bnr_slider')): the_row();
        $slide_id = get_sub_field('bnr');
        $slide = wp_get_attachment_image_src($slide_id, 'full');
        $slide_url = $slide[0];
        $bnr_link = get_sub_field('link');
        $bnr_newtab = get_sub_field('newtab');
        $bnr_hidden = get_sub_field('hidden');

        if(!$bnr_hidden) :
      ?>
        <li class="top_campaign_slide_list">
          <a href="<?php echo esc_url($bnr_link); ?>" class="top_campaign_slide_link cmn_link_unit <?php if(!$bnr_newtab){ ?>mover_link<?php } ?>" <?php if($bnr_newtab){ ?>target="_blank" rel="nofollow noopener"<?php } ?>>
            <img src="<?php echo esc_url($slide_url); ?>" class="top_campaign_slide_img" alt="">
          </a>
        </li>
      <?php
        endif;
      endwhile;
      ?>
      </ul>
    </div>
    <?php endif; ?>

    <div class="top_feature">
      <section class="top_feature_content w_max1366">
        <h2 class="top_feature_caption decort_text">
          <span class="top_feature_caption_text d_text">あたりめのハレリー４つの持ち味</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-caption.png" class="d_img" alt="">
        </h2>
        <ul class="top_feature_group w1366_to_1024">
          <li class="top_feature_list top_feature_list_1">
            <div class="top_feature_info_group">
              <div class="top_feature_info_num decort_text">
                <span class="top_feature_info_num_text d_text">持ち味1</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-num-1.png" class="d_img" alt="">
              </div>
              <h2 class="top_feature_info_title decort_text">
                <span class="top_feature_info_title_text d_text">全国もぐり菓子を発掘</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-title-1.png" class="d_img" alt="">
              </h2>
              <p class="top_feature_info_desc f__ln__30 f__ltr__1">ローカルな独自路線をひた走る、おつまみお菓子の宝庫です。そんなキラリと光る商品を「全国もぐり菓子」と名づけて発掘中。開封したら最後、食べきるまで止まらない、ちょっぴりキケンなおいしさと出会えます。</p>
            </div>
            <div class="top_feature_graph">
                            <span class="top_feature_graph_block">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-graph-1.png" class="top_feature_the_graph" alt="">
                            </span>
            </div>
          </li>
          <li class="top_feature_list top_feature_list_2">
            <div class="top_feature_info_group">
              <div class="top_feature_info_num decort_text">
                <span class="top_feature_info_num_text d_text">持ち味2</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-num-2.png" class="d_img" alt="">
              </div>
              <h2 class="top_feature_info_title decort_text">
                <span class="top_feature_info_title_text d_text">未知のおいしさとの遭遇</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-title-2.png" class="d_img" alt="">
              </h2>
              <p class="top_feature_info_desc f__ln__30 f__ltr__1">ハレリーはおつまみ界の異端児。コンビニやスーパーなどでは扱っていない、でも「この味を待っていた」と思える絶妙なトコロを突くのが得意。ユニークさこそ命と考え、ドヤ顔でおすすめできる商品を揃えています。</p>
            </div>
            <div class="top_feature_graph">
                            <span class="top_feature_graph_block">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-graph-2.png" class="top_feature_the_graph" alt="">
                            </span>
            </div>
          </li>
          <li class="top_feature_list top_feature_list_3">
            <div class="top_feature_info_group">
              <div class="top_feature_info_num decort_text">
                <span class="top_feature_info_num_text d_text">持ち味3</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-num-3.png" class="d_img" alt="">
              </div>
              <h2 class="top_feature_info_title decort_text">
                <span class="top_feature_info_title_text d_text">味に一途なつくり手たち</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-title-3.png" class="d_img" alt="">
              </h2>
              <p class="top_feature_info_desc f__ln__30 f__ltr__1">実食し「うまっ！」と驚いたものしか売らないのが、私たちのルール。味わった後は冷静さを取り戻し、メーカーの思いやこだわりに耳を傾けます。お話を聞くたびに、一途な姿勢が味に出るのだと毎回感動しています。</p>
            </div>
            <div class="top_feature_graph">
                            <span class="top_feature_graph_block">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-graph-3.png" class="top_feature_the_graph" alt="">
                            </span>
            </div>
          </li>
          <li class="top_feature_list top_feature_list_4">
            <div class="top_feature_info_group">
              <div class="top_feature_info_num decort_text">
                <span class="top_feature_info_num_text d_text">持ち味4</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-num-4.png" class="d_img" alt="">
              </div>
              <h2 class="top_feature_info_title decort_text">
                <span class="top_feature_info_title_text d_text">子ども&女性にも人気！</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-title-4.png" class="d_img" alt="">
              </h2>
              <p class="top_feature_info_desc f__ln__30 f__ltr__1">街で小学生に見つかると「あたりめ出せよ」と囲まれます。晩酌では親子で奪い合いが始まるほど、人々の欲望を刺激しているという噂も…。ハレルヤ気分を満喫しつつ、ハマりすぎにご注意を。</p>
            </div>
            <div class="top_feature_graph">
                            <span class="top_feature_graph_block">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/feature-graph-4.png" class="top_feature_the_graph" alt="">
                            </span>
            </div>
          </li>
        </ul>
      </section>
    </div>
    <?php if(have_rows('bnr_list')): ?>
      <div class="top_recommended">
        <ul class="top_recommend_bnrs w_max1024">
          <?php
          while(have_rows('bnr_list')): the_row();
            $slide_id = get_sub_field('bnr');
            $slide = wp_get_attachment_image_src($slide_id, 'full');
            $slide_url = $slide[0];
            $bnr_link = get_sub_field('link');
            $bnr_newtab = get_sub_field('newtab');
            $bnr_hidden = get_sub_field('hidden');

            if(!$bnr_hidden) :
              ?>
              <li class="top_recommend_bnr_list">
                <a href="<?php echo esc_url($bnr_link); ?>" class="top_recommend_bnr_link cmn_link_unit <?php if(!$bnr_newtab){ ?>mover_link<?php } ?>" <?php if($bnr_newtab){ ?>target="_blank" rel="nofollow noopener"<?php } ?>>
                  <img src="<?php echo esc_url($slide_url); ?>" alt="">
                </a>
              </li>
            <?php
            endif;
          endwhile;
          ?>
        </ul>
      </div>
    <?php endif; ?>
    <div class="top_blog">
      <p class="cmn_sub_sec_caption font_en_roboto f__24 f__ltr__8 f__ltr__8__center f__wt__5">news</p>
      <div class="top_blog_content w_max1366">
        <h2 class="top_blog_caption decort_text">
          <span class="top_blog_caption_text d_text">お知らせ・ブログ</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/blog-caption.png" class="d_img" alt="">
        </h2>
        <div class="top_blog_group">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
          );

          $the_query = new WP_Query( $args );

          // ループ
          if ( $the_query->have_posts() ) : ?>
            <?php
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <?php
            if ( has_post_thumbnail() ) {
              $attach_id = get_post_thumbnail_id($post->ID, "thumbnail");
              $image = wp_get_attachment_image_src($attach_id);
              $image_url = $image[0];
            }else{
              $image_url = get_template_directory_uri() . '/common/images/blog/the_thumbs.jpg';
            }
            ?>
              <section class="top_blog_latest">
                <a href="<?php the_permalink(); ?>" class="top_blog_link top_blog_latest_link mover_link">
                  <h3 class="top_blog_title top_blog_latest_title">
                    <span class="top_blog_title_text top_blog_latest_title_text f__16 f__wt__5 f__ln__30"><?php the_title(); ?></span>
                  </h3>
                  <span class="top_blog_thumb">
                                <img src="<?php echo esc_url($image_url); ?>" alt="">
                            </span>
                  <time class="top_blog_date top_blog_latest_date font_en_roboto f__wt__5 f__ltr__1 f__ltr__1__center"><?php echo get_the_date('Y.n.d'); ?></time>
                </a>
              </section>

            <?php
            endwhile;
          endif;

          // 投稿データをリセット
          wp_reset_postdata();
          ?>

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'offset' => 1,
          );

          $the_query = new WP_Query( $args );

          // ループ
          if ( $the_query->have_posts() ) : ?>
          <ul class="top_blog_all">
          <?php
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <li class="top_blog_list">
                <a href="<?php the_permalink(); ?>" class="top_blog_link top_blog_all_link mover_link">
                  <time class="top_blog_date top_blog_all_date font_en_roboto"><?php echo get_the_date('Y.n.d'); ?></time>
                  <h3 class="top_blog_title top_blog_all_title f__16 f__wt__5">
                    <span class="top_blog_title_text top_blog_all_title_text"><?php the_title(); ?></span>
                  </h3>
                </a>
              </li>

            <?php endwhile; ?>
          </ul>

          <?php
          endif;

          // 投稿データをリセット
          wp_reset_postdata();
          ?>
          <a href="/blog" class="top_blog_to_all_link f__18 f__ltr__1 f__wt__5">一覧へ</a>
        </div>
      </div>
    </div>
    <div class="top_franchise">
      <div class="top_franchise_content w_max1366">
        <h2 class="top_franchise_caption decort_text">
          <span class="top_franchise_caption_text d_text">取り扱い店舗</span>
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/franchise-caption.png" class="d_img" alt="">
        </h2>
        <?php
        $args = array(
          'post_type' => 'clients',
          'posts_per_page' => -1,
        );

        $the_query = new WP_Query( $args );

        // ループ
        if ( $the_query->have_posts() ) : ?>
        <ul class="top_franchise_group f__18 f__wt__5">
        <?php
          while ( $the_query->have_posts() ) : $the_query->the_post();
          $clients_link = get_field('link_url');
          $clients_address = get_field('address');
          $clients_map = get_field('googlemap');
          ?>
            <li class="top_franchise_list">
              <div class="top_franchise_list_wrap">
                <p class="top_franchise_shop_info">
                  <span class="top_franchise_shop_name"><?php the_title(); ?></span>
                  <span class="top_franchise_shop_location"><q class="quotes_typ_5"><?php echo esc_html($clients_address); ?></q></span>
                </p>
                <?php if($clients_link) { ?>
                  <a href="<?php echo esc_url($clients_link); ?>" class="top_franchise_shop_link" target="_blank">詳細</a>
                <?php } ?>
                <?php if($clients_map) { ?>
                  <a href="<?php echo esc_url($clients_map); ?>" class="top_franchise_shop_map" target="_blank">map</a>
                <?php } ?>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>

        <?php
        endif;

        // 投稿データをリセット
        wp_reset_postdata();
        ?>
      </div>
      <div class="top_franchise_notice w_max1366">
                <span class="top_franchise_uruma">
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/pngelmt-uruma-1.png" alt="">
                </span>
        <div class="top_franchise_notice_content">
          <h3 class="top_franchise_notice_dialogue decort_text">
            <span class="top_franchise_notice_dialogue_text d_text">お取り扱い店舗大募集!</span>
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/top/franchise-dialogue.png" class="d_img" alt="">
          </h3>
          <p class="top_franchise_notice_desc f__16 f__ln__30">「他にはないおつまみを、地域のお客様に届けたい」。そんな思いを持っているお店の皆様には、ハレリー自慢の味をおすそわけしちゃいます。商品を取り扱いたい方は、お気軽にお問い合わせください。</p>
          <div class="cmn_contact_group_style top_franchise_notice_contact">
            <div class="cmn_contact_btn_style">
              <a href="https://thebase.in/inquiry/halery-shopselect-net" class="cmn_contact_btn_link cmn_link_unit" target="_blank">
                                <span class="cmn_contact_btn_icon">
                                    <svg class="the_cmn_icon_contact" viewbox="0 0 28 21">
                                        <use xlink:href="#use-contact-icon" class="the_cmn_icon_contact_element"></use>
                                    </svg>
                                </span>
                <p class="cmn_contact_btn_text f__wt__6">お問い合わせ</p>
              </a>
            </div>
            <div class="cmn_contact_sns_block">
              <div class="cmn_contact_and_sns_list cmn_contact_and_sns_instagram">
                <a href="https://www.instagram.com/hareri.atarime" class="cmn_contact_sns_link cmn_contact_sns_link_insta cmn_link_unit" target="_blank">
                  <svg class="the_cmn_contact_sns_icon the_cmn_contact_sns_icon_instagram" viewbox="0 0 25 25">
                    <use xlink:href="#use-sns-icon-instagram" class="the_cmn_cntc_sns_ico_element cmntnct_icoelmt_insta"></use>
                  </svg>
                </a>
              </div>
              <div class="cmn_contact_and_sns_list cmn_contact_and_sns_facebook">
                <a href="https://www.facebook.com/HareriXinXi" class="cmn_contact_sns_link cmn_contact_sns_link_fbook cmn_link_unit" target="_blank">
                  <svg class="the_cmn_contact_sns_icon the_cmn_contact_sns_icon_fbook" viewbox="0 0 25 25">
                    <use xlink:href="#use-sns-icon-facebook" class="the_cmn_cntc_sns_ico_element cmntnct_icoelmt_fbook"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- //main content -->
  <?php
  endwhile;
endif; ?>
<?php
get_footer();
