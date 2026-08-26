<?php
/**
 * トップページ
 *
 * @package nijiiro-hiroba
 */

get_header();
?>

<main id="main">


<!-- ========================= HERO ========================= -->
<section class="hero" id="top">
  <div class="wrap hero__grid">
    <div class="hero__copy">
      <span class="hero__badge">
        <svg aria-hidden="true"><use href="#i-rainbow"/></svg>
        神戸市東灘区・送迎あり／小1〜高3
      </span>
      <h1>一人ひとりの<br><span class="hl">笑顔と成長</span>を<br>大切に。</h1>
      <p class="hero__lead">
        学校が終わったら、まっすぐ帰れる「もうひとつの家」へ。
        できたことを一緒に喜んで、つまずいたら一緒に考える。
        にじいろひろばは、そんな放課後を過ごす場所です。
      </p>
      <div class="hero__btns">
        <a class="btn btn--lg" href="#contact">見学・体験を申し込む
          <svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>
        </a>
        <a class="btn btn--lg btn--ghost" href="#flow">一日の流れを見る</a>
      </div>

      <ul class="hero__facts">
        <li class="fact">
          <span class="fact__dot" style="background:var(--sun-tint)"><svg aria-hidden="true"><use href="#i-clock"/></svg></span>
          <span class="fact__t"><small>Open</small>平日 13:00–18:00</span>
        </li>
        <li class="fact">
          <span class="fact__dot" style="background:var(--sky-tint)"><svg aria-hidden="true"><use href="#i-bus"/></svg></span>
          <span class="fact__t"><small>Pick up</small>学校・ご自宅へ送迎</span>
        </li>
        <li class="fact">
          <span class="fact__dot" style="background:var(--leaf-tint)"><svg aria-hidden="true"><use href="#i-hands"/></svg></span>
          <span class="fact__t"><small>Staff</small>1日あたり定員10名</span>
        </li>
      </ul>
    </div>

    <!-- hero illustration -->
    <div class="hero__art">
      <svg viewBox="0 0 560 500" role="img" aria-label="虹と太陽の下で笑顔で手をあげる子どもたちのイラスト">
        <!-- sun -->
        <g class="spin" style="transform-origin:466px 82px">
          <g stroke="#FFC93D" stroke-width="7" stroke-linecap="round">
            <path d="M466 24v-14M466 154v14M524 82h14M394 82h-14M507 41l10-10M425 123l-10 10M507 123l10 10M425 41l-10-10"/>
          </g>
        </g>
        <circle cx="466" cy="82" r="40" fill="url(#gSun)"/>
        <path d="M453 76q5-7 10 0M469 76q5-7 10 0" stroke="#B8862A" stroke-width="3.6" fill="none" stroke-linecap="round"/>
        <path d="M456 92q10 9 20 0" stroke="#B8862A" stroke-width="3.6" fill="none" stroke-linecap="round"/>

        <!-- rainbow -->
        <g stroke-linecap="round" fill="none">
          <path d="M40 330a190 190 0 0 1 380 0" stroke="#FF93A6" stroke-width="17"/>
          <path d="M62 330a168 168 0 0 1 336 0" stroke="#FFC93D" stroke-width="17"/>
          <path d="M84 330a146 146 0 0 1 292 0" stroke="#A7DCBD" stroke-width="17"/>
          <path d="M106 330a124 124 0 0 1 248 0" stroke="#37AFD6" stroke-width="17"/>
        </g>

        <!-- clouds -->
        <g class="float">
          <g fill="#fff">
            <ellipse cx="82" cy="120" rx="42" ry="27"/><ellipse cx="118" cy="112" rx="32" ry="24"/><ellipse cx="52" cy="128" rx="26" ry="19"/>
          </g>
        </g>
        <g class="float float--b">
          <g fill="#fff" opacity=".92">
            <ellipse cx="470" cy="216" rx="36" ry="23"/><ellipse cx="440" cy="222" rx="26" ry="18"/><ellipse cx="498" cy="224" rx="24" ry="17"/>
          </g>
        </g>

        <!-- stars -->
        <g class="float float--c">
          <path d="M158 62l4.4 9.2 10 1.4-7.2 7 1.7 10-9-4.8-9 4.8 1.7-10-7.2-7 10-1.4Z" fill="#FFC93D"/>
        </g>
        <path d="M366 150l3.4 7 7.7 1.1-5.6 5.4 1.3 7.6-6.8-3.6-6.8 3.6 1.3-7.6-5.6-5.4 7.7-1.1Z" fill="#A9E0F1"/>

        <!-- balloons -->
        <g class="float float--b">
          <path d="M512 296v46" stroke="#C7B9A6" stroke-width="2" fill="none"/>
          <ellipse cx="512" cy="278" rx="24" ry="28" fill="#FF93A6"/>
          <ellipse cx="504" cy="268" rx="6" ry="9" fill="#fff" opacity=".45"/>
        </g>
        <g class="float">
          <path d="M52 300v42" stroke="#C7B9A6" stroke-width="2" fill="none"/>
          <ellipse cx="52" cy="284" rx="21" ry="25" fill="#A99BE0"/>
          <ellipse cx="45" cy="275" rx="5" ry="8" fill="#fff" opacity=".45"/>
        </g>

        <!-- ground -->
        <path d="M0 430c90-26 180-26 280 0s190 26 280 0v70H0Z" fill="#EEF7F1"/>
        <path d="M0 452c96-20 184-20 280 0s188 20 280 0v48H0Z" fill="#DDF0E4"/>

        <!-- tree -->
        <g>
          <rect x="504" y="384" width="14" height="62" rx="7" fill="#B98A5E"/>
          <circle cx="511" cy="368" r="40" fill="#78C596"/>
          <circle cx="484" cy="386" r="25" fill="#A7DCBD"/>
          <circle cx="538" cy="388" r="22" fill="#A7DCBD"/>
        </g>

        <!-- kid: center, arms up -->
        <g>
          <rect x="253" y="404" width="14" height="44" rx="7" fill="#4A6E8A"/>
          <rect x="277" y="404" width="14" height="44" rx="7" fill="#4A6E8A"/>
          <path d="M240 336c0-16 13-26 32-26s32 10 32 26v58c0 10-8 16-18 16h-28c-10 0-18-6-18-16v-58Z" fill="#FFC93D"/>
          <path d="M243 344l-24-40a11 11 0 0 1 19-11l18 32Z" fill="#FFC93D"/>
          <path d="M301 344l24-40a11 11 0 0 0-19-11l-18 32Z" fill="#FFC93D"/>
          <circle cx="215" cy="296" r="12" fill="#FFDFC4"/><circle cx="329" cy="296" r="12" fill="#FFDFC4"/>
          <circle cx="272" cy="272" r="44" fill="#FFDFC4"/>
          <path d="M228 272a44 44 0 0 1 88 0c0-22-14-36-44-36s-44 14-44 36Z" fill="#5A4636"/>
          <path d="M254 270q6-8 12 0M278 270q6-8 12 0" stroke="#3A322B" stroke-width="5" fill="none" stroke-linecap="round"/>
          <path d="M258 288q14 12 28 0" stroke="#3A322B" stroke-width="5" fill="none" stroke-linecap="round"/>
          <circle cx="242" cy="284" r="7.5" fill="#FFB4C0" opacity=".7"/><circle cx="302" cy="284" r="7.5" fill="#FFB4C0" opacity=".7"/>
        </g>

        <!-- kid: left -->
        <g>
          <rect x="151" y="410" width="12" height="38" rx="6" fill="#7A5A3C"/>
          <rect x="172" y="410" width="12" height="38" rx="6" fill="#7A5A3C"/>
          <path d="M142 366c0-14 11-23 26-23s26 9 26 23v42c0 9-6 14-15 14h-22c-9 0-15-5-15-14v-42Z" fill="#37AFD6"/>
          <path d="M144 374l-20 22a9 9 0 0 0 13 13l17-19Z" fill="#37AFD6"/>
          <path d="M192 374l20 22a9 9 0 0 1-13 13l-17-19Z" fill="#37AFD6"/>
          <circle cx="128" cy="404" r="10" fill="#FFE2CB"/><circle cx="208" cy="404" r="10" fill="#FFE2CB"/>
          <circle cx="168" cy="316" r="36" fill="#FFE2CB"/>
          <path d="M132 318c0-22 15-34 36-34s36 12 36 34c0-8-5-12-13-12H145c-8 0-13 4-13 12Z" fill="#3E3129"/>
          <circle cx="132" cy="322" r="9" fill="#3E3129"/><circle cx="204" cy="322" r="9" fill="#3E3129"/>
          <path d="M153 314q5-7 10 0M173 314q5-7 10 0" stroke="#3A322B" stroke-width="4.4" fill="none" stroke-linecap="round"/>
          <path d="M157 330q11 10 22 0" stroke="#3A322B" stroke-width="4.4" fill="none" stroke-linecap="round"/>
          <circle cx="142" cy="327" r="6.5" fill="#FFB4C0" opacity=".7"/><circle cx="194" cy="327" r="6.5" fill="#FFB4C0" opacity=".7"/>
        </g>

        <!-- kid: right -->
        <g>
          <rect x="378" y="412" width="12" height="36" rx="6" fill="#6A5F55"/>
          <rect x="398" y="412" width="12" height="36" rx="6" fill="#6A5F55"/>
          <path d="M369 372c0-14 11-22 25-22s25 8 25 22v40c0 9-6 14-14 14h-22c-8 0-14-5-14-14v-40Z" fill="#FF93A6"/>
          <path d="M371 380l-19 16a9 9 0 0 0 11 14l16-14Z" fill="#FF93A6"/>
          <path d="M417 380l19 16a9 9 0 0 1-11 14l-16-14Z" fill="#FF93A6"/>
          <circle cx="356" cy="404" r="9.5" fill="#F6D3B4"/><circle cx="432" cy="404" r="9.5" fill="#F6D3B4"/>
          <circle cx="394" cy="326" r="34" fill="#F6D3B4"/>
          <path d="M360 328c0-22 14-34 34-34s34 12 34 34c0-10-6-14-13-14-10 0-12-8-21-8s-11 8-21 8c-7 0-13 4-13 14Z" fill="#B8703C"/>
          <path d="M380 324q5-7 10 0M398 324q5-7 10 0" stroke="#3A322B" stroke-width="4.2" fill="none" stroke-linecap="round"/>
          <path d="M383 340q11 10 22 0" stroke="#3A322B" stroke-width="4.2" fill="none" stroke-linecap="round"/>
          <circle cx="369" cy="337" r="6" fill="#FFB4C0" opacity=".7"/><circle cx="419" cy="337" r="6" fill="#FFB4C0" opacity=".7"/>
        </g>

        <!-- flowers -->
        <g>
          <path d="M96 448v-22" stroke="#78C596" stroke-width="4" stroke-linecap="round"/>
          <g fill="#FFC93D"><circle cx="96" cy="418" r="7"/><circle cx="86" cy="424" r="7"/><circle cx="106" cy="424" r="7"/><circle cx="90" cy="434" r="7"/><circle cx="102" cy="434" r="7"/></g>
          <circle cx="96" cy="426" r="5" fill="#fff"/>
        </g>
        <g>
          <path d="M456 452v-20" stroke="#78C596" stroke-width="4" stroke-linecap="round"/>
          <g fill="#FF93A6"><circle cx="456" cy="424" r="6.5"/><circle cx="447" cy="430" r="6.5"/><circle cx="465" cy="430" r="6.5"/><circle cx="450" cy="439" r="6.5"/><circle cx="462" cy="439" r="6.5"/></g>
          <circle cx="456" cy="432" r="4.5" fill="#fff"/>
        </g>
      </svg>

      <!-- スナップ写真カード -->
      <figure class="ph ph--snap hero__snap hero__snap--a float">
        <span class="ph__in">
          <svg viewBox="0 0 200 150" role="img" aria-label="おやつの時間の写真">
            <rect width="200" height="150" fill="#FFF6E1"/>
            <rect y="104" width="200" height="46" fill="#F0DFC0"/>
            <ellipse cx="100" cy="106" rx="72" ry="14" fill="#FFE6A0"/>
            <circle cx="70" cy="70" r="26" fill="#FFDFC4"/>
            <path d="M44 70c0-16 11-25 26-25s26 9 26 25c0-7-4-10-11-10H55c-7 0-11 3-11 10Z" fill="#6B4E38"/>
            <path d="M58 68q4-5 8 0M72 68q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M61 80q9 8 18 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="48" y="98" width="44" height="30" rx="9" fill="#FFC93D"/>
            <circle cx="146" cy="78" r="22" fill="#F6D3B4"/>
            <path d="M124 80c0-14 10-22 22-22s22 8 22 22c0-6-4-9-9-9h-26c-5 0-9 3-9 9Z" fill="#B8703C"/>
            <path d="M136 76q3-5 7 0M149 76q3-5 7 0" stroke="#3A322B" stroke-width="2.8" fill="none" stroke-linecap="round"/>
            <path d="M139 87q7 7 14 0" stroke="#3A322B" stroke-width="2.8" fill="none" stroke-linecap="round"/>
            <rect x="126" y="102" width="40" height="26" rx="8" fill="#FF93A6"/>
            <circle cx="110" cy="112" r="11" fill="#fff"/><circle cx="110" cy="112" r="6" fill="#F2891F"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-snap-01.jpg" alt="おやつを食べる子どもたち" loading="lazy" decoding="async" onerror="this.remove()"></span>
        <figcaption>おやつの時間</figcaption>
      </figure>

      <figure class="ph ph--snap hero__snap hero__snap--b float float--c">
        <span class="ph__in">
          <svg viewBox="0 0 200 150" role="img" aria-label="工作をしている写真">
            <rect width="200" height="150" fill="#EEF7F1"/>
            <rect y="98" width="200" height="52" fill="#DDF0E4"/>
            <rect x="26" y="92" width="148" height="12" rx="6" fill="#B98A5E"/>
            <circle cx="100" cy="56" r="28" fill="#FFE2CB"/>
            <path d="M72 58c0-18 12-28 28-28s28 10 28 28c0-8-5-11-11-11H83c-6 0-11 3-11 11Z" fill="#3E3129"/>
            <path d="M87 54q4-6 9 0M103 54q4-6 9 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M90 68q10 9 20 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="74" y="84" width="52" height="20" rx="8" fill="#37AFD6"/>
            <rect x="34" y="70" width="10" height="24" rx="5" fill="#FF93A6"/>
            <rect x="50" y="62" width="10" height="32" rx="5" fill="#FFC93D"/>
            <rect x="150" y="66" width="10" height="28" rx="5" fill="#A99BE0"/>
            <path d="M158 34l4 8 9 1.3-6.5 6.2 1.5 8.8-8-4.3-8 4.3 1.5-8.8L145 43.3l9-1.3Z" fill="#FFC93D"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hero-snap-02.jpg" alt="工作に取り組む子ども" loading="lazy" decoding="async" onerror="this.remove()"></span>
        <figcaption>今日の工作</figcaption>
      </figure>
    </div>
  </div>

  <svg class="wave" viewBox="0 0 1440 90" preserveAspectRatio="none" aria-hidden="true" style="margin-top:-2px">
    <path d="M0 46c180 42 320-30 520-18s300 62 480 46 260-52 440-30v46H0Z" fill="#fff"/>
  </svg>
