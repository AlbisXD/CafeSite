
<main>
  <article>
    <section class="wrapper">
      <div class="pickup-all">
        <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news',
          // ランダムで表示
          'orderby' => 'rand',
          // 1ページに表示する投稿数
          'posts_per_page' => 3,
        );
        // データの取得
        $posts = get_posts($args);
        ?>

        <!-- ループ処理 -->
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>

          <div class="pickup">
            <div>
              <!-- 投稿にアイキャッチ画像がある場合、出力 -->
              <?php
              if (has_post_thumbnail()) :
                the_post_thumbnail();
              endif;
              ?>
            </div>
            <!-- 投稿文字を出力 -->
            <h2><?php
                $content = wp_trim_words(get_the_content(),  38, '...');
                echo $content;
                ?>
            </h2>
            <div class="readmore">
              <!-- aタグで投稿記事へのリンクを作成 -->
              <a href="<?php echo get_permalink(); ?>">
                READ MORE
              </a>
            </div>
          </div>

        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

      </div>
    </section>
  </article>

  <article>
    <section id="main-content" class="wrapper">
      <div class="container">
        <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news',
          // 1ページに表示する投稿数
          'posts_per_page' => 3,
        );
        // データの取得
        $posts = get_posts($args);
        ?>

        <!-- ループ処理 -->
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>
          <div class="news_post">
            <div class="title">
              <!--  投稿記事のタイトルを表示する -->
              <?php the_title(); ?>
            </div>
            <ul class="second">
              <li>
                <!-- 日付を出力する -->
                投稿日：<?php echo get_the_date(); ?>
              </li>
              <li>
                <!-- タグを出力する -->
                <!-- <div class="tag">
                  #<?php the_tags(''); ?>
                </div> -->
              </li>
            </ul>

            <!-- 投稿にアイキャッチ画像がある場合、出力 -->
            <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail();
            endif;
            ?>
            <!-- 投稿文字を出力 -->
            <p><?php
                $content = wp_trim_words(get_the_content(),  38, '...');
                echo $content;
                ?>
            </p>
            <div class="readmore">
              <!-- aタグで投稿記事へのリンクを作成 -->
              <a href="<?php echo get_permalink(); ?>">
                READ MORE
              </a>
            </div>
          </div>

        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

      </div>

      <!-- サイト右側（プロフィールなど） -->
      <div class="side-content">
        <?php get_sidebar(); ?>
      </div>
    </section>
  </article>
</main>