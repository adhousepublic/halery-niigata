<footer id="the-footer" class="the_footer">
  <div class="footer_container w_max1366">
    <div class="footer_top">
      <div class="footer_logo">
        <a href="/" class="footer_back_home mover_link">
          <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/footer-logo.png" class="footer_logo_img" alt="">
        </a>
      </div>
      <div class="footer_info_group">
        <p class="footer_info_address f__wt__5">新潟市中央区新潟市中央区大島167-16</p>
        <p class="footer_info_number f__wt__5">
          <span class="footer_info_tel f__ltr__1">TEL 025-281-0081</span>
          <span class="footer_info_fax f__ltr__1">FAX 025-281-0083</span>
        </p>
        <div class="cmn_contact_group_style footer_info_outside">
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
    <div class="footer_bot">
      <ul class="footer_link_group">
        <li class="footer_link_list footer_link_list_1">
          <a href="<?php echo esc_url( home_url() ); ?>/about" class="footer_link_and_link f__wt__5 cmn_link_unit mover_link">ハレリーについて</a>
        </li>
        <li class="footer_link_list footer_link_list_2">
          <a href="<?php echo esc_url( home_url() ); ?>/allstars" class="footer_link_and_link f__wt__5 cmn_link_unit mover_link">全国もぐり菓子オールスターズ</a>
        </li>
        <li class="footer_link_list footer_link_list_3">
          <a href="https://halery.shopselect.net" class="footer_link_and_link f__wt__5 cmn_link_unit" target="_blank">オンラインストア</a>
        </li>
        <li class="footer_link_list footer_link_list_4">
          <a href="<?php echo esc_url( home_url() ); ?>/snack_journeys" class="footer_link_and_link f__wt__5 cmn_link_unit mover_link">全国もぐり菓子発掘の旅</a>
        </li>
        <li class="footer_link_list footer_link_list_5">
          <a href="<?php echo esc_url( home_url() ); ?>/blog" class="footer_link_and_link f__wt__5 cmn_link_unit mover_link">お知らせ・ブログ</a>
        </li>
        <li class="footer_link_list footer_link_list_6">
          <a href="https://thebase.in/inquiry/halery-shopselect-net" class="footer_link_and_link f__wt__5 cmn_link_unit" target="_blank">お問い合わせ</a>
        </li>
      </ul>
    </div>
  </div>
  <address class="the_copyrights font_en_roboto f__ltr__1 f__ltr__1__center">© 2021 Harelly All rights reserved.</address>
  <div class="back_to_top" id="scroll-top">
            <span class="back_top_element">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-6-backtop.svg" alt="">
            </span>
  </div>
</footer>

</div>
<!-- //wrapper -->
<div class="common_load"></div>
<!-- SVG call -->
<?php if(is_front_page()) {
  get_template_part('top', 'svg');
} ?>
<?php wp_footer(); ?>

</body>
</html>