</section>

<!-- ========================= NEWS ========================= -->
<section class="sec news" id="news">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--sky">News</span>
      <h2 class="sec__title">にじいろひろばの<em>お知らせ</em></h2>
      <p class="sec__lead">教室からのご連絡や、イベントのご案内をお届けします。</p>
    </div>

    <?php
    $news_query = new WP_Query(
      array(
        'post_type'      => 'news',
        'posts_per_page' => 3,
        'no_found_rows'  => true,
      )
    );
    ?>

    <?php if ( $news_query->have_posts() ) : ?>
      <ul class="news__list rv">
        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
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

      <div class="news__more rv">
        <a class="btn btn--ghost" href="<?php echo esc_url( get_post_type_archive_link( 'news' ) ); ?>">お知らせをすべて見る</a>
      </div>
    <?php else : ?>
      <p class="news__empty rv">お知らせは準備中です。</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</section>

<!-- ========================= FEATURES ========================= -->
<section class="sec feat" id="feature">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--sun">Our features</span>
      <h2 class="sec__title">にじいろひろばの<em>4つの約束</em></h2>
      <p class="sec__lead">「ここなら大丈夫」と思ってもらえる場所であるために、大切にしていることがあります。</p>
    </div>

    <ul class="feat__grid">
      <li class="card feat__card rv">
        <span class="plate plate--sun"><svg aria-hidden="true"><use href="#i-star"/></svg></span>
        <span class="feat__no">Feature 01</span>
        <h3>その子だけの計画を立てます</h3>
        <p>得意なこと・苦手なことは一人ひとり違います。ご家庭と学校の様子をうかがったうえで個別支援計画をつくり、半年ごとに見直します。</p>
      </li>
      <li class="card feat__card rv">
        <span class="plate plate--sky"><svg aria-hidden="true"><use href="#i-calendar"/></svg></span>
        <span class="feat__no">Feature 02</span>
        <h3>予定が目で見てわかります</h3>
        <p>その日の流れを絵カードのボードで掲示します。次に何をするかがわかると、見通しが立って安心して過ごせます。</p>
      </li>
      <li class="card feat__card rv">
        <span class="plate plate--leaf"><svg aria-hidden="true"><use href="#i-bus"/></svg></span>
        <span class="feat__no">Feature 03</span>
        <h3>学校とご自宅へ送迎します</h3>
        <p>学校までお迎えに行き、活動が終わったらご自宅までお送りします。お仕事や下のお子さまの都合に合わせてご相談ください。</p>
      </li>
      <li class="card feat__card rv">
        <span class="plate plate--blossom"><svg aria-hidden="true"><use href="#i-hands"/></svg></span>
        <span class="feat__no">Feature 04</span>
        <h3>毎日の様子をお伝えします</h3>
        <p>連絡帳と写真つきの活動記録で、その日できたこと・楽しかったことを共有します。気になることは電話でもすぐにご相談を。</p>
      </li>
    </ul>
  </div>
