<?php
/**
 * フッター（全ページ共通の下半分）
 *
 * @package nijiiro-hiroba
 */
?>
<!-- ========================= FOOTER ========================= -->
<footer class="ftr">
  <div class="wrap">
    <div class="ftr__grid">
      <div>
        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>#top">
          <svg class="logo__mark" viewBox="0 0 56 56" aria-hidden="true">
            <rect width="56" height="56" rx="18" fill="#4A4038"/>
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
        <p class="ftr__about">
          〒658-0051 兵庫県神戸市東灘区住吉本町2-14-8<br>
          TEL 078-123-4567／FAX 078-123-4568<br>
          指定番号 2870000000（児童福祉法に基づく指定事業所）
        </p>
      </div>

      <div>
        <h3>施設について</h3>
        <ul class="ftr__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#feature">特徴</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#flow">一日の流れ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#program">療育プログラム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#staff">スタッフ紹介</a></li>
        </ul>
      </div>

      <div>
        <h3>ご利用の方へ</h3>
        <ul class="ftr__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#guide">利用案内</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#voice">保護者の声</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#gallery">ギャラリー</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#access">アクセス</a></li>
        </ul>
      </div>

      <div>
        <h3>お問い合わせ</h3>
        <ul class="ftr__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">見学・体験のお申し込み</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">採用情報</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">自己評価表の公表</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">苦情・ご意見の窓口</a></li>
        </ul>
      </div>
    </div>

    <div class="ftr__bar">
      <small>© 2026 Nijiiro Hiroba. All rights reserved.</small>
      <nav aria-label="規約">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">プライバシーポリシー</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact">サイトマップ</a>
      </nav>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
