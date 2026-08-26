<?php
/**
 * お知らせの個別ページ
 *
 * @package nijiiro-hiroba
 */

get_header();
?>

<main id="main">
  <section class="sec news-single">
    <div class="wrap wrap--narrow">
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'news-single__art' ); ?>>
          <div class="news-single__meta">
            <time class="news__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
            <?php $terms = get_the_terms( get_the_ID(), 'news_cat' ); ?>
            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
              <span class="news__cat"><?php echo esc_html( $terms[0]->name ); ?></span>
            <?php endif; ?>
          </div>

          <h1 class="news-single__ttl"><?php the_title(); ?></h1>

          <?php if ( has_post_thumbnail() ) : ?>
            <figure class="news-single__thumb"><?php the_post_thumbnail( 'large' ); ?></figure>
          <?php endif; ?>

          <div class="news-single__body">
            <?php the_content(); ?>
          </div>
        </article>

        <nav class="news-single__nav" aria-label="お知らせの前後">
          <?php previous_post_link( '<span class="news-single__prev">%link</span>', '前のお知らせ' ); ?>
          <a class="btn btn--ghost" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">一覧へもどる</a>
          <?php next_post_link( '<span class="news-single__next">%link</span>', '次のお知らせ' ); ?>
        </nav>
      <?php endwhile; ?>
    </div>
  </section>
</main>

<?php
get_footer();