</section>

<!-- ========================= SCHEDULE BOARD (signature) ========================= -->
<section class="sec flow" id="flow">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow">A day here</span>
      <h2 class="sec__title">きょうの<em>スケジュール</em></h2>
      <p class="sec__lead">教室の壁に貼ってあるボードと同じ並びです。次に何をするかがわかると、子どもたちの表情がやわらぎます。</p>
    </div>

    <div class="tabs" role="tablist" aria-label="曜日の切り替え">
      <button class="tab" role="tab" id="tab-w" aria-selected="true" aria-controls="panel-w">学校がある日</button>
      <button class="tab" role="tab" id="tab-h" aria-selected="false" aria-controls="panel-h">土曜・長期休み</button>
    </div>

    <!-- weekday -->
    <div class="board rv" id="panel-w" role="tabpanel" aria-labelledby="tab-w">
      <div class="board__rail" aria-hidden="true"></div>
      <ol class="board__list">
        <li class="slot">
          <div class="scard">
            <span class="scard__time">13:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-bus"/></svg>
            <h3>おむかえ</h3>
            <p>学校まで車でお迎え。「おかえり」から一日が始まります。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">15:00</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-cook"/></svg>
            <h3>おやつ・自由あそび</h3>
            <p>手洗いをしておやつ。まずはゆっくり気持ちをほぐします。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">15:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-book"/></svg>
            <h3>学習タイム</h3>
            <p>宿題やプリントに取り組みます。ひとりずつ隣でサポート。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">16:15</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-ball"/></svg>
            <h3>きょうの活動</h3>
            <p>曜日ごとのプログラム。体を動かす日、つくる日があります。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">17:15</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-hands"/></svg>
            <h3>おかたづけ・ふりかえり</h3>
            <p>みんなで片づけ、今日できたことを一つずつ言葉にします。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">17:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-car"/></svg>
            <h3>おくり・さようなら</h3>
            <p>ご自宅までお送りします。連絡帳で今日の様子をお伝えします。</p>
          </div>
        </li>
      </ol>
    </div>

    <!-- holiday -->
    <div class="board rv" id="panel-h" role="tabpanel" aria-labelledby="tab-h" hidden>
      <div class="board__rail" aria-hidden="true"></div>
      <ol class="board__list">
        <li class="slot">
          <div class="scard">
            <span class="scard__time">9:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-bus"/></svg>
            <h3>おむかえ・あさの会</h3>
            <p>ご自宅までお迎え。今日の予定をボードで確認します。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">10:00</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-book"/></svg>
            <h3>学習タイム</h3>
            <p>頭がすっきりしている午前中に、じっくり机に向かいます。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">11:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-cook"/></svg>
            <h3>おひるごはん</h3>
            <p>お弁当を持参。月に一度はみんなでクッキングをします。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">13:00</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-ball"/></svg>
            <h3>おでかけ・活動</h3>
            <p>公園や図書館へ。季節ごとに少し遠くへも出かけます。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">15:00</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-brush"/></svg>
            <h3>おやつ・創作あそび</h3>
            <p>工作や絵の具など、時間をかけてつくる日もあります。</p>
          </div>
        </li>
        <li class="slot">
          <div class="scard">
            <span class="scard__time">16:30</span>
            <svg class="scard__ic" aria-hidden="true"><use href="#i-car"/></svg>
            <h3>おくり・さようなら</h3>
            <p>片づけとふりかえりのあと、ご自宅までお送りします。</p>
          </div>
        </li>
      </ol>
    </div>

    <p class="flow__note rv">
      <svg aria-hidden="true"><use href="#i-info"/></svg>
      <span>その日の体調や気持ちに合わせて、休憩を増やしたり順番を入れかえたりします。「今日はここまで」も大切な選択です。</span>
    </p>
  </div>
</section>

