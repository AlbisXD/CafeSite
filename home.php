<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<main>
  <article>
    <section class="movie">
      <div id="video-area">
        <video id="video" poster="<?php echo get_template_directory_uri(); ?>/images/movie.jpg" webkit-playsinline playsinline muted autoplay loop>
          <!--
          poster：動画ファイルが利用できない環境で代替表示される画像
          webkit-playsinline：iOS 9までのSafari用インライン再生指定
          playsinline：iOS 10以降のSafari用インライン再生指定
          muted：音声をミュートさせる
          autoplay：動画を自動再生させる
          loop：動画をループさせる
          controls：コントロールバーを表示する
          -->
          <source src="<?php echo get_template_directory_uri(); ?>/images/movie.mp4" type="video/mp4">
          <source src="<?php echo get_template_directory_uri(); ?>/images/movie.ogv" type="video/ogv">
          <source src="<?php echo get_template_directory_uri(); ?>/images/movie.webm" type="video/webm">
          <p>動画を再生できる環境ではありません。</p>
        </video>

        <div class="videotext">
          ここにテキストが入ります
        </div>

      </div>

    </section>

    <section>
      <div class="news">
        <div class="newstitle commontitle">
          <span>NEWS</span>
        </div>
        <ul>

        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type'      => 'post',
            // カテゴリー名
            'category_name' => 'news, event',
            // 1ページに表示する投稿数
            'posts_per_page' => 5,
          );
          // データの取得
          $posts = get_posts($args);
        ?>
        <!-- ループ処理 -->
        <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>

          <li class="newslist">
            <div class="list-group">
              <div class="time"><?php echo get_the_date(); ?></div>
              <div><?php the_title(); ?></div>
            </div>
          </li>

          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>

    <section>
      <div class="concept">
        <div class="concepttitle commontitle">
          <span>CONCEPT</span>
          <p>ここにテキストが入ります。</p>
        </div>
        <div class="conceptimg">
          <img src="<?php echo get_template_directory_uri(); ?>/images/concept.jpg" alt="1" ">
        </div>
      </div>
      </div>
    </section>

    <section>
      <div class="linuuptitle commontitle">
        <span>LINE UP</span>
      </div>

      <div class="section">
        <div class="sliderArea">
          <div class="regular slider">
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/lineup1.jpg" alt="1"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/lineup2.jpg" alt="2"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/lineup3.jpg" alt="3"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/lineup4.jpg" alt="4"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/lineup5.jpg" alt="5"></div>
          </div>
        </div>
      </div>
    </section>



    <section>
      <div class="access">
        <div class="accessarea">
          <div class="accesstext">
            <div class="accesstitle commontitle">
              <span>ACCESS</span>
            </div>

            <table>
              <tr>
                <th>住所</th>
                <td>〒279-0031 千葉県浦安市舞浜１−１</td>
              </tr>
              <tr>
                <th>TEL</th>
                <td>999-999-9999</td>
              </tr>
              <tr>
                <th>時間</th>
                <td>8：00～21：00</td>
              </tr>
              <tr>
                <th>アクセス</th>
                <td>〇〇〇駅から徒歩3分</td>
              </tr>
              <tr>
                <th>定休日</th>
                <td>毎週月曜日</td>
              </tr>
            </table>

          </div>
          <div class="map" id="link-access">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12971.486565933585!2d139.88663311598228!3d35.63089074642586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60187d03114737b3%3A0xe4d93636d509d3cb!2z5p2x5Lqs44OH44Kj44K644OL44O844Op44Oz44OJ!5e0!3m2!1sja!2sjp!4v1665578763958!5m2!1sja!2sjp" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>


  </article>
</main>

<?php get_footer(); ?>