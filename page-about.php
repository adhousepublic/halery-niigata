<?php get_header(); ?>

  <?php
  if ( have_posts() ) :
  while ( have_posts() ) : the_post();
  ?>
    <!-- main content -->
    <main id="main-content">
      <div id="inner-first-scene">
        <div class="inner_first_scene">
          <h1 class="page_main_caption decort_text">
            <span class="page_main_caption_text d_text">ハレリーについて</span>
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/page-caption.svg" class="d_img" alt="">
          </h1>
        </div>
      </div>
      <div class="inner_content_wrap stage_show_here">
        <?php output_breadcrumb(); ?>

        <div class="inner_content">
          <div class="stage_wrap w_max1366 sp_none">
            <div class="the_halery_stage">
              <div class="stage_slide inn_slide_of_stage" dir="rtl">
                <section class="stage_scene stage_scene_1" dir="ltr">
                  <div class="stage_content stage_scene_1_content">
                    <h2 class="stage_1_stand decort_text">
                      <span class="stage_1_stand_text d_text">ハレリー誕生秘話</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/pngelmt-scene_1-parts-1.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_1_desc">
                                        <span class="stage_desc_text stage_1_desc_text f_writing_rl f__ln__36 f__ltr__min f__wt__8">
                                            寄ってらっしゃい見てらっしゃい！<br>
                                            ハレリー劇場へようこそ。<br>
                                            私たちハレリーの誕生秘話とともに、<br>
                                            当ブランドの歩みについてお話しします。
                                        </span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-1.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-pc" alt="">
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-2.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-sp" alt="">
                    </p>
                    <div class="stage_1_ikauruma">
                                        <span class="stage_1_ikauruma_wrap elmt_uruma_wrap">
                                            <span class="stage_1_ikauruma_lefthand elmt_uruma_lefthand">
                                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="stage_1_the_ikauruma_lefthand" alt="">
                                            </span>
                                            <span class="stage_1_ikauruma_righthand elmt_uruma_righthand">
                                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="stage_1_the_ikauruma_righthand" alt="">
                                            </span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="stage_1_ikauruma_body" alt="">
                                        </span>
                    </div>
                    <div class="stage_1_ika">
                                        <span class="stage_1_ika_wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-7.svg" class="stage_1_the_ika" alt="">
                                        </span>
                    </div>
                  </div>
                </section>
                <section class="stage_scene stage_scene_2" dir="ltr">
                  <div class="stage_content stage_scene_2_content">
                    <h2 class="stage_caption stage_2_caption decort_text">
                      <span class="stage_2_caption_text d_text">第一章 ハレリー創業</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-1.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_2_desc stage_2_desc_1">
                                        <span class="stage_desc_text stage_2_desc_text f_writing_rl f__ltr__2 f__wt__8">
                                            創業は今から約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">40</i> 年前。<br>
                                            東京で行商を手伝っていた初代が故郷の新潟へＵターンし、<br>
                                            その経験を生かして、塩蔵ワカメの行商をスタートします。<br>
                                            このワカメの販売が、ハレリーの始まりなのです。<br>
                                            人見知りの激しい初代でしたが、<br>
                                            思いきって社会の荒波に飛び込み<br>
                                            さまざまな企業や学校をまわりました。
                                        </span>
                    </p>
                    <p class="stage_description stage_2_desc stage_2_desc_2">
                                        <span class="stage_desc_text stage_2_desc_text f_writing_rl f__ltr__2 f__wt__8">ハレリーの語源は｢ハレルヤ｣。<br>
                                            感謝や賛美を表現したこの社名が<br>
                                            事業の前途を晴れやかに照らすのでした。
                                        </span>
                    </p>
                  </div>
                  <div class="stage_2_halery">
                                    <span class="stage_2_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-1.png" class="stage_2_the_graph" alt="ワ、ワカメ、いらいらいらいらいらんかの？">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_3" dir="ltr">
                  <div class="stage_content stage_scene_3_content">
                    <h2 class="stage_caption stage_3_caption decort_text">
                      <span class="stage_3_caption_text d_text">第ニ章 魅力的な商品</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-2.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_3_desc stage_3_desc_1">
                                        <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">そのうち家業を手伝い始めた息子の二代目(現代表)。<br>
                                            初代と共にワカメを販売しつつも、<br>
                                            もっと魅力的な商品を求めた末に<br>
                                            問屋さんから紹介された｢おつまみ｣に辿り着きます。
                                        </span>
                    </p>
                    <p class="stage_description stage_3_desc stage_3_desc_2">
                                        <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">おつまみ販売の反応がよく、やがておつまみが主力商品に。<br>
                                            あまり世に知られていない美味しいおつまみが<br>
                                            全国にたくさんあることを知ったハレリーは、<br>
                                            この美味しさを世に届けることを決意したのでした。
                                        </span>
                    </p>
                  </div>
                  <div class="stage_3_halery">
                                    <span class="stage_3_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-2.png" class="stage_3_the_graph" alt="うめえ！これなら売れるべ！なぁ!?t">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_4" dir="ltr">
                  <div class="stage_content stage_scene_4_content">
                    <h2 class="stage_caption stage_4_caption decort_text">
                      <span class="stage_4_caption_text d_text">第三章 誕生・イカ人間</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-3.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_4_desc stage_4_desc_1">
                                        <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">順調に思われたおつまみ販売ですが、<br>
                                            初代に負けず劣らずの人見知りに成長した二代目は<br>
                                            魅力的なおつまみを販売するも<br class="sp_none">
                                            人前で話をすると顔が真っ赤になる始末。<br>
                                            必要不可欠なお客様の呼び込みにも<br class="sp_none">
                                            ドギマギしてしまいました。
                                        </span>
                    </p>
                    <p class="stage_description stage_4_desc stage_4_desc_2">
                                        <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">｢何かうまい方法はないものか｣と悩んでいると、<br>
                                            目の前に現れた人気の名刺屋さんが一言。<br>
                                            ｢イカの姿だと、勝手に声をかけてもらえるよ｣<br>
                                            予言的なアドバイスをされた二代目は<br>
                                            ｢だったらイカに変身してみようかな〜｣と<br class="sp_none">
                                            あっさりその気になりました。<br><br>
                                            そして…
                                        </span>
                    </p>
                  </div>
                  <div class="stage_4_halery">
                                    <span class="stage_4_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-3.png" class="stage_4_the_graph" alt="お、おつまみ、いかいかいかいかいかがですか？">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_5" dir="ltr">
                  <div class="stage_content stage_scene_5_content">
                    <h2 class="stage_description stage_5_desc">
                                        <span class="stage_desc_text stage_5_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">人見知りを吹き飛ばす、<br>
                                            イカ人間が誕生したのでした。
                                        </span>
                    </h2>
                  </div>
                  <div class="stage_5_halery">
                                    <span class="stage_5_halery_wrap">
                                        <span class="stage_5_sunshine">
                                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-2.png" class="stage_5_the_sunshine" alt="">
                                        </span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-1.png" class="stage_5_the_graph" alt="これでおつまみを販売してみよう！">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_6" dir="ltr">
                  <div class="stage_content stage_scene_6_content">
                    <h2 class="stage_caption stage_6_caption decort_text">
                      <span class="stage_6_caption_text d_text">第四章 実は話好き？</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-4.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_6_desc stage_6_desc_1">
                                        <span class="stage_desc_text stage_6_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">こうして唐突に誕生したイカ人間でしたが、<br>
                                            いい変化はすぐに訪れます。<br>
                                            最初はイベントで遠巻きに様子をうかがっていた人々が、<br>
                                            ヘンテコでもの珍しい風貌のイカ人間に引き寄せられ、<br>
                                            ｢○○○○にいましたよね｣とよく話しかけられるように。<br>
                                            そこで判明したのは<br>
                                            ｢オレ、人見知りだけど、話好きなんだ｣という性格。<br>
                                            そんなこじらせ系のイカ人間も、今では小学生に大人気。<br>
                                            ただし<i class="stage_desc_text_rotate stage_desc_text_rotate_single">1</i> 〜<i class="stage_desc_text_rotate stage_desc_text_rotate_single">2</i> 歳のこどもの半数は<br>
                                            未確認生物にギャン泣きするので、<br>
                                            そっと人間の姿に戻ることもしばしばです。
                                        </span>
                    </p>
                  </div>
                  <div class="stage_6_halery">
                                    <span class="stage_6_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-1.png" class="stage_6_the_graph sp_none" alt="あのイカ、前も見たわ何者かしら…">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-1-2.png" class="stage_6_the_graph sp_visible" alt="あのイカ、前も見たわ何者かしら…">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_7" dir="ltr">
                  <div class="stage_content stage_scene_7_content">
                    <h2 class="stage_description stage_7_desc">
                                        <span class="stage_desc_text stage_7_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">イカの頭に手ごたえを感じ、<br>
                                            さらに奥の手アイテムを編み出します。<br>
                                            その名は｢試食棒｣。<br>
                                            試食コーナーで自然にできてしまう、お客様との距離は約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">2</i> ｍ。<br>
                                            声をかけられないよう設けられた心と体の溝を、<br>
                                            埋める道具を発明したのです。<br>
                                            この棒は長い柄杓のようなもの。<br>
                                            ディスタンスは保ちつつ、棒だけがニョキニョキとお客様に近づき、<br>
                                            好奇心から試食に手を出してしまうという仕掛けです。<br>
                                            イカの姿で注目を集め、試食棒で回収する。<br>
                                            射程距離は約<i class="stage_desc_text_rotate">20</i>ｍにおよぶと推測しています。
                                        </span>
                    </h2>
                  </div>
                  <div class="stage_7_halery">
                                    <span class="stage_7_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-2.png" class="stage_7_the_graph" alt="今だ…！">
                                    </span>
                  </div>
                </section>
                <section class="stage_scene stage_scene_8" dir="ltr">
                  <div class="stage_content stage_scene_8_content">
                    <h2 class="stage_caption stage_8_caption decort_text">
                      <span class="stage_8_caption_text d_text">最終章 マジメにふざけて、喜び合いたい</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-5.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_8_desc stage_8_desc_1">
                                        <span class="stage_desc_text stage_8_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">お客様を呼び込むことが苦手だった二代目が、<br class="sp_none">
                                            変身 + アイテムによって手に入れたもの。<br>
                                            それは｢おもしろそう！｣と感じてもらい、<br class="sp_none">
                                            人々が気軽にワチャワチャ集まってくる場をつくる術。<br>
                                            こうして世の中が気づいていないスキマ的な魅力を掘り起こし、<br>
                                            お客様とそのおいしさや楽しさを共有する使命を獲得しました。<br>
                                            めざすのは自分自身が楽しめて、<br class="sp_none">
                                            お客様も大いに喜んでくれる形。<br>
                                            これからもハレリーならではの行商スタイルと、<br>
                                            大マジメに繰り広げられる楽しいおふざけに<br class="sp_none">
                                            どうぞおつき合いくださいね。
                                        </span>
                    </p>
                  </div>
                  <div class="stage_8_halery">
                                    <span class="stage_8_halery_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-6.png" class="stage_8_the_graph" alt="末長いご愛顧をどうぞよろしくお願いします">
                                    </span>
                  </div>
                </section>
                <!-- <section class="stage_scene stage_scene_1">
                    <div class="stage_content stage_scene_1_content">
                        <h2 class="stage_1_stand decort_text">
                            <span class="stage_1_stand_text d_text">ハレリー誕生秘話</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/pngelmt-scene_1-parts-1.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_1_desc">
                            <span class="stage_desc_text stage_1_desc_text f_writing_rl f__ln__36 f__ltr__min f__wt__8">寄ってらっしゃい見てらっしゃい！
                                ハレリー劇場へようこそ。
                                私たちハレリーの誕生秘話とともに、
                                当ブランドの歩みについてお話しします。
                            </span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-1.svg" alt="">
                        </p>
                        <div class="stage_1_ikauruma">
                            <span class="stage_1_ikauruma_wrap elmt_uruma_wrap">
                                <span class="stage_1_ikauruma_lefthand elmt_uruma_lefthand">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="stage_1_ikauruma_lefthand" alt="">
                                </span>
                                <span class="stage_1_ikauruma_righthand elmt_uruma_righthand">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="stage_1_ikauruma_righthand" alt="">
                                </span>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="stage_1_ikauruma_body" alt="">
                            </span>
                        </div>
                        <div class="stage_1_ika">
                            <span class="stage_1_ika_wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-7.svg" class="stage_1_the_ika" alt="">
                            </span>
                        </div>
                    </div>
                </section>
                <section class="stage_scene stage_scene_8">
                    <div class="stage_content stage_scene_8_content">
                        <h2 class="stage_caption stage_8_caption decort_text">
                            <span class="stage_8_caption_text d_text">最終章 マジメにふざけて、喜び合いたい</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-5.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_8_desc stage_8_desc_1">
                            <span class="stage_desc_text stage_8_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">お客様を呼び込むことが苦手だった二代目が、
                                変身＋アイテムによって手に入れたもの。
                                それは「おもしろそう！」と感じてもらい、
                                人々が気軽にワチャワチャ集まってくる場をつくる術。
                                こうして世の中が気づいていないスキマ的な魅力を掘り起こし、
                                お客様とそのおいしさや楽しさを共有する使命を獲得しました。
                                めざすのは自分自身が楽しめて、
                                お客様も大いに喜んでくれる形。
                                これからもハレリーならではの行商スタイルと、
                                大マジメに繰り広げられる楽しいおふざけに
                                どうぞおつき合いくださいね。
                            </span>
                        </p>
                    </div>
                    <div class="stage_8_halery">
                        <span class="stage_8_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-6.png" class="stage_8_the_graph" alt="末長いご愛顧をどうぞよろしくお願いします">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_7">
                    <div class="stage_content stage_scene_7_content">
                        <h2 class="stage_description stage_7_desc">
                            <span class="stage_desc_text stage_7_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">イカの頭に手ごたえを感じ、
                                さらに奥の手アイテムを編み出します。
                                その名は「試食棒」。
                                試食コーナーで自然にできてしまう、お客様との距離は約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">2</i><em class="stage_desc_text_next f__wt__8">ｍ</em>。
                                声をかけられないよう設けられた心と体の溝を、
                                埋める道具を発明したのです。
                                この棒は長い柄杓のようなもの。
                                ディスタンスは保ちつつ、棒だけがニョキニョキとお客様に近づき、
                                好奇心から試食に手を出してしまうという仕掛けです。
                                イカの姿で注目を集め、試食棒で回収する。
                                射程距離は約<i class="stage_desc_text_rotate">20</i><em class="stage_desc_text_next f__wt__8">ｍ</em>におよぶと推測しています。
                            </span>
                        </h2>
                    </div>
                    <div class="stage_7_halery">
                        <span class="stage_7_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-2.png" class="stage_7_the_graph" alt="今だ…！">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_6">
                    <div class="stage_content stage_scene_6_content">
                        <h2 class="stage_caption stage_6_caption decort_text">
                            <span class="stage_6_caption_text d_text">第四章 実は話好き？</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-4.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_6_desc stage_6_desc_1">
                            <span class="stage_desc_text stage_6_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">こうして唐突に誕生したイカ人間でしたが、
                                いい変化はすぐに訪れます。
                                最初はイベントで遠巻きに様子をうかがっていた人々が、
                                ヘンテコでもの珍しい風貌のイカ人間に引き寄せられ、
                                「○○○○にいましたよね」とよく話しかけられるように。
                                そこで判明したのは
                                「オレ、人見知りだけど、話好きなんだ」という性格。
                                そんなこじらせ系のイカ人間も、今では小学生に大人気。
                                ただし1〜2歳のこどもの半数は
                                未確認生物にギャン泣きするので、
                                そっと人間の姿に戻ることもしばしばです。
                            </span>
                        </p>
                    </div>
                    <div class="stage_6_halery">
                        <span class="stage_6_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-1.png" class="stage_6_the_graph" alt="あのイカ、前も見たわ何者かしら…">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_5">
                    <div class="stage_content stage_scene_5_content">
                        <h2 class="stage_description stage_5_desc">
                            <span class="stage_desc_text stage_5_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">人見知りを吹き飛ばす、
                                イカ人間が誕生したのでした。
                            </span>
                        </h2>
                    </div>
                    <div class="stage_5_halery">
                        <span class="stage_5_halery_wrap">
                            <span class="stage_5_sunshine">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-2.png" class="stage_5_the_sunshine" alt="">
                            </span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-1.png" class="stage_5_the_graph" alt="これでおつまみを販売してみよう！">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_4">
                    <div class="stage_content stage_scene_4_content">
                        <h2 class="stage_caption stage_4_caption decort_text">
                            <span class="stage_4_caption_text d_text">第三章 誕生・イカ人間</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-3.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_4_desc stage_4_desc_1">
                            <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">順調に思われたおつまみ販売ですが、
                                初代に負けず劣らずの人見知りに成長した二代目は
                                魅力的なおつまみを販売するも
                                人前で話をすると顔が真っ赤になる始末。
                                必要不可欠なお客様の呼び込みにも
                                ドギマギしてしまいました。
                            </span>
                        </p>
                        <p class="stage_description stage_4_desc stage_4_desc_2">
                            <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">「何かうまい方法はないものか」と悩んでいると、
                                目の前に現れた人気の名刺屋さんが一言。
                                「イカの姿だと、勝手に声をかけてもらえるよ」
                                予言的なアドバイスをされた二代目は
                                「だったらイカに変身してみようかな〜」と
                                あっさりその気になりました。

                                そして…
                            </span>
                        </p>
                    </div>
                    <div class="stage_4_halery">
                        <span class="stage_4_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-3.png" class="stage_4_the_graph" alt="お、おつまみ、いかいかいかいかいかがですか？">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_3">
                    <div class="stage_content stage_scene_3_content">
                        <h2 class="stage_caption stage_3_caption decort_text">
                            <span class="stage_3_caption_text d_text">第ニ章 魅力的な商品</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-2.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_3_desc stage_3_desc_1">
                            <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">そのうち家業を手伝い始めた息子の二代目（現代表）。
                                初代と共にワカメを販売しつつも、
                                もっと魅力的な商品を求めた末に
                                問屋さんから紹介された「おつまみ」に辿り着きます。
                            </span>
                        </p>
                        <p class="stage_description stage_3_desc stage_3_desc_2">
                            <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">おつまみ販売の反応がよく、やがておつまみが主力商品に。
                                あまり世に知られていない美味しいおつまみが
                                全国にたくさんあることを知ったハレリーは、
                                この美味しさを世に届けることを決意したのでした。
                            </span>
                        </p>
                    </div>
                    <div class="stage_3_halery">
                        <span class="stage_3_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-2.png" class="stage_3_the_graph" alt="うめえ！これなら売れるべ！なぁ!?t">
                        </span>
                    </div>
                </section>
                <section class="stage_scene stage_scene_2">
                    <div class="stage_content stage_scene_2_content">
                        <h2 class="stage_caption stage_2_caption decort_text">
                            <span class="stage_2_caption_text d_text">第一章 ハレリー創業</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-1.png" class="d_img" alt="">
                        </h2>
                        <p class="stage_description stage_2_desc stage_2_desc_1">
                            <span class="stage_desc_text stage_2_desc_text f_writing_rl f__ltr__2 f__wt__8">創業は今から約40年前。
                                東京で行商を手伝っていた初代が故郷の新潟へUターンし、
                                その経験を生かして、塩蔵ワカメの行商をスタートします。
                                このワカメの販売が、ハレリーの始まりなのです。
                                人見知りの激しい初代でしたが、
                                思いきって社会の荒波に飛び込み
                                さまざまな企業や学校をまわりました。
                            </span>
                        </p>
                        <p class="stage_description stage_2_desc stage_2_desc_2">
                            <span class="stage_desc_text stage_2_desc_text f_writing_rl f__ltr__2 f__wt__8">ハレリーの語源は「ハレルヤ」。
                                感謝や賛美を表現したこの社名が
                                事業の前途を晴れやかに照らすのでした。
                            </span>
                        </p>
                    </div>
                    <div class="stage_2_halery">
                        <span class="stage_2_halery_wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-1.png" class="stage_2_the_graph" alt="ワ、ワカメ、いらいらいらいらいらんかの？">
                        </span>
                    </div>
                </section> -->
              </div>
            </div>
            <div class="stage_decorate">
              <span class="stage_decorate_1"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-1.svg" alt=""></span>
              <div class="stage_decorate_2">
                <span class="stage_decorate_2_left"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-2.svg" class="stage_decorate_2_left_elmt" alt=""></span>
                <span class="stage_decorate_2_right"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-2.svg" class="stage_decorate_2_right_elmt" alt=""></span>
              </div>
              <div class="stage_decorate_3">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-1-board.svg" class="stage_decorate_3_board" alt="">
                <span class="stage_decorate_3_light stage_decorate_3_light_ong">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-2-lights_ong.svg" alt="">
                            </span>
                <span class="stage_decorate_3_light stage_decorate_3_light_grn">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-3-lights_grn.svg" alt="">
                            </span>
              </div>
            </div>
          </div>

          <div class="stage_wrap w_max1366 sp_visible">
            <div id="stageWrap" class="sp_halery_stageWrap">
              <div id="stage" class="sp_halery_stage">
                <section class="sp_halery_stage_section sp_halery_stage_section-1">
                  <div class="sp_halery_stage_content stage_scene_1_content">
                    <h2 class="stage_1_stand decort_text">
                      <span class="stage_1_stand_text d_text">ハレリー誕生秘話</span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/pngelmt-scene_1-parts-1.png" class="d_img" alt="">
                    </h2>
                    <p class="stage_description stage_1_desc">
            <span class="stage_desc_text stage_1_desc_text">
            寄ってらっしゃい見てらっしゃい！<br>
            ハレリー劇場へようこそ。<br>
            私たちハレリーの誕生秘話とともに、<br>
            当ブランドの歩みについてお話しします。
            </span>
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-1.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-pc" alt="">
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-2.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-sp" alt="">
                    </p>
                    <div class="stage_1_ikauruma">
            <span class="stage_1_ikauruma_wrap elmt_uruma_wrap">
              <span class="stage_1_ikauruma_lefthand elmt_uruma_lefthand">
              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="stage_1_the_ikauruma_lefthand" alt="">
              </span>
              <span class="stage_1_ikauruma_righthand elmt_uruma_righthand">
              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="stage_1_the_ikauruma_righthand" alt="">
              </span>
              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="stage_1_ikauruma_body" alt="">
            </span>
                    </div>
                    <div class="stage_1_ika">
            <span class="stage_1_ika_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-7.svg" class="stage_1_the_ika" alt="">
            </span>
                    </div>
                  </div>
                </section>

                <section class="sp_halery_stage_section sp_halery_stage_section-2">
                  <div class="sp_halery_stage_content stage_scene_2_content">
                    <h2 class="sp_halery_stage_content_title">
                      <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-1.png" class="" alt="第一章 ハレリー創業">
                    </h2>
                    <p class="stage_description stage_2_desc stage_2_desc_1">
            <span class="stage_desc_text stage_2_desc_text">
            創業は今から約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">40</i> 年前。<br>
            東京で行商を手伝っていた初代が故郷の新潟へＵターンし、その経験を生かして、塩蔵ワカメの行商をスタートします。<br>
            このワカメの販売が、ハレリーの始まりなのです。<br>
            人見知りの激しい初代でしたが、思いきって社会の荒波に飛び込み、さまざまな企業や学校をまわりました。
            </span>
                    </p>
                    <p class="stage_description stage_2_desc stage_2_desc_2">
            <span class="stage_desc_text stage_2_desc_text">ハレリーの語源は｢ハレルヤ｣。<br>
            感謝や賛美を表現したこの社名が事業の前途を晴れやかに照らすのでした。
            </span>
                    </p>
                    <div class="stage_2_halery">
            <span class="stage_2_halery_wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-1.png" class="stage_2_the_graph" alt="ワ、ワカメ、いらいらいらいらいらんかの？">
            </span>
                    </div>
                  </div>
                </section>
              </div>
              <!-- /.sp_halery_stage -->
            </div>
            <!-- /.sp_halery_stageWrap -->
            <!--  <div class="the_halery_stage">-->
            <!--    <div class="stage_slide inn_slide_of_stage" dir="rtl">-->
            <!--      <section class="stage_scene stage_scene_1" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_1_content">-->
            <!--          <h2 class="stage_1_stand decort_text">-->
            <!--            <span class="stage_1_stand_text d_text">ハレリー誕生秘話</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/pngelmt-scene_1-parts-1.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_1_desc">-->
            <!--            <span class="stage_desc_text stage_1_desc_text f_writing_rl f__ln__36 f__ltr__min f__wt__8">-->
            <!--            寄ってらっしゃい見てらっしゃい！<br>-->
            <!--            ハレリー劇場へようこそ。<br>-->
            <!--            私たちハレリーの誕生秘話とともに、<br>-->
            <!--            当ブランドの歩みについてお話しします。-->
            <!--            </span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-1.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-pc" alt="">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-dialogue-2.svg" class="stage_1_desc_dailogue stage_1_desc_dailogue-sp" alt="">-->
            <!--          </p>-->
            <!--          <div class="stage_1_ikauruma">-->
            <!--            <span class="stage_1_ikauruma_wrap elmt_uruma_wrap">-->
            <!--              <span class="stage_1_ikauruma_lefthand elmt_uruma_lefthand">-->
            <!--              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_lefthand.svg" class="stage_1_the_ikauruma_lefthand" alt="">-->
            <!--              </span>-->
            <!--              <span class="stage_1_ikauruma_righthand elmt_uruma_righthand">-->
            <!--              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_righthand.svg" class="stage_1_the_ikauruma_righthand" alt="">-->
            <!--              </span>-->
            <!--              <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-uruma-1_body.svg" class="stage_1_ikauruma_body" alt="">-->
            <!--            </span>-->
            <!--          </div>-->
            <!--          <div class="stage_1_ika">-->
            <!--            <span class="stage_1_ika_wrap">-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/common/elmt-ika-7.svg" class="stage_1_the_ika" alt="">-->
            <!--            </span>-->
            <!--          </div>-->
            <!--        </div>-->
            <!--      </section>-->

            <!--      <section class="stage_scene stage_scene_2" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_2_content">-->
            <!--          <h2 class="stage_caption stage_2_caption decort_text">-->
            <!--            <span class="stage_2_caption_text d_text">第一章 ハレリー創業</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-1.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_2_desc stage_2_desc_1">-->
            <!--            <span class="stage_desc_text stage_2_desc_text">-->
            <!--            創業は今から約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">40</i> 年前。<br>-->
            <!--            東京で行商を手伝っていた初代が故郷の新潟へＵターンし、<br>-->
            <!--            その経験を生かして、塩蔵ワカメの行商をスタートします。<br>-->
            <!--            このワカメの販売が、ハレリーの始まりなのです。<br>-->
            <!--            人見知りの激しい初代でしたが、<br>-->
            <!--            思いきって社会の荒波に飛び込み<br>-->
            <!--            さまざまな企業や学校をまわりました。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--          <p class="stage_description stage_2_desc stage_2_desc_2">-->
            <!--            <span class="stage_desc_text stage_2_desc_text f_writing_rl f__ltr__2 f__wt__8">ハレリーの語源は｢ハレルヤ｣。<br>-->
            <!--            感謝や賛美を表現したこの社名が<br>-->
            <!--            事業の前途を晴れやかに照らすのでした。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="stage_2_halery">-->
            <!--          <span class="stage_2_halery_wrap">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-1.png" class="stage_2_the_graph" alt="ワ、ワカメ、いらいらいらいらいらんかの？">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_3" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_3_content">-->
            <!--          <h2 class="stage_caption stage_3_caption decort_text">-->
            <!--            <span class="stage_3_caption_text d_text">第ニ章 魅力的な商品</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-2.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_3_desc stage_3_desc_1">-->
            <!--            <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">そのうち家業を手伝い始めた息子の二代目(現代表)。<br>-->
            <!--            初代と共にワカメを販売しつつも、<br>-->
            <!--            もっと魅力的な商品を求めた末に<br>-->
            <!--            問屋さんから紹介された｢おつまみ｣に辿り着きます。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--          <p class="stage_description stage_3_desc stage_3_desc_2">-->
            <!--            <span class="stage_desc_text stage_3_desc_text f_writing_rl f__ltr__2 f__wt__8">おつまみ販売の反応がよく、やがておつまみが主力商品に。<br>-->
            <!--            あまり世に知られていない美味しいおつまみが<br>-->
            <!--            全国にたくさんあることを知ったハレリーは、<br>-->
            <!--            この美味しさを世に届けることを決意したのでした。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="stage_3_halery">-->
            <!--          <span class="stage_3_halery_wrap">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-2.png" class="stage_3_the_graph" alt="うめえ！これなら売れるべ！なぁ!?t">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_4" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_4_content">-->
            <!--          <h2 class="stage_caption stage_4_caption decort_text">-->
            <!--            <span class="stage_4_caption_text d_text">第三章 誕生・イカ人間</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-3.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_4_desc stage_4_desc_1">-->
            <!--            <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">順調に思われたおつまみ販売ですが、<br>-->
            <!--            初代に負けず劣らずの人見知りに成長した二代目は<br>-->
            <!--            魅力的なおつまみを販売するも<br class="sp_none">-->
            <!--            人前で話をすると顔が真っ赤になる始末。<br>-->
            <!--            必要不可欠なお客様の呼び込みにも<br class="sp_none">-->
            <!--            ドギマギしてしまいました。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--          <p class="stage_description stage_4_desc stage_4_desc_2">-->
            <!--            <span class="stage_desc_text stage_4_desc_text f_writing_rl f__ltr__2 f__wt__8">｢何かうまい方法はないものか｣と悩んでいると、<br>-->
            <!--            目の前に現れた人気の名刺屋さんが一言。<br>-->
            <!--            ｢イカの姿だと、勝手に声をかけてもらえるよ｣<br>-->
            <!--            予言的なアドバイスをされた二代目は<br>-->
            <!--            ｢だったらイカに変身してみようかな〜｣と<br class="sp_none">-->
            <!--            あっさりその気になりました。<br><br>-->
            <!--            そして…-->
            <!--            </span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="stage_4_halery">-->
            <!--          <span class="stage_4_halery_wrap">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-3.png" class="stage_4_the_graph" alt="お、おつまみ、いかいかいかいかいかがですか？">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_5" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_5_content">-->
            <!--          <h2 class="stage_description stage_5_desc">-->
            <!--            <span class="stage_desc_text stage_5_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">人見知りを吹き飛ばす、<br>-->
            <!--            イカ人間が誕生したのでした。-->
            <!--            </span>-->
            <!--          </h2>-->
            <!--        </div>-->
            <!--        <div class="stage_5_halery">-->
            <!--          <span class="stage_5_halery_wrap">-->
            <!--            <span class="stage_5_sunshine">-->
            <!--              <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-2.png" class="stage_5_the_sunshine" alt="">-->
            <!--            </span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-4-1.png" class="stage_5_the_graph" alt="これでおつまみを販売してみよう！">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_6" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_6_content">-->
            <!--          <h2 class="stage_caption stage_6_caption decort_text">-->
            <!--            <span class="stage_6_caption_text d_text">第四章 実は話好き？</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-4.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_6_desc stage_6_desc_1">-->
            <!--            <span class="stage_desc_text stage_6_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">こうして唐突に誕生したイカ人間でしたが、<br>-->
            <!--            いい変化はすぐに訪れます。<br>-->
            <!--            最初はイベントで遠巻きに様子をうかがっていた人々が、<br>-->
            <!--            ヘンテコでもの珍しい風貌のイカ人間に引き寄せられ、<br>-->
            <!--            ｢○○○○にいましたよね｣とよく話しかけられるように。<br>-->
            <!--            そこで判明したのは<br>-->
            <!--            ｢オレ、人見知りだけど、話好きなんだ｣という性格。<br>-->
            <!--            そんなこじらせ系のイカ人間も、今では小学生に大人気。<br>-->
            <!--            ただし<i class="stage_desc_text_rotate stage_desc_text_rotate_single">1</i> 〜<i class="stage_desc_text_rotate stage_desc_text_rotate_single">2</i> 歳のこどもの半数は<br>-->
            <!--            未確認生物にギャン泣きするので、<br>-->
            <!--            そっと人間の姿に戻ることもしばしばです。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="stage_6_halery">-->
            <!--          <span class="stage_6_halery_wrap">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-1.png" class="stage_6_the_graph sp_none" alt="あのイカ、前も見たわ何者かしら…">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-1-2.png" class="stage_6_the_graph sp_visible" alt="あのイカ、前も見たわ何者かしら…">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_7" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_7_content">-->
            <!--          <h2 class="stage_description stage_7_desc">-->
            <!--            <span class="stage_desc_text stage_7_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">イカの頭に手ごたえを感じ、<br>-->
            <!--            さらに奥の手アイテムを編み出します。<br>-->
            <!--            その名は｢試食棒｣。<br>-->
            <!--            試食コーナーで自然にできてしまう、お客様との距離は約<i class="stage_desc_text_rotate stage_desc_text_rotate_single">2</i> ｍ。<br>-->
            <!--            声をかけられないよう設けられた心と体の溝を、<br>-->
            <!--            埋める道具を発明したのです。<br>-->
            <!--            この棒は長い柄杓のようなもの。<br>-->
            <!--            ディスタンスは保ちつつ、棒だけがニョキニョキとお客様に近づき、<br>-->
            <!--            好奇心から試食に手を出してしまうという仕掛けです。<br>-->
            <!--            イカの姿で注目を集め、試食棒で回収する。<br>-->
            <!--            射程距離は約<i class="stage_desc_text_rotate">20</i>ｍにおよぶと推測しています。-->
            <!--            </span>-->
            <!--          </h2>-->
            <!--        </div>-->
            <!--        <div class="stage_7_halery">-->
            <!--          <span class="stage_7_halery_wrap">-->
            <!--          <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-5-2.png" class="stage_7_the_graph" alt="今だ…！">-->
            <!--          </span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--      <section class="stage_scene stage_scene_8" dir="ltr">-->
            <!--        <div class="stage_content stage_scene_8_content">-->
            <!--          <h2 class="stage_caption stage_8_caption decort_text">-->
            <!--            <span class="stage_8_caption_text d_text">最終章 マジメにふざけて、喜び合いたい</span>-->
            <!--            <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-caption-5.png" class="d_img" alt="">-->
            <!--          </h2>-->
            <!--          <p class="stage_description stage_8_desc stage_8_desc_1">-->
            <!--            <span class="stage_desc_text stage_8_desc_text f_writing_rl f__ln__36 f__ltr__2 f__wt__8">お客様を呼び込むことが苦手だった二代目が、<br class="sp_none">-->
            <!--            変身 + アイテムによって手に入れたもの。<br>-->
            <!--            それは｢おもしろそう！｣と感じてもらい、<br class="sp_none">-->
            <!--            人々が気軽にワチャワチャ集まってくる場をつくる術。<br>-->
            <!--            こうして世の中が気づいていないスキマ的な魅力を掘り起こし、<br>-->
            <!--            お客様とそのおいしさや楽しさを共有する使命を獲得しました。<br>-->
            <!--            めざすのは自分自身が楽しめて、<br class="sp_none">-->
            <!--            お客様も大いに喜んでくれる形。<br>-->
            <!--            これからもハレリーならではの行商スタイルと、<br>-->
            <!--            大マジメに繰り広げられる楽しいおふざけに<br class="sp_none">-->
            <!--            どうぞおつき合いくださいね。-->
            <!--            </span>-->
            <!--          </p>-->
            <!--        </div>-->
            <!--        <div class="stage_8_halery">-->
            <!--          <span class="stage_8_halery_wrap"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-graph-6.png" class="stage_8_the_graph" alt="末長いご愛顧をどうぞよろしくお願いします"></span>-->
            <!--        </div>-->
            <!--      </section>-->
            <!--    </div>-->
            <!--  </div>-->
            <div class="stage_decorate">
              <span class="stage_decorate_1"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-1.svg" alt=""></span>
              <div class="stage_decorate_2">
                <span class="stage_decorate_2_left"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-2.svg" class="stage_decorate_2_left_elmt" alt=""></span>
                <span class="stage_decorate_2_right"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/stage-parts-2.svg" class="stage_decorate_2_right_elmt" alt=""></span>
              </div>
              <div class="stage_decorate_3">
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-1-board.svg" class="stage_decorate_3_board" alt="">
                <span class="stage_decorate_3_light stage_decorate_3_light_ong"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-2-lights_ong.svg" alt=""></span>
                <span class="stage_decorate_3_light stage_decorate_3_light_grn"><img src="<?php echo get_template_directory_uri(); ?>/common/images/about/sign-1-3-lights_grn.svg" alt=""></span>
              </div>
            </div>
          </div>


          <div class="about_message_section">
            <div class="abt_msg_wrap w_max1366">
              <section class="abt_msg_content">
                <h2 class="abt_msg_caption decort_text">
                  <span class="abt_msg_cpt_text d_text">メッセージ</span>
                  <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/message-caption.png" class="d_img" alt="">
                </h2>
                <p class="abt_msg_description">
                  <strong class="abt_msg_desc_point f__20 f__ln__30 f__ltr__1 f__wt__8">ハレルヤ自由、ハレルヤ人生。</strong>
                  <span class="abt_msg_desc_text f__16 f__ln__42 f__ltr__1">私たちが大切にするのは、世の中に自由な選択肢を提案すること。
                                    だからこそ王道ではなくあえて脇道をつき進み、体験したことのないおいしさを探したい。
                                    コンビニでは出会えない、スーパーでは扱っていない、オリジナルな味わいを見つけたい。
                                    それがハレリーらしさだと思っています。
                                    実はこの考えを意識できたのは、こどもたちが支持してくれたから。
                                    「おつまみはお酒のおとも」という価値観から私たちを解放し、
                                    誰も気づかなかった方向から新しい驚きを提供するワクワクを教えてくれました。
                                    人々がもっと自由に、もっと人生を謳歌するための、もっとおもしろい商品を。
                                    自分らしく楽しむ道をゆく人を応援しながら、
                                    その先にハレリーのちょっと変わったおつまみお菓子があったらうれしい。
                                    自由な感覚こそ世界を広げるというメッセージを、ラインアップから感じてください。
                                </span>
                  <span class="abt_msg_the_sign f__16 f__ln__30 f__ltr__1 f__wt__6">代表<b class="abt_msg_the_name">宇留間 義矢</b></span>
                </p>
              </section>
              <div class="abt_msg_img_group">
                            <span class="abt_msg_sub_caption">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/message-sub_caption.png" alt="URUMA YOSHIYA">
                            </span>
                <ul class="abt_msg_img_lists">
                  <li class="abt_msg_img_the_list abt_msg_img_the_list_1">
                                    <span class="abt_msg_img_wrap abt_msg_img_wrap_1">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/real_urume-1.jpg" alt=""> -->
                                    </span>
                  </li>
                  <li class="abt_msg_img_the_list abt_msg_img_the_list_2">
                                    <span class="abt_msg_img_wrap abt_msg_img_wrap_2">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/real_urume-2.jpg" alt=""> -->
                                    </span>
                  </li>
                  <li class="abt_msg_img_the_list abt_msg_img_the_list_3">
                                    <span class="abt_msg_img_wrap abt_msg_img_wrap_3">
                                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/real_urume-3.jpg" alt=""> -->
                                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="about_service_section">
            <section class="abt_srv_wrap w_max1366">
              <h2 class="abt_srv_caption decort_text">
                <span class="abt_srv_cpt_text d_text">ハレリーの取り組み</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/service-caption.png" class="d_img" alt="">
              </h2>
              <div class="abt_srv_group">
                <section class="abt_srv_list abt_srv_list_1 abt_srv_list_reverse">
                  <div class="abt_srv_list_content">
                    <h3 class="abt_srv_list_title f__26 f__ltr__1 f__wt__8">キャリア教育授業</h3>
                    <p class="abt_srv_list_desc f__16 f__ln__36">イカのカブりものを着けた代表の宇留間が、新潟県内の小学校を訪問。全国もぐり菓子の発掘をはじめとする仕事のやりがいとともに、自らのしくじり人生も振り返りつつこれまでのキャリアをお話しします。約00年前から1年に2〜3校ずつ地道に続けてきた活動ですが、こどもたちにとってさまざまな職業、生き方、社会とのつながりを知るきっかけになればと思い実施しています。</p>
                  </div>
                  <span class="abt_srv_list_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/service-1.jpg" alt="">
                                </span>
                </section>
                <section class="abt_srv_list abt_srv_list_2">
                  <div class="abt_srv_list_content">
                    <h3 class="abt_srv_list_title f__26 f__ltr__1 f__wt__8">イベント出店</h3>
                    <p class="abt_srv_list_desc f__16 f__ln__36">観光施設や商業施設、道の駅などで開催されるイベントで頻繁に出店をおこなっています。ハレリー以外にも参加する店舗はたくさん。出店の仲間たちと共に地域を盛り上げ、多くのお客様に楽しみと美味しさを提供できるよう努めています。
                      イベント開催のお知らせはFacebook、ブログからご確認いただけます。</p>
                  </div>
                  <span class="abt_srv_list_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/service-2.jpg" alt="">
                                </span>
                </section>
                <section class="abt_srv_list abt_srv_list_3 abt_srv_list_reverse">
                  <div class="abt_srv_list_content">
                    <h3 class="abt_srv_list_title f__26 f__ltr__1 f__wt__8">デスクハレリー</h3>
                    <p class="abt_srv_list_desc f__16 f__ln__36">「デスクハレリー」とは職場に常設できる、おつまみお菓子の販売コーナーのこと。おつまみお菓子のほか、ふりかけやスープや海藻などの商品BOXをオフィスに設置。ご購入の方は集金BOXに代金を入れて、申込みフォームを送信する仕組みです。ちょっとひと息つきたいとき、小腹が空いたときにあると便利。設置のご希望の方はお気軽にご連絡ください。（〇〇〇内に限ります）</p>
                  </div>
                  <span class="abt_srv_list_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/service-3.jpg" alt="">
                                </span>
                </section>
              </div>
            </section>
          </div>
          <div class="about_company_section">
            <div class="abt_cmpy_wrap w_max1366">
              <h2 class="abt_cmpy_caption decort_text">
                <span class="abt_cmpy_cpt_text d_text">企業概要</span>
                <img src="<?php echo get_template_directory_uri(); ?>/common/images/about/company-caption.png" class="d_img" alt="">
              </h2>
              <div class="abt_cmpy_outline">
                <p class="abt_cmpy_ol_list">
                  <span class="abt_cmpy_ol_list_th f__16 f__ln__30 f__wt__6">会社名</span>
                  <span class="abt_cmpy_ol_list_td f__ln__30"><?php echo esc_html(get_field('company_name', 'option')); ?></span>
                </p>
                <p class="abt_cmpy_ol_list">
                  <span class="abt_cmpy_ol_list_th f__16 f__ln__30 f__wt__6">代表者</span>
                  <span class="abt_cmpy_ol_list_td f__ln__30"><?php echo esc_html(get_field('ceo', 'option')); ?></span>
                </p>
                <p class="abt_cmpy_ol_list">
                  <span class="abt_cmpy_ol_list_th f__16 f__ln__30 f__wt__6">所在地</span>
                  <span class="abt_cmpy_ol_list_td f__ln__30"><?php echo esc_html(get_field('address', 'option')); ?><br>
                                    TEL：<?php echo esc_html(get_field('tel_num', 'option')); ?>　FAX：<?php echo esc_html(get_field('fax_num', 'option')); ?></span>
                </p>
                <p class="abt_cmpy_ol_list">
                  <span class="abt_cmpy_ol_list_th f__16 f__ln__30 f__wt__6">創業</span>
                  <span class="abt_cmpy_ol_list_td f__ln__30"><?php echo esc_html(get_field('founding', 'option')); ?></span>
                </p>
                <p class="abt_cmpy_ol_list abt_cmpy_ol_list_last">
                  <span class="abt_cmpy_ol_list_th f__16 f__ln__30 f__wt__6">主要取引先</span>
                  <span class="abt_cmpy_ol_list_td abt_cmpy_ol_list_td_no_preline f__ln__30">
                    <?php
                    $args = array(
                      'post_type' => 'clients',
                      'posts_per_page' => -1,
                    );

                    $the_query = new WP_Query( $args );

                    // ループ
                    if ( $the_query->have_posts() ) : ?>
                      <?php
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                      ?>
                        <b class="abt_cmpy_client f__wt__5"><q class="quotes_typ_dot"><?php the_title(); ?></q></b>
                      <?php
                      endwhile;
                    endif;

                    // 投稿データをリセット
                    wp_reset_postdata();
                    ?>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- //main content -->

  <?php
  endwhile;
  else : ?>

  <?php endif; ?>

  <script>
    var oyaDIV=document.getElementById('stageWrap');
    var koDIV=document.getElementById('stage');
    function leftScroll() {
      oyaDIV.scrollLeft=koDIV.scrollWidth;
    }
    $(window).on('load', function() {
      leftScroll();
    });

    var lastInnerWidth = window.innerWidth ;

    window.addEventListener( "resize", function () {
      // 現在と前回の横幅が違う場合だけ実行
      if ( lastInnerWidth != window.innerWidth ) {
        // 横幅を記録しておく
        lastInnerWidth = window.innerWidth ;
        leftScroll();
        // 処理内容
      }
    } ) ;

  </script>

<?php
get_footer();