<!-- ========================= PROGRAMS ========================= -->
<section class="sec prog" id="program">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--leaf">Programs</span>
      <h2 class="sec__title">5つの<em>療育プログラム</em></h2>
      <p class="sec__lead">遊びの形をしていますが、どれも「できた」を積み重ねるための時間です。曜日ごとに組み合わせて行います。</p>
    </div>

    <ul class="prog__grid">
      <li class="card pcard rv">
        <span class="pcard__ph">
          <svg viewBox="0 0 400 200" role="img" aria-label="サーキット遊びをする子どもたち">
            <rect width="400" height="200" fill="#EAF7FC"/>
            <path d="M0 150c80-16 160-16 240 0s120 16 160 0v50H0Z" fill="#D6EEF7"/>
            <circle cx="86" cy="140" r="34" fill="#FFC93D"/>
            <path d="M86 106c8 10 8 58 0 68M52 140c10-8 58-8 68 0" stroke="#fff" stroke-width="4" fill="none"/>
            <rect x="160" y="120" width="90" height="18" rx="9" fill="#FF93A6"/>
            <rect x="170" y="138" width="12" height="26" rx="6" fill="#D9526C"/>
            <rect x="228" y="138" width="12" height="26" rx="6" fill="#D9526C"/>
            <circle cx="310" cy="86" r="26" fill="#FFDFC4"/>
            <path d="M284 86c0-16 11-25 26-25s26 9 26 25c0-7-4-10-10-10h-32c-6 0-10 3-10 10Z" fill="#6B4E38"/>
            <path d="M298 84q4-5 8 0M312 84q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M301 96q9 8 18 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="288" y="112" width="44" height="42" rx="12" fill="#37AFD6"/>
            <rect x="292" y="152" width="12" height="18" rx="6" fill="#6A5F55"/>
            <rect x="316" y="152" width="12" height="18" rx="6" fill="#6A5F55"/>
            <circle cx="60" cy="42" r="16" fill="#FFC93D"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/program-01.jpg" alt="サーキット遊びで体を動かす様子" loading="lazy" decoding="async" onerror="this.remove()">
        </span>
        <div class="pcard__top">
          <span class="plate plate--sky"><svg aria-hidden="true"><use href="#i-ball"/></svg></span>
          <h3>からだあそび<span class="pcard__tag">Motor skills</span></h3>
        </div>
        <div class="pcard__body">
          <p>バランスボールやサーキット遊びで、姿勢を保つ力や手足の使い方を育てます。順番を待つ練習にもなります。</p>
          <div class="pcard__hits"><span class="chip chip--sky">粗大運動</span><span class="chip chip--sky">ボディイメージ</span></div>
        </div>
      </li>

      <li class="card pcard rv">
        <span class="pcard__ph">
          <svg viewBox="0 0 400 200" role="img" aria-label="輪になって話し合うグループ活動">
            <rect width="400" height="200" fill="#FFF0F2"/>
            <ellipse cx="200" cy="160" rx="150" ry="30" fill="#FFDCE2"/>
            <circle cx="110" cy="98" r="26" fill="#FFE2CB"/>
            <path d="M84 100c0-17 11-26 26-26s26 9 26 26c0-7-4-10-10-10h-32c-6 0-10 3-10 10Z" fill="#3E3129"/>
            <path d="M98 96q4-5 8 0M112 96q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M101 108q9 8 18 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="88" y="124" width="44" height="36" rx="12" fill="#FFC93D"/>
            <circle cx="200" cy="86" r="26" fill="#FFDFC4"/>
            <path d="M174 88c0-17 11-26 26-26s26 9 26 26c0-8-5-11-11-11-8 0-9-6-15-6s-7 6-15 6c-6 0-11 3-11 11Z" fill="#B8703C"/>
            <path d="M188 84q4-5 8 0M202 84q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M191 96q9 8 18 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="178" y="112" width="44" height="48" rx="12" fill="#78C596"/>
            <circle cx="290" cy="98" r="26" fill="#F6D3B4"/>
            <path d="M264 100c0-17 11-26 26-26s26 9 26 26c0-7-4-10-10-10h-32c-6 0-10 3-10 10Z" fill="#6B4E38"/>
            <path d="M278 96q4-5 8 0M292 96q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M281 108q9 8 18 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="268" y="124" width="44" height="36" rx="12" fill="#37AFD6"/>
            <rect x="146" y="30" width="60" height="30" rx="15" fill="#fff"/>
            <rect x="216" y="42" width="46" height="24" rx="12" fill="#fff"/>
            <circle cx="166" cy="45" r="4" fill="#FF93A6"/><circle cx="176" cy="45" r="4" fill="#FF93A6"/><circle cx="186" cy="45" r="4" fill="#FF93A6"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/program-02.jpg" alt="輪になって話し合うグループ活動" loading="lazy" decoding="async" onerror="this.remove()">
        </span>
        <div class="pcard__top">
          <span class="plate plate--blossom"><svg aria-hidden="true"><use href="#i-hands"/></svg></span>
          <h3>グループ活動<span class="pcard__tag">Social skills</span></h3>
        </div>
        <div class="pcard__body">
          <p>ゲームや話し合いを通じて、誘い方・断り方・気持ちの伝え方を練習します。うまくいかない場面も一緒に振り返ります。</p>
          <div class="pcard__hits"><span class="chip">SST</span><span class="chip">コミュニケーション</span></div>
        </div>
      </li>

      <li class="card pcard rv">
        <span class="pcard__ph">
          <svg viewBox="0 0 400 200" role="img" aria-label="机で宿題に取り組む様子">
            <rect width="400" height="200" fill="#FFF6E1"/>
            <rect y="150" width="400" height="50" fill="#F0DFC0"/>
            <rect x="70" y="132" width="260" height="16" rx="8" fill="#B98A5E"/>
            <rect x="96" y="148" width="14" height="42" rx="7" fill="#B98A5E"/>
            <rect x="290" y="148" width="14" height="42" rx="7" fill="#B98A5E"/>
            <rect x="116" y="112" width="80" height="22" rx="5" fill="#fff"/>
            <rect x="126" y="118" width="46" height="4" rx="2" fill="#EDE4D5"/>
            <rect x="126" y="126" width="60" height="4" rx="2" fill="#EDE4D5"/>
            <circle cx="156" cy="72" r="28" fill="#FFDFC4"/>
            <path d="M128 74c0-18 12-28 28-28s28 10 28 28c0-8-5-11-11-11h-34c-6 0-11 3-11 11Z" fill="#6B4E38"/>
            <path d="M143 70q4-6 9 0M158 70q4-6 9 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <path d="M146 84q10 8 20 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <rect x="130" y="100" width="52" height="32" rx="12" fill="#FFC93D"/>
            <circle cx="256" cy="82" r="24" fill="#F6D3B4"/>
            <path d="M232 84c0-16 10-25 24-25s24 9 24 25c0-7-4-10-9-10h-30c-5 0-9 3-9 10Z" fill="#3E3129"/>
            <path d="M244 80q4-5 8 0M257 80q4-5 8 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <path d="M247 92q8 7 16 0" stroke="#3A322B" stroke-width="3" fill="none" stroke-linecap="round"/>
            <rect x="232" y="106" width="48" height="28" rx="12" fill="#78C596"/>
            <rect x="216" y="120" width="52" height="14" rx="4" fill="#fff"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/program-03.jpg" alt="机に向かって学習する様子" loading="lazy" decoding="async" onerror="this.remove()">
        </span>
        <div class="pcard__top">
          <span class="plate plate--sun"><svg aria-hidden="true"><use href="#i-book"/></svg></span>
          <h3>学習サポート<span class="pcard__tag">Study</span></h3>
        </div>
        <div class="pcard__body">
          <p>宿題や苦手な単元に、その子のペースで取り組みます。集中が続く長さに合わせて課題を区切ります。</p>
          <div class="pcard__hits"><span class="chip">個別対応</span><span class="chip">読み書き支援</span></div>
        </div>
      </li>

      <li class="card pcard rv">
        <span class="pcard__ph">
          <svg viewBox="0 0 400 200" role="img" aria-label="絵の具と楽器を使った創作活動">
            <rect width="400" height="200" fill="#EEF7F1"/>
            <rect y="152" width="400" height="48" fill="#DDF0E4"/>
            <rect x="46" y="52" width="110" height="100" rx="10" fill="#fff" stroke="#EDE4D5" stroke-width="5"/>
            <path d="M56 140l32-42 24 28 18-18 18 32Z" fill="#A7DCBD"/>
            <circle cx="120" cy="76" r="12" fill="#FFC93D"/>
            <ellipse cx="248" cy="118" rx="46" ry="34" fill="#FFC93D"/>
            <circle cx="264" cy="118" r="14" fill="#FFF6E1"/>
            <circle cx="224" cy="102" r="8" fill="#FF93A6"/><circle cx="244" cy="94" r="8" fill="#37AFD6"/>
            <circle cx="266" cy="98" r="8" fill="#A99BE0"/><circle cx="228" cy="128" r="8" fill="#78C596"/>
            <rect x="318" y="60" width="12" height="72" rx="6" fill="#A99BE0"/>
            <path d="M312 132h24l-5 22a7 7 0 0 1-14 0l-5-22Z" fill="#FF93A6"/>
            <path d="M356 44l4 9 10 1.4-7.2 7 1.7 10-8.5-4.6-8.5 4.6 1.7-10-7.2-7 10-1.4Z" fill="#FFC93D"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/program-04.jpg" alt="絵の具や楽器を使った創作活動" loading="lazy" decoding="async" onerror="this.remove()">
        </span>
        <div class="pcard__top">
          <span class="plate plate--leaf"><svg aria-hidden="true"><use href="#i-brush"/></svg></span>
          <h3>創作・音楽<span class="pcard__tag">Art &amp; music</span></h3>
        </div>
        <div class="pcard__body">
          <p>絵の具、工作、楽器。うまい下手ではなく「やってみたい」を大事にする時間です。作品は毎月ギャラリーに飾ります。</p>
          <div class="pcard__hits"><span class="chip chip--leaf">感覚あそび</span><span class="chip chip--leaf">表現</span></div>
        </div>
      </li>

      <li class="card pcard pcard--wide rv">
        <span class="pcard__ph">
          <svg viewBox="0 0 800 200" role="img" aria-label="調理と買い物の練習をする様子">
            <rect width="800" height="200" fill="#FFF6E1"/>
            <rect y="150" width="800" height="50" fill="#F0DFC0"/>
            <rect x="60" y="126" width="300" height="20" rx="10" fill="#fff"/>
            <ellipse cx="150" cy="112" rx="34" ry="14" fill="#FF93A6"/>
            <rect x="112" y="106" width="76" height="8" rx="4" fill="#37AFD6"/>
            <circle cx="252" cy="88" r="28" fill="#FFDFC4"/>
            <path d="M224 84a28 28 0 0 1 56 0Z" fill="#fff"/>
            <rect x="222" y="80" width="60" height="10" rx="5" fill="#fff"/>
            <path d="M239 90q4-6 9 0M254 90q4-6 9 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <path d="M242 102q10 8 20 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <rect x="226" y="118" width="52" height="30" rx="12" fill="#FFC93D"/>
            <path d="M420 40v120" stroke="#EDE4D5" stroke-width="4" stroke-dasharray="8 10"/>
            <rect x="470" y="96" width="80" height="56" rx="10" fill="#FFC93D"/>
            <path d="M482 96V84a18 18 0 0 1 36 0v12" stroke="#F2891F" stroke-width="6" fill="none" stroke-linecap="round"/>
            <circle cx="500" cy="124" r="10" fill="#fff"/>
            <circle cx="612" cy="84" r="28" fill="#F6D3B4"/>
            <path d="M584 86c0-18 12-28 28-28s28 10 28 28c0-8-5-11-11-11h-34c-6 0-11 3-11 11Z" fill="#6B4E38"/>
            <path d="M599 84q4-6 9 0M614 84q4-6 9 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <path d="M602 96q10 8 20 0" stroke="#3A322B" stroke-width="3.2" fill="none" stroke-linecap="round"/>
            <rect x="586" y="114" width="52" height="36" rx="12" fill="#37AFD6"/>
            <rect x="682" y="104" width="70" height="48" rx="8" fill="#A7DCBD"/>
            <rect x="694" y="90" width="46" height="16" rx="8" fill="#78C596"/>
          </svg>
          <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/program-05.jpg" alt="調理や買い物の練習をする様子" loading="lazy" decoding="async" onerror="this.remove()">
        </span>
        <div class="pcard__top">
          <span class="plate plate--sun"><svg aria-hidden="true"><use href="#i-cook"/></svg></span>
          <h3>生活スキル・クッキング<span class="pcard__tag">Daily living</span></h3>
        </div>
        <div class="pcard__body">
          <p>手洗い、着替え、片づけ、買い物、調理。中高生には公共交通機関の使い方や電話のかけ方など、卒業後を見すえた練習も行います。「自分でできた」がそのまま自信になる分野です。</p>
          <div class="pcard__hits"><span class="chip">身辺自立</span><span class="chip">金銭管理</span><span class="chip">就労準備</span></div>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ========================= STAFF ========================= -->
