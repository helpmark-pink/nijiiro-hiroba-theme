<?php
/**
 * ヘッダー（全ページ共通の上半分）
 *
 * @package nijiiro-hiroba
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<a class="skip" href="#main">本文へスキップ</a>

<!-- ========== ICON SPRITE ========== -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false">
  <defs>
    <linearGradient id="gSky" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#EAF7FC"/><stop offset="1" stop-color="#FFFDF6"/></linearGradient>
    <linearGradient id="gSun" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FFDE7E"/><stop offset="1" stop-color="#FFC93D"/></linearGradient>
  </defs>

  <symbol id="i-heart" viewBox="0 0 40 40">
    <path d="M20 33S6 25 6 16a7.5 7.5 0 0 1 14-3.8A7.5 7.5 0 0 1 34 16c0 9-14 17-14 17Z" fill="#FF93A6"/>
    <circle cx="15" cy="17" r="2" fill="#fff" opacity=".55"/>
  </symbol>
  <symbol id="i-hands" viewBox="0 0 40 40">
    <rect x="6" y="18" width="12" height="16" rx="6" fill="#FFC93D"/>
    <rect x="22" y="18" width="12" height="16" rx="6" fill="#37AFD6"/>
    <circle cx="12" cy="11" r="5" fill="#FFDE7E"/><circle cx="28" cy="11" r="5" fill="#7FCFE8"/>
  </symbol>
  <symbol id="i-star" viewBox="0 0 40 40">
    <path d="M20 5.5c.8 0 1.5.5 1.9 1.3l3.4 7 7.7 1.1c1.9.3 2.6 2.6 1.3 3.9l-5.6 5.4 1.3 7.6c.3 1.9-1.6 3.3-3.3 2.4L20 30.6l-6.7 3.6c-1.7.9-3.6-.5-3.3-2.4l1.3-7.6-5.6-5.4c-1.3-1.3-.6-3.6 1.3-3.9l7.7-1.1 3.4-7c.4-.8 1.1-1.3 1.9-1.3Z" fill="#FFC93D"/>
  </symbol>
  <symbol id="i-bus" viewBox="0 0 40 40">
    <rect x="5" y="8" width="30" height="21" rx="7" fill="#37AFD6"/>
    <rect x="9" y="13" width="9" height="7" rx="2.5" fill="#EAF7FC"/>
    <rect x="22" y="13" width="9" height="7" rx="2.5" fill="#EAF7FC"/>
    <circle cx="12" cy="31" r="4" fill="#3A322B"/><circle cx="28" cy="31" r="4" fill="#3A322B"/>
  </symbol>
  <symbol id="i-book" viewBox="0 0 40 40">
    <path d="M6 9c4-2 9-2 14 1v22c-5-3-10-3-14-1V9Z" fill="#78C596"/>
    <path d="M34 9c-4-2-9-2-14 1v22c5-3 10-3 14-1V9Z" fill="#A7DCBD"/>
    <path d="M20 10v22" stroke="#fff" stroke-width="2" stroke-linecap="round"/>
  </symbol>
  <symbol id="i-ball" viewBox="0 0 40 40">
    <circle cx="20" cy="20" r="14" fill="#FF93A6"/>
    <path d="M20 6c5 4 5 24 0 28M6 20c4-5 24-5 28 0" stroke="#fff" stroke-width="2.4" fill="none" stroke-linecap="round"/>
  </symbol>
  <symbol id="i-brush" viewBox="0 0 40 40">
    <rect x="17" y="4" width="6" height="17" rx="3" fill="#A99BE0"/>
    <path d="M15 21h10l-2.2 9a3 3 0 0 1-5.6 0L15 21Z" fill="#FFC93D"/>
    <circle cx="20" cy="34" r="2.6" fill="#37AFD6"/>
  </symbol>
  <symbol id="i-music" viewBox="0 0 40 40">
    <path d="M16 28V10l14-3v18" stroke="#37AFD6" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
    <circle cx="12" cy="29" r="5" fill="#FFC93D"/><circle cx="26" cy="26" r="5" fill="#FF93A6"/>
  </symbol>
  <symbol id="i-cook" viewBox="0 0 40 40">
    <path d="M6 19h28a14 14 0 0 1-14 14A14 14 0 0 1 6 19Z" fill="#FFC93D"/>
    <rect x="4" y="15" width="32" height="5" rx="2.5" fill="#37AFD6"/>
    <path d="M14 11c0-2 3-2 3-4M21 11c0-2 3-2 3-4" stroke="#C7B9A6" stroke-width="2" stroke-linecap="round" fill="none"/>
  </symbol>
  <symbol id="i-clock" viewBox="0 0 40 40">
    <circle cx="20" cy="20" r="14" fill="#FFE6A0"/>
    <path d="M20 12v8.5l6 3.5" stroke="#F2891F" stroke-width="3" stroke-linecap="round" fill="none"/>
  </symbol>
  <symbol id="i-calendar" viewBox="0 0 40 40">
    <rect x="5" y="9" width="30" height="26" rx="7" fill="#FFE6A0"/>
    <rect x="5" y="9" width="30" height="9" rx="7" fill="#FFC93D"/>
    <circle cx="14" cy="25" r="3" fill="#fff"/><circle cx="24" cy="25" r="3" fill="#fff"/>
  </symbol>
  <symbol id="i-yen" viewBox="0 0 40 40">
    <circle cx="20" cy="20" r="14" fill="#EEF7F1"/>
    <path d="M14 11l6 8 6-8M14 21h12M14 26h12M20 19v10" stroke="#4C9A6C" stroke-width="2.6" stroke-linecap="round" fill="none"/>
  </symbol>
  <symbol id="i-bag" viewBox="0 0 40 40">
    <rect x="6" y="14" width="28" height="21" rx="6" fill="#FF93A6"/>
    <path d="M14 15v-3a6 6 0 0 1 12 0v3" stroke="#DE5C74" stroke-width="3" fill="none" stroke-linecap="round"/>
  </symbol>
  <symbol id="i-phone" viewBox="0 0 40 40">
    <path d="M11 6c2 0 3 1 4 3l2 4c.6 1.3.3 2.4-.8 3.3l-1.6 1.3c1.5 3.4 4.1 6 7.5 7.5l1.3-1.6c.9-1.1 2-1.4 3.3-.8l4 2c2 1 3 2 3 4 0 3.4-3 6.3-6 6.3C15 35 5 25 5 12c0-3 2.9-6 6-6Z" fill="#3A322B"/>
  </symbol>
  <symbol id="i-mail" viewBox="0 0 40 40">
    <rect x="4" y="9" width="32" height="22" rx="7" fill="#37AFD6"/>
    <path d="M7 14l11.4 7.6c1 .7 2.2.7 3.2 0L33 14" stroke="#fff" stroke-width="2.6" fill="none" stroke-linecap="round"/>
  </symbol>
  <symbol id="i-pin" viewBox="0 0 40 40">
    <path d="M20 4c6.6 0 12 5.2 12 11.6C32 24 20 36 20 36S8 24 8 15.6C8 9.2 13.4 4 20 4Z" fill="#FF93A6"/>
    <circle cx="20" cy="15.5" r="5" fill="#fff"/>
  </symbol>
  <symbol id="i-train" viewBox="0 0 40 40">
    <rect x="9" y="5" width="22" height="24" rx="7" fill="#37AFD6"/>
    <rect x="13" y="10" width="14" height="8" rx="3" fill="#EAF7FC"/>
    <path d="M12 33l4-4M28 33l-4-4" stroke="#3A322B" stroke-width="2.6" stroke-linecap="round"/>
    <circle cx="15" cy="24" r="2" fill="#FFC93D"/><circle cx="25" cy="24" r="2" fill="#FFC93D"/>
  </symbol>
  <symbol id="i-car" viewBox="0 0 40 40">
    <path d="M6 22l3-8a5 5 0 0 1 4.7-3.3h12.6A5 5 0 0 1 31 14l3 8v6a3 3 0 0 1-3 3h-1a3 3 0 0 1-3-3H13a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3v-6Z" fill="#FFC93D"/>
    <path d="M11 21l2-5.5h14l2 5.5H11Z" fill="#FFF6E1"/>
  </symbol>
  <symbol id="i-quote" viewBox="0 0 40 40">
    <path d="M6 26c0-8 4-13 10-15l1.6 3.4C14 16 12 18.6 12 21h4.5a3.5 3.5 0 0 1 3.5 3.5v4A3.5 3.5 0 0 1 16.5 32h-7A3.5 3.5 0 0 1 6 28.5V26ZM22 26c0-8 4-13 10-15l1.6 3.4C30 16 28 18.6 28 21h4.5a3.5 3.5 0 0 1 3.5 3.5v4a3.5 3.5 0 0 1-3.5 3.5h-7A3.5 3.5 0 0 1 22 28.5V26Z" fill="#3A322B"/>
  </symbol>
  <symbol id="i-check" viewBox="0 0 40 40">
    <circle cx="20" cy="20" r="15" fill="#78C596"/>
    <path d="M13 20.5l4.8 4.8L27.5 15" stroke="#fff" stroke-width="3.4" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="i-info" viewBox="0 0 40 40">
    <circle cx="20" cy="20" r="15" fill="#FFE6A0"/>
    <circle cx="20" cy="13" r="2.4" fill="#A8720C"/>
    <rect x="18" y="18" width="4" height="11" rx="2" fill="#A8720C"/>
  </symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24">
    <path d="M4 12h15M13.5 6.5L20 12l-6.5 5.5" stroke="currentColor" stroke-width="2.6" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
  </symbol>
  <symbol id="i-rainbow" viewBox="0 0 40 40">
    <path d="M4 32a16 16 0 0 1 32 0" fill="none" stroke="#FF93A6" stroke-width="4.4" stroke-linecap="round"/>
    <path d="M9 32a11 11 0 0 1 22 0" fill="none" stroke="#FFC93D" stroke-width="4.4" stroke-linecap="round"/>
    <path d="M14 32a6 6 0 0 1 12 0" fill="none" stroke="#37AFD6" stroke-width="4.4" stroke-linecap="round"/>
  </symbol>

  <!-- KID FACES (avatars) -->
  <symbol id="f-a" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#FFF6E1"/>
    <circle cx="50" cy="52" r="30" fill="#FFDFC4"/>
    <path d="M20 48a30 30 0 0 1 60 0c0-14-9-24-30-24S20 34 20 48Z" fill="#5A4636"/>
    <path d="M38 50q4-6 8 0M54 50q4-6 8 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <path d="M42 63q8 7 16 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <circle cx="33" cy="60" r="5" fill="#FFB4C0" opacity=".65"/><circle cx="67" cy="60" r="5" fill="#FFB4C0" opacity=".65"/>
  </symbol>
  <symbol id="f-b" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#EAF7FC"/>
    <circle cx="50" cy="52" r="30" fill="#FFE2CB"/>
    <path d="M22 52c0-18 12-28 28-28s28 10 28 28c0-6-4-9-10-9-8 0-10-8-18-8s-10 8-18 8c-6 0-10 3-10 9Z" fill="#7A5A3C"/>
    <circle cx="24" cy="52" r="8" fill="#7A5A3C"/><circle cx="76" cy="52" r="8" fill="#7A5A3C"/>
    <path d="M38 51q4-6 8 0M54 51q4-6 8 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <path d="M43 64q7 6 14 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <circle cx="34" cy="61" r="5" fill="#FFB4C0" opacity=".6"/><circle cx="66" cy="61" r="5" fill="#FFB4C0" opacity=".6"/>
  </symbol>
  <symbol id="f-c" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#EEF7F1"/>
    <circle cx="50" cy="52" r="30" fill="#F6D3B4"/>
    <path d="M21 55c0-20 13-31 29-31s29 11 29 31c0-9-6-13-13-13H34c-7 0-13 4-13 13Z" fill="#3E3129"/>
    <path d="M39 51q4-5 8 0M53 51q4-5 8 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <path d="M43 64q7 6 14 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <circle cx="34" cy="61" r="5" fill="#FFB4C0" opacity=".6"/><circle cx="66" cy="61" r="5" fill="#FFB4C0" opacity=".6"/>
  </symbol>
  <symbol id="f-d" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#FFF0F2"/>
    <circle cx="50" cy="52" r="30" fill="#FFDFC4"/>
    <path d="M20 56c0-20 13-32 30-32s30 12 30 32c0-8-5-12-11-12-9 0-11-7-19-7s-10 7-19 7c-6 0-11 4-11 12Z" fill="#B8703C"/>
    <path d="M39 51q4-5 8 0M53 51q4-5 8 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <path d="M42 63q8 8 16 0" stroke="#3A322B" stroke-width="3.4" fill="none" stroke-linecap="round"/>
    <circle cx="34" cy="61" r="5" fill="#FFB4C0" opacity=".6"/><circle cx="66" cy="61" r="5" fill="#FFB4C0" opacity=".6"/>
  </symbol>
</svg>

<!-- ========================= HEADER ========================= -->
<header class="hdr" id="hdr">
  <div class="wrap hdr__in">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>#top" aria-label="にじいろひろば ホーム">
      <svg class="logo__mark" viewBox="0 0 56 56" aria-hidden="true">
        <rect width="56" height="56" rx="18" fill="#FFF6E1"/>
        <path d="M11 43a17 17 0 0 1 34 0" fill="none" stroke="#FF93A6" stroke-width="5.6" stroke-linecap="round"/>
        <path d="M17.6 43a10.4 10.4 0 0 1 20.8 0" fill="none" stroke="#FFC93D" stroke-width="5.6" stroke-linecap="round"/>
        <path d="M24.2 43a3.8 3.8 0 0 1 7.6 0" fill="none" stroke="#37AFD6" stroke-width="5.6" stroke-linecap="round"/>
        <circle cx="44" cy="13" r="6" fill="#FFC93D"/>
        <circle cx="12" cy="16" r="2.6" fill="#78C596"/>
      </svg>
      <span class="logo__txt">にじいろひろば
        <small class="logo__sub">After-school day service</small>
      </span>
    </a>

    <nav class="nav" id="nav" aria-label="メインナビゲーション">
      <ul class="nav__list">
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#news">お知らせ</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#feature">特徴</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#flow">一日の流れ</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#program">プログラム</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#staff">スタッフ</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#voice">保護者の声</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#gallery">ギャラリー</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#guide">利用案内</a></li>
        <li><a class="nav__link" href="<?php echo esc_url( home_url( '/' ) ); ?>#access">アクセス</a></li>
      </ul>
    </nav>

    <a class="btn btn--sm hdr__cta" href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">
      <svg class="ic" aria-hidden="true"><use href="#i-mail"/></svg>見学を申し込む
    </a>

    <button class="burger" id="burger" aria-label="メニューを開く" aria-expanded="false" aria-controls="nav">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
