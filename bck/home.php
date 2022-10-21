<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<main>
  <article>
    <section class="test">
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
        <!--/video-area-->
      </div>
    </section>
  </article>

  <article>
    <section class="wrapper">
      <div id="container">
        <span>MENU</span>
        <!--/container-->
      </div>
      
      <div class="section">
        <div class="sliderArea">
          <div class="regular slider">
            <div><img src="https://125naroom.com/demo/img/itukanokotonokoto01.jpg" alt="125naroom"></div>
            <div><img src="https://125naroom.com/demo/img/itukanokotonokoto02.jpg" alt="125naroom"></div>
            <div><img src="https://125naroom.com/demo/img/itukanokotonokoto03.jpg" alt="125naroom"></div>
            <div><img src="https://125naroom.com/demo/img/itukanokotonokoto04.jpg" alt="125naroom"></div>
            <div><img src="https://125naroom.com/demo/img/itukanokotonokoto05.jpg" alt="125naroom"></div>
          </div>
        </div>
      </div>



    </section>
  </article>
</main>

<?php get_footer(); ?>