<section class="sec staff" id="staff">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--sun">Our staff</span>
      <h2 class="sec__title">おむかえするのは<em>この人たち</em></h2>
      <p class="sec__lead">保育・福祉・教育・リハビリ。それぞれの専門を持ったスタッフが、チームでお子さまを見ています。</p>
    </div>

    <ul class="staff__grid">
      <li class="card scard2 rv">
        <div class="scard2__ph"><svg aria-hidden="true"><use href="#f-a"/></svg><img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff-01.jpg" alt="管理者 立花かおるの写真" loading="lazy" decoding="async" onerror="this.remove()"></div>
        <span class="scard2__role">管理者／児童発達支援管理責任者</span>
        <h3>立花 かおる<span>TACHIBANA Kaoru</span></h3>
        <p class="scard2__lic">社会福祉士・保育士／支援歴14年</p>
        <p class="scard2__msg">「困った行動」の裏には必ず理由があります。まずそこを一緒に探すところから始めます。</p>
      </li>
      <li class="card scard2 rv">
        <div class="scard2__ph"><svg aria-hidden="true"><use href="#f-b"/></svg><img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff-02.jpg" alt="児童指導員 芹沢たけるの写真" loading="lazy" decoding="async" onerror="this.remove()"></div>
        <span class="scard2__role">児童指導員</span>
        <h3>芹沢 たける<span>SERIZAWA Takeru</span></h3>
        <p class="scard2__lic">中学校教諭一種／支援歴8年</p>
        <p class="scard2__msg">体を動かす活動を担当。汗をかいたあとの子どもたちの顔が好きです。</p>
      </li>
      <li class="card scard2 rv">
        <div class="scard2__ph"><svg aria-hidden="true"><use href="#f-c"/></svg><img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff-03.jpg" alt="作業療法士 永瀬あきらの写真" loading="lazy" decoding="async" onerror="this.remove()"></div>
        <span class="scard2__role">作業療法士</span>
        <h3>永瀬 あきら<span>NAGASE Akira</span></h3>
        <p class="scard2__lic">作業療法士／週2日 勤務</p>
        <p class="scard2__msg">姿勢や手先の使い方を見ています。ご家庭でできる工夫もお伝えします。</p>
      </li>
      <li class="card scard2 rv">
        <div class="scard2__ph"><svg aria-hidden="true"><use href="#f-d"/></svg><img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/staff-04.jpg" alt="保育士 倉田みなみの写真" loading="lazy" decoding="async" onerror="this.remove()"></div>
        <span class="scard2__role">保育士</span>
        <h3>倉田 みなみ<span>KURATA Minami</span></h3>
        <p class="scard2__lic">保育士／支援歴5年</p>
        <p class="scard2__msg">工作とおやつの時間を担当。小さな「できた」を見のがさないようにしています。</p>
      </li>
    </ul>
  </div>
