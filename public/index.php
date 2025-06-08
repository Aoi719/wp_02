<?php get_header(); ?>

<div class="page-body-wrapper">
  <?php get_template_part('inc/header'); ?>

  <main class="main">
    <section class="section pickup">
      <div class="section__inner">
        <div class="grid-col3">
          <div class="grid-col3__item">
            <div class="pickup__img">
              <img src="/assets/images/img01_01.jpg" alt="" />
            </div>
            <div class="pickup__text">タイトルテキストテキストテキストテキストテキストテキストテキスト</div>
            <div class="pickup__more">
              <a href="#">READ MORE</a>
            </div>
          </div>
          <div class="grid-col3__item">
            <div class="pickup__img">
              <img src="/assets/images/img01_02.jpg" alt="" />
            </div>
            <div class="pickup__text">タイトルテキストテキストテキストテキストテキストテキストテキスト</div>
            <div class="pickup__more">
              <a href="#">READ MORE</a>
            </div>
          </div>
          <div class="grid-col3__item">
            <div class="pickup__img">
              <img src="/assets/images/img01_03.jpg" alt="" />
            </div>
            <div class="pickup__text">タイトルテキストテキストテキストテキストテキストテキストテキスト</div>
            <div class="pickup__more">
              <a href="#">READ MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section__inner">
        <div class="content-grid">
          <div class="content-grid__item articles">
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <?php
                $cat = get_the_category();
                $catname = $cat[0]->name;
                ?>

                <article class="article">
                  <div class="article__title"><?php the_title() ?></div>
                  <div class="article__info">
                    <div class="date"><time datetime="2020-01-01"><?php the_time(get_option('date_format')); ?></time></div>
                    <div class="category"><?php echo esc_html($catname); ?></div>
                  </div>
                  <div class="article__img">
                    <?php
                    if (has_post_thumbnail()):
                      $id = get_post_thumbnail_id();
                      $img = wp_get_attachment_image_src($id, 'large');
                    else:
                      $img = array(get_template_directory_uri() . '/img/default.png');
                    endif;
                    ?>
                    <img src="<?php echo $img[0]; ?>" alt="" />
                  </div>
                  <div class="article__text">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="article__more">
                    <a href="<?php the_permalink(); ?>">READ MORE</a>
                  </div>
                </article>
              <?php endwhile; ?>
            <?php else: ?>
              <p>記事が見つかりませんでした</p>
            <?php endif; ?>
            <?php
            if (function_exists("pagination")) {
              pagination($wp_query->max_num_pages);
            }
            ?>
          </div>

          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
  </main>

  <?php get_template_part('inc/footer'); ?>

</div>

<?php get_footer(); ?>

</body>

</html>