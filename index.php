<?php
/**
 * 基本テンプレート（トップページ以外で使われます）
 *
 * @package nijiiro-hiroba
 */

get_header();
?>

<main id="main" class="sec">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1 class="sec__ttl"><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>ページが見つかりませんでした。</p>
    <?php endif; ?>
  </div>
</main>

<?php
get_footer();