</section>

<!-- ========================= VOICES ========================= -->
<section class="sec voice" id="voice">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--blossom">Parents' voice</span>
      <h2 class="sec__title">保護者の<em>みなさまから</em></h2>
      <p class="sec__lead">年に一度のアンケートに寄せられたご意見から、掲載の許可をいただいたものを紹介します。</p>
    </div>

    <ul class="voice__grid">
      <li class="vcard rv">
        <div class="vcard__bub">
          <svg class="vcard__q" aria-hidden="true"><use href="#i-quote"/></svg>
          <h3>「行きたくない」がなくなりました</h3>
          <p>最初の一か月は玄関で止まってしまう日もありましたが、先生が焦らせずに待ってくださって。今では金曜になると自分でカバンを用意しています。</p>
        </div>
        <div class="vcard__who">
          <span class="vcard__av"><svg aria-hidden="true"><use href="#f-b"/></svg></span>
          <span class="vcard__name">小学2年生の保護者さま<small>利用2年目</small></span>
        </div>
      </li>
      <li class="vcard rv">
        <div class="vcard__bub">
          <svg class="vcard__q" aria-hidden="true"><use href="#i-quote"/></svg>
          <h3>家での困りごとも相談できます</h3>
          <p>朝の支度でいつも怒ってしまうと話したら、絵の手順表を一緒に作ってくださいました。ひろばでの声のかけ方をそのまま家でも使えています。</p>
        </div>
        <div class="vcard__who">
          <span class="vcard__av"><svg aria-hidden="true"><use href="#f-d"/></svg></span>
          <span class="vcard__name">小学5年生の保護者さま<small>利用3年目</small></span>
        </div>
      </li>
      <li class="vcard rv">
        <div class="vcard__bub">
          <svg class="vcard__q" aria-hidden="true"><use href="#i-quote"/></svg>
          <h3>卒業後のことも一緒に考えてくれる</h3>
          <p>高校生になって、バスの乗り方や買い物の練習をしていただいています。進路の面談にも同席してくださり、親だけで抱えずに済んでいます。</p>
        </div>
        <div class="vcard__who">
          <span class="vcard__av"><svg aria-hidden="true"><use href="#f-c"/></svg></span>
          <span class="vcard__name">高校1年生の保護者さま<small>利用6年目</small></span>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ========================= GALLERY ========================= -->
