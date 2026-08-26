# にじいろひろば — WordPress オリジナルテーマ

放課後等デイサービス「にじいろひろば」のためにゼロから制作した WordPress テーマです。
配布テーマやテーマビルダーは使用せず、テンプレートファイルと PHP をすべて自分で記述しています。

静的な HTML / CSS で先にサイトを完成させたあと、WordPress テーマへ移植しました。

> **注記**
> にじいろひろばは架空の施設です。サイト内の施設名・住所・電話番号・スタッフ名・
> お知らせの内容はすべて架空のもので、実在する施設とは関係ありません。
> 掲載写真はフリー素材を使用しています。

![テーマのスクリーンショット](screenshot.png)

## ブラウザで試す

インストール不要で、このテーマが動いているWordPressをブラウザの中で起動できます。
管理画面にもログイン済みの状態で入れるので、お知らせを追加して
サイトに反映されるところまで実際に触っていただけます。

**▶ [WordPress Playground でデモを開く](https://playground.wordpress.net/#%7B%22%24schema%22%3A%22https%3A%2F%2Fplayground.wordpress.net%2Fblueprint-schema.json%22%2C%22landingPage%22%3A%22%2F%22%2C%22preferredVersions%22%3A%7B%22php%22%3A%228.2%22%2C%22wp%22%3A%22latest%22%7D%2C%22features%22%3A%7B%22networking%22%3Atrue%7D%2C%22steps%22%3A%5B%7B%22step%22%3A%22installTheme%22%2C%22themeData%22%3A%7B%22resource%22%3A%22git%3Adirectory%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fhelpmark-pink%2Fnijiiro-hiroba-theme%22%2C%22ref%22%3A%22HEAD%22%7D%2C%22options%22%3A%7B%22activate%22%3Atrue%7D%2C%22progress%22%3A%7B%22caption%22%3A%22%E3%82%AA%E3%83%AA%E3%82%B8%E3%83%8A%E3%83%AB%E3%83%86%E3%83%BC%E3%83%9E%E3%80%8C%E3%81%AB%E3%81%98%E3%81%84%E3%82%8D%E3%81%B2%E3%82%8D%E3%81%B0%E3%80%8D%E3%82%92%E8%AA%AD%E3%81%BF%E8%BE%BC%E3%82%93%E3%81%A7%E3%81%84%E3%81%BE%E3%81%99%22%7D%7D%2C%7B%22step%22%3A%22setSiteOptions%22%2C%22options%22%3A%7B%22blogname%22%3A%22%E3%81%AB%E3%81%98%E3%81%84%E3%82%8D%E3%81%B2%E3%82%8D%E3%81%B0%22%2C%22blogdescription%22%3A%22%E7%A5%9E%E6%88%B8%E5%B8%82%E6%9D%B1%E7%81%98%E5%8C%BA%E3%81%AE%E6%94%BE%E8%AA%B2%E5%BE%8C%E7%AD%89%E3%83%87%E3%82%A4%E3%82%B5%E3%83%BC%E3%83%93%E3%82%B9%EF%BC%88%E6%9E%B6%E7%A9%BA%E3%81%AE%E6%96%BD%E8%A8%AD%E3%81%A7%E3%81%99%EF%BC%89%22%2C%22permalink_structure%22%3A%22%2F%25postname%25%2F%22%2C%22timezone_string%22%3A%22Asia%2FTokyo%22%2C%22date_format%22%3A%22Y.m.d%22%7D%7D%2C%7B%22step%22%3A%22runPHP%22%2C%22code%22%3A%22%3C%3Fphp%20require_once%20%27%2Fwordpress%2Fwp-load.php%27%3B%20require_once%20get_template_directory%28%29%20.%20%27%2F_playground%2Fdemo-content.php%27%3B%22%2C%22progress%22%3A%7B%22caption%22%3A%22%E3%83%87%E3%83%A2%E7%94%A8%E3%81%AE%E3%81%8A%E7%9F%A5%E3%82%89%E3%81%9B%E3%82%923%E4%BB%B6%E7%99%BB%E9%8C%B2%E3%81%97%E3%81%A6%E3%81%84%E3%81%BE%E3%81%99%22%7D%7D%2C%7B%22step%22%3A%22login%22%2C%22username%22%3A%22admin%22%2C%22password%22%3A%22password%22%7D%5D%7D)**

- 起動には30秒ほどかかります
- お知らせのサンプルが3件、あらかじめ登録されています
- 管理画面は右上のツールバー、または `/wp-admin/` から
- すべてブラウザの中だけで動いており、閉じると消えます

デモの設定は [`_playground/blueprint.json`](_playground/blueprint.json)、
登録されるお知らせの中身は [`_playground/demo-content.php`](_playground/demo-content.php) にあります。

## 実装している機能

| 機能 | 内容 |
| --- | --- |
| カスタム投稿タイプ | `news`（お知らせ）を `register_post_type()` で登録。管理画面に専用メニューを追加 |
| カスタムタクソノミー | `news_cat`（お知らせカテゴリー）。「イベント」「重要なお知らせ」などを管理画面で作成 |
| アイキャッチ画像 | `add_theme_support( 'post-thumbnails' )`。個別ページの先頭に表示 |
| 一覧のページ送り | `the_posts_pagination()` |
| 前後の記事へのリンク | `previous_post_link()` / `next_post_link()` |
| ナビゲーションメニュー | `register_nav_menus()` でメインとフッターの2か所を登録 |
| アセットの読み込み | `wp_enqueue_style()` / `wp_enqueue_script()` |
| レスポンシブ対応 | CSS のみ。ハンバーガーメニューは素の JavaScript |

## ファイル構成

```
nijiiro-hiroba/
├── style.css           テーマ情報のコメント + サイト全体のスタイル
├── functions.php       テーマ設定・カスタム投稿タイプ・アセット読み込み
├── header.php          ロゴ / ナビ / SVGアイコンスプライト（全ページ共通）
├── footer.php          フッター（全ページ共通）
├── front-page.php      トップページ。お知らせ最新3件を WP_Query で出力
├── archive-news.php    お知らせ一覧（ページ送りつき）
├── single-news.php     お知らせの個別ページ
├── index.php           上記に当てはまらない場合の受け皿
├── screenshot.png      テーマ一覧に表示されるサムネイル
├── js/
│   └── main.js         ヘッダーの影・ハンバーガーメニュー
├── images/             サイトで使用する写真
└── _playground/
    └── blueprint.json  WordPress Playground でデモを起動するための設定
```

## 動作環境

- WordPress 6.0 以上
- PHP 7.4 以上

開発は [Local](https://localwp.com/)（PHP 8.2 / MySQL 8.4 / nginx）で行いました。

## インストール

1. このリポジトリをダウンロード、またはクローンします。

   ```bash
   git clone https://github.com/helpmark-pink/nijiiro-hiroba-theme.git
   ```

2. フォルダごと `wp-content/themes/` に配置します。
3. 管理画面の **外観 → テーマ** から「にじいろひろば」を有効化します。
4. **設定 → パーマリンク** を開き、そのまま「変更を保存」を押します。
   （カスタム投稿タイプの URL を有効にするために必要です）

## お知らせの追加方法

1. 管理画面の左メニュー **お知らせ → 新規追加**
2. タイトルと本文を入力
3. 必要に応じて、右側でお知らせカテゴリーとアイキャッチ画像を設定
4. 公開

トップページには新しいものから3件が表示され、`/news/` に一覧、
`/news/{スラッグ}/` に個別ページが自動で生成されます。

## 制作について

- 担当範囲: 企画 / デザイン / コーディング / テーマ実装
- 使用言語: HTML, CSS, JavaScript, PHP
- 使用ツール: WordPress, Local, VS Code, Figma

管理画面のキャプチャやテンプレート構成、つまずいた点の解決までを含めた制作過程は、
ポートフォリオサイトのケーススタディページにまとめています。

## ライセンス

GNU General Public License v2 or later — [LICENSE](LICENSE)
