<?php
/**
 * お知らせ一覧ページ
 *
 * @package nijiiro-hiroba
 */

get_header();
?>

<main id="main">
  <section class="sec news news--archive">
    <div class="wrap">
      <div class="sec__head">
        <span class="eyebrow eyebrow--sky">News</span>
        <h1 class="sec__title">にじいろひろばの<em>お知らせ</em></h1>
        <p class="sec__lead">教室からのご連絡や、イベントのご案内をお届けします。</p>
      </div>

      <?php if ( have_posts() ) : ?>
        <ul class="news__list">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="news__item">
              <a class="news__link" href="<?php the_permalink(); ?>">
                <time class="news__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></time>
                <?php $terms = get_the_terms( get_the_ID(), 'news_cat' ); ?>
                <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                  <span class="news__cat"><?php echo esc_html( $terms[0]->name ); ?></span>
                <?php endif; ?>
                <span class="news__ttl"><?php the_title(); ?></span>
                <svg class="ic news__arw" aria-hidden="true"><use href="#i-arrow"/></svg>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>

        <div class="news__pager">
          <?php
          the_posts_pagination(
            array(
              'mid_size'  => 1,
              'prev_text' => '前へ',
              'next_text' => '次へ',
            )
          );
          ?>
        </div>
      <?php else : ?>
        <p class="news__empty">お知らせは準備中です。</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