<section class="sec gal" id="gallery">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow">Gallery</span>
      <h2 class="sec__title">施設内と<em>活動のようす</em></h2>
      <p class="sec__lead">教室は静かに過ごせるコーナーと、体を動かせるスペースに分けています。</p>
    </div>

    <div class="gal__grid rv">
      <figure class="gitem g1">
        <svg viewBox="0 0 600 400" role="img" aria-label="広い活動スペースで子どもたちが遊んでいる様子">
          <rect width="600" height="400" fill="#FFF6E1"/>
          <rect y="270" width="600" height="130" fill="#F4E3C4"/>
          <rect x="40" y="60" width="140" height="110" rx="10" fill="#fff" stroke="#EDE4D5" stroke-width="4"/>
          <path d="M50 160l40-50 30 34 25-24 25 40Z" fill="#A9E0F1"/><circle cx="150" cy="88" r="14" fill="#FFC93D"/>
          <rect x="410" y="70" width="150" height="200" rx="14" fill="#78C596" opacity=".35"/>
          <g><rect x="415" y="110" width="140" height="12" rx="6" fill="#fff"/><rect x="415" y="160" width="140" height="12" rx="6" fill="#fff"/><rect x="415" y="210" width="140" height="12" rx="6" fill="#fff"/></g>
          <ellipse cx="300" cy="300" rx="180" ry="42" fill="#FFE6A0"/>
          <g><circle cx="250" cy="220" r="34" fill="#FFDFC4"/><path d="M216 220a34 34 0 0 1 68 0c0-17-11-27-34-27s-34 10-34 27Z" fill="#5A4636"/><path d="M236 218q5-7 10 0M254 218q5-7 10 0" stroke="#3A322B" stroke-width="4" fill="none" stroke-linecap="round"/><path d="M239 234q11 10 22 0" stroke="#3A322B" stroke-width="4" fill="none" stroke-linecap="round"/><path d="M224 258h52v42h-52z" fill="#37AFD6" rx="10"/></g>
          <g><circle cx="350" cy="235" r="30" fill="#F6D3B4"/><path d="M320 238c0-19 13-29 30-29s30 10 30 29c0-8-5-12-12-12h-36c-7 0-12 4-12 12Z" fill="#B8703C"/><path d="M337 234q4-6 9 0M354 234q4-6 9 0" stroke="#3A322B" stroke-width="3.6" fill="none" stroke-linecap="round"/><path d="M340 248q10 9 20 0" stroke="#3A322B" stroke-width="3.6" fill="none" stroke-linecap="round"/><rect x="326" y="266" width="48" height="38" rx="10" fill="#FF93A6"/></g>
          <circle cx="440" cy="300" r="26" fill="#FFC93D"/>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-01.jpg" alt="活動スペースで遊ぶ子どもたち" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>活動スペース（約60㎡）</figcaption>
      </figure>

      <figure class="gitem g2">
        <svg viewBox="0 0 600 200" role="img" aria-label="宿題に取り組む学習コーナー">
          <rect width="600" height="200" fill="#FFFBF1"/>
          <rect x="0" y="140" width="600" height="60" fill="#F0DFC0"/>
          <g><rect x="60" y="96" width="160" height="14" rx="7" fill="#B98A5E"/><rect x="80" y="110" width="10" height="34" fill="#B98A5E"/><rect x="190" y="110" width="10" height="34" fill="#B98A5E"/><rect x="90" y="76" width="90" height="22" rx="5" fill="#fff"/></g>
          <g><rect x="380" y="96" width="160" height="14" rx="7" fill="#B98A5E"/><rect x="400" y="110" width="10" height="34" fill="#B98A5E"/><rect x="510" y="110" width="10" height="34" fill="#B98A5E"/><rect x="410" y="76" width="90" height="22" rx="5" fill="#fff"/></g>
          <circle cx="300" cy="62" r="30" fill="#FFDFC4"/><path d="M270 64c0-19 13-29 30-29s30 10 30 29c0-9-6-13-13-13h-34c-7 0-13 4-13 13Z" fill="#3E3129"/>
          <path d="M287 60q4-6 9 0M304 60q4-6 9 0" stroke="#3A322B" stroke-width="3.6" fill="none" stroke-linecap="round"/><path d="M290 74q10 9 20 0" stroke="#3A322B" stroke-width="3.6" fill="none" stroke-linecap="round"/>
          <rect x="272" y="94" width="56" height="46" rx="12" fill="#FFC93D"/>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-02.jpg" alt="学習コーナーで宿題に取り組む様子" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>学習コーナー</figcaption>
      </figure>

      <figure class="gitem g3">
        <svg viewBox="0 0 400 200" role="img" aria-label="工作の作品が並んだ棚">
          <rect width="400" height="200" fill="#FFF0F2"/>
          <rect x="30" y="60" width="340" height="12" rx="6" fill="#B98A5E"/>
          <rect x="30" y="140" width="340" height="12" rx="6" fill="#B98A5E"/>
          <g fill="#FFC93D"><rect x="55" y="26" width="34" height="34" rx="9"/></g>
          <circle cx="140" cy="44" r="17" fill="#37AFD6"/>
          <path d="M210 26l10 20 22 3-16 15 4 22-20-11-20 11 4-22-16-15 22-3Z" fill="#FF93A6"/>
          <rect x="290" y="28" width="40" height="32" rx="8" fill="#A99BE0"/>
          <circle cx="80" cy="124" r="16" fill="#78C596"/>
          <rect x="150" y="104" width="38" height="36" rx="9" fill="#FFC93D"/>
          <circle cx="260" cy="122" r="18" fill="#37AFD6"/>
          <rect x="320" y="106" width="34" height="34" rx="17" fill="#FF93A6"/>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-03.jpg" alt="子どもたちの作品が並んだ棚" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>みんなの作品棚</figcaption>
      </figure>

      <figure class="gitem g4">
        <svg viewBox="0 0 200 200" role="img" aria-label="ひとりで落ち着けるクールダウンスペース">
          <rect width="200" height="200" fill="#EEF7F1"/>
          <path d="M100 34l64 56v76a12 12 0 0 1-12 12H48a12 12 0 0 1-12-12V90Z" fill="#fff"/>
          <rect x="72" y="118" width="56" height="52" rx="10" fill="#A9E0F1"/>
          <circle cx="100" cy="96" r="20" fill="#FFC93D"/>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-04.jpg" alt="ひとりで落ち着けるクールダウン室" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>クールダウン室</figcaption>
      </figure>

      <figure class="gitem g5">
        <svg viewBox="0 0 400 400" role="img" aria-label="調理台のあるキッチンスペース">
          <rect width="400" height="400" fill="#FFF6E1"/>
          <rect x="0" y="240" width="400" height="160" fill="#F0DFC0"/>
          <rect x="40" y="200" width="320" height="46" rx="12" fill="#fff"/>
          <rect x="60" y="246" width="120" height="120" rx="10" fill="#EDE4D5"/>
          <rect x="220" y="246" width="120" height="120" rx="10" fill="#EDE4D5"/>
          <circle cx="120" cy="188" r="26" fill="#FFC93D"/><rect x="94" y="176" width="52" height="10" rx="5" fill="#37AFD6"/>
          <path d="M242 186h68a34 34 0 0 1-68 0Z" fill="#FF93A6"/><rect x="236" y="176" width="80" height="10" rx="5" fill="#37AFD6"/>
          <g><circle cx="200" cy="110" r="34" fill="#FFDFC4"/><path d="M166 106c0-21 15-32 34-32s34 11 34 32c0-9-6-14-14-14h-40c-8 0-14 5-14 14Z" fill="#5A4636"/><path d="M185 108q5-7 10 0M203 108q5-7 10 0" stroke="#3A322B" stroke-width="4" fill="none" stroke-linecap="round"/><path d="M189 124q11 10 22 0" stroke="#3A322B" stroke-width="4" fill="none" stroke-linecap="round"/><path d="M164 70a36 20 0 0 1 72 0Z" fill="#fff"/></g>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-05.jpg" alt="みんなでクッキングをする様子" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>月に一度のクッキング</figcaption>
      </figure>

      <figure class="gitem g6">
        <svg viewBox="0 0 600 200" role="img" aria-label="近所の公園へおでかけする様子">
          <rect width="600" height="200" fill="#FFFBF1"/>
          <path d="M0 150c100-18 200-18 300 0s200 18 300 0v50H0Z" fill="#DDF0E4"/>
          <g><rect x="70" y="96" width="12" height="56" rx="6" fill="#B98A5E"/><circle cx="76" cy="82" r="34" fill="#78C596"/><circle cx="46" cy="98" r="20" fill="#A7DCBD"/></g>
          <g><rect x="510" y="106" width="12" height="46" rx="6" fill="#B98A5E"/><circle cx="516" cy="92" r="28" fill="#78C596"/></g>
          <g fill="none" stroke="#FF93A6" stroke-width="9" stroke-linecap="round"><path d="M230 152a70 70 0 0 1 140 0"/></g>
          <g fill="none" stroke="#FFC93D" stroke-width="9" stroke-linecap="round"><path d="M248 152a52 52 0 0 1 104 0"/></g>
          <g fill="none" stroke="#37AFD6" stroke-width="9" stroke-linecap="round"><path d="M266 152a34 34 0 0 1 68 0"/></g>
          <g fill="#fff"><ellipse cx="430" cy="52" rx="34" ry="20"/><ellipse cx="458" cy="46" rx="24" ry="16"/></g>
          <circle cx="150" cy="48" r="22" fill="#FFC93D"/>
        </svg>
        <img class="ph__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-06.jpg" alt="近所の公園へおでかけした様子" loading="lazy" decoding="async" onerror="this.remove()">
        <figcaption>近所の公園へおでかけ</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ========================= GUIDE ========================= -->
<section class="sec guide" id="guide">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow">Information</span>
      <h2 class="sec__title">ご利用にあたって</h2>
      <p class="sec__lead">受給者証をお持ちでない場合も大丈夫です。申請の手順からご案内します。</p>
    </div>

    <div class="guide__grid">
      <div class="spec rv">
        <dl>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-star"/></svg>対象</dt>
            <dd>小学1年生〜高校3年生（<b>放課後等デイサービス受給者証</b>をお持ちの方）</dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-calendar"/></svg>開所日</dt>
            <dd>月曜〜土曜<br><small>休所日：日曜・祝日・年末年始（12/29〜1/3）</small></dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-clock"/></svg>利用時間</dt>
            <dd>学校がある日 <b>13:00–18:00</b><br>土曜・長期休み <b>9:00–17:00</b></dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-hands"/></svg>定員</dt>
            <dd>1日 <b>10名</b>（スタッフ4〜5名体制）</dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-yen"/></svg>利用料</dt>
            <dd>障害児通所給付費の対象。世帯所得に応じた上限額まで（月額 0円／4,600円／37,200円のいずれか）<br><small>別途おやつ代 100円／回、教材費 実費</small></dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-bag"/></svg>持ちもの</dt>
            <dd>連絡帳・水筒・宿題・着替え（土曜・長期休みはお弁当）</dd>
          </div>
          <div class="spec__row">
            <dt><svg aria-hidden="true"><use href="#i-bus"/></svg>送迎</dt>
            <dd>市内の小中高等学校・特別支援学校とご自宅の間で対応。範囲はご相談ください。</dd>
          </div>
        </dl>
      </div>

      <div class="card steps rv">
        <h3>ご利用までの流れ</h3>
        <ol>
          <li class="step">
            <h4>お問い合わせ</h4>
            <p>お電話またはフォームから。「まず話を聞いてみたい」だけでも構いません。</p>
          </li>
          <li class="step">
            <h4>見学・体験</h4>
            <p>実際の活動時間に合わせてお越しください。お子さまと一緒に半日体験もできます。</p>
          </li>
          <li class="step">
            <h4>受給者証の申請</h4>
            <p>お住まいの市区町村の窓口へ。必要書類や進め方は当施設がご説明し、同行もいたします。</p>
          </li>
          <li class="step">
            <h4>面談・個別支援計画</h4>
            <p>ご家庭でのご様子や、これから伸ばしたいことをうかがい、計画を作成します。</p>
          </li>
          <li class="step">
            <h4>契約・ご利用開始</h4>
            <p>曜日と時間を決めて、いよいよスタート。週1日からのご利用も歓迎です。</p>
          </li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- ========================= ACCESS ========================= -->
<section class="sec acc" id="access">
  <div class="wrap">
    <div class="sec__head rv">
      <span class="eyebrow eyebrow--sun">Access</span>
      <h2 class="sec__title">おこしになる方法</h2>
    </div>

    <div class="acc__grid">
      <div class="acc__map rv">
        <svg viewBox="0 0 700 440" role="img" aria-label="施設周辺の地図。JR摂津本山駅から南へ徒歩8分">
          <rect width="700" height="440" fill="#F6F5EF"/>
          <path d="M0 100h700v30H0z" fill="#DDEFF6"/>
          <g stroke="#fff" stroke-width="4" stroke-dasharray="18 14"><path d="M0 115h700"/></g>
          <rect x="0" y="230" width="700" height="34" fill="#fff"/>
          <rect x="300" y="0" width="34" height="440" fill="#fff"/>
          <rect x="0" y="360" width="700" height="24" fill="#fff"/>
          <rect x="120" y="0" width="20" height="440" fill="#fff"/>

          <!-- park -->
          <rect x="380" y="290" width="150" height="120" rx="18" fill="#DDF0E4"/>
          <circle cx="410" cy="326" r="18" fill="#78C596"/><circle cx="470" cy="350" r="24" fill="#78C596"/>
          <text x="455" y="398" font-family="Zen Maru Gothic, sans-serif" font-size="17" fill="#4C9A6C" text-anchor="middle">本山南公園</text>

          <!-- station -->
          <g>
            <rect x="196" y="76" width="96" height="46" rx="12" fill="#37AFD6"/>
            <text x="244" y="105" font-family="Zen Maru Gothic, sans-serif" font-size="17" font-weight="700" fill="#fff" text-anchor="middle">摂津本山駅</text>
          </g>

          <!-- school -->
          <rect x="60" y="270" width="120" height="80" rx="14" fill="#FFE6A0"/>
          <text x="120" y="316" font-family="Zen Maru Gothic, sans-serif" font-size="16" fill="#8A6212" text-anchor="middle">本山南小学校</text>

          <!-- route -->
          <path d="M244 122v104h72v82" fill="none" stroke="#FF93A6" stroke-width="7" stroke-linecap="round" stroke-dasharray="1 16"/>

          <!-- facility -->
          <g>
            <rect x="336" y="286" width="34" height="34" rx="8" fill="#fff" opacity="0"/>
            <g transform="translate(292,272) scale(1.5)">
              <path d="M20 4c6.6 0 12 5.2 12 11.6C32 24 20 36 20 36S8 24 8 15.6C8 9.2 13.4 4 20 4Z" fill="#F2891F"/>
              <circle cx="20" cy="15.5" r="5" fill="#fff"/>
            </g>
            <rect x="272" y="330" width="164" height="34" rx="17" fill="#3A322B"/>
            <text x="354" y="353" font-family="Zen Maru Gothic, sans-serif" font-size="16" font-weight="700" fill="#fff" text-anchor="middle">にじいろひろば</text>
          </g>
        </svg>
      </div>

      <div class="rv">
        <h3>放課後等デイサービス にじいろひろば</h3>
        <p class="acc__addr">〒658-0051<br>兵庫県神戸市東灘区住吉本町2-14-8 ひろばビル1F</p>
        <ul class="acc__ways">
          <li class="way">
            <svg aria-hidden="true"><use href="#i-train"/></svg>
            <span><b>JR「摂津本山」駅から徒歩8分</b><span>南口を出て本山南筋をまっすぐ南へ。2つ目の信号を左折してすぐです。</span></span>
          </li>
          <li class="way">
            <svg aria-hidden="true"><use href="#i-car"/></svg>
            <span><b>お車でお越しの場合</b><span>建物裏手に来客用の駐車スペースを2台分ご用意しています。</span></span>
          </li>
          <li class="way">
            <svg aria-hidden="true"><use href="#i-bus"/></svg>
            <span><b>送迎エリア</b><span>東灘区・灘区を中心に対応。区外の方もまずはご相談ください。</span></span>
          </li>
        </ul>
        <a class="btn" href="#contact">見学の日程を相談する
          <svg class="ic" aria-hidden="true"><use href="#i-arrow"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ========================= CTA ========================= -->
<section class="cta" id="contact">
  <div class="cta__deco" aria-hidden="true">
    <svg viewBox="0 0 1440 420" preserveAspectRatio="xMidYMid slice" style="width:100%;height:100%">
      <g fill="#fff" opacity=".55">
        <ellipse cx="150" cy="70" rx="70" ry="34"/><ellipse cx="205" cy="60" rx="48" ry="27"/>
        <ellipse cx="1270" cy="340" rx="80" ry="36"/><ellipse cx="1210" cy="348" rx="52" ry="26"/>
      </g>
      <g fill="#fff" opacity=".7">
        <path d="M1180 60l6 13 14 2-10 10 2 14-12-7-12 7 2-14-10-10 14-2Z"/>
        <path d="M300 350l5 11 12 1.7-8.5 8.3 2 12-10.5-6-10.5 6 2-12-8.5-8.3 12-1.7Z"/>
      </g>
      <g fill="none" stroke="#fff" stroke-width="8" stroke-linecap="round" opacity=".45">
        <path d="M40 420a90 90 0 0 1 180 0"/><path d="M62 420a68 68 0 0 1 136 0"/>
      </g>
    </svg>
  </div>

  <div class="wrap cta__in">
    <h2>まずは、教室を見にきてください。</h2>
    <p>見学も体験も無料です。受給者証をお持ちでなくても、空きがなくても構いません。<br>「うちの子はどうだろう」という段階のご相談を、いちばん歓迎しています。</p>

    <div class="cta__btns">
      <a class="btn btn--lg btn--ink" href="#contact">
        <svg class="ic" aria-hidden="true"><use href="#i-mail"/></svg>フォームから申し込む
      </a>
      <a class="btn btn--lg btn--white" href="tel:0781234567">
        <svg class="ic" aria-hidden="true"><use href="#i-phone"/></svg>電話でそうだんする
      </a>
    </div>

    <p class="cta__tel">
      <span class="num">078-123-4567</span>
      <span class="hrs">受付時間 平日 10:00–18:00 ／ 土曜 9:00–17:00</span>
    </p>
  </div>
</section>


</main>

<?php
get_footer();
