<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();

$title_suffix = "｜株式会社アモリア";
if (is_front_page()) {
  $title = "株式会社アモリア";
} else if (is_page()) {
  $title = get_post_field('post_title', get_the_ID()) . $title_suffix;
} else if (is_archive()) {
  $title = "お知らせ" . $title_suffix;
} else if (is_single()) {
  $title = get_the_title(get_the_ID()) . $title_suffix;
}

$descriptions = [
  [
    "title" => "recruit",
    "description" => "群馬県高崎市の介護福祉士、看護師、生活相談員など正社員、パート・アルバイトの求人情報を掲載しています。"
  ],
  [
    "title" => "contact",
    "description" => "株式会社アモリアついてのお問い合わせを受け付けております。お気軽にお問い合わせください。"
  ],
  [
    "title" => "thanks",
    "description" => "この度は、株式会社アモリアお問い合わせフォームよりご連絡をいただきありがとうございました。内容を確認の上、折り返しご連絡させていただきます。"
  ],
  [
    "title" => "privacy",
    "description" => "「住宅型有料老人ホーム咲の樹」「コンセプト型デイサービス料理とものづくり」を運営する株式会社アモリアの個人情報保護の取り組みについてご紹介します。"
  ]
];
$description = "群馬県高崎市で福祉サービス事業を展開する株式会社アモリアのホームページです。事業内容や会社概要、採用情報をご紹介します。";
foreach ($descriptions as $d) {
  if (is_page($d["title"])) {
    $description = $d["description"];
  }
}
// if (is_archive()) {
//   $description = "高崎市の住宅型有料老人ホーム咲の樹（えみのき）から皆様へのお知らせ情報を掲載しています。";
// }
// if (is_single()) {
//   $description = get_the_content(get_the_ID());
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){
      w[l]=w[l]||[];
      w[l].push({
        'gtm.start':new Date().getTime(),
        event:'gtm.js'
      });
      var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),
      dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;
      j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NWXBW7K');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8">
  <meta httl-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <meta name="description" content="<?= $description; ?>">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $title; ?>">
  <meta property="og:description" content="<?= $description; ?>">
  <meta property="og:site_name" content="<?= $title; ?>">
  <meta property="og:url" content="<?php if (is_home() || is_front_page()) {
                                      echo $home_url;
                                    } else {
                                      echo get_the_permalink();
                                    } ?>">
  <link rel="shortcut icon" href="<?= $theme_url; ?>/images/favicon.ico">
  <meta property="og:image" content="<?= $theme_url . "/images/OGP.jpg"; ?>">

  <!-- css -->
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="<?= $theme_url; ?>/css/style.min.css">
  
  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  
  <!-- Slick CDN -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  
  <!-- SELECT2 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="IkV0MRwAA8RvQjJhaN8camssEAaCpLxy6dyfGNE-rHk" />
</head>

<body id="page-top">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWXBW7K" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <a href="#page-top" class="top_btn"><img src="<?= $theme_url; ?>/images/top-btn.svg" alt="上に戻る"></a>
  <img class="top_circle" src="<?= $theme_url; ?>/images/header/top-circle.svg" alt="">
  <header class="l-header">
    <div class="pc">
      <div class="l-header_wrap">
        <a href="<?= $home_url; ?>"><img src="<?= $theme_url; ?>/images/header/logo.svg" alt="ロゴ画像" class="l-header_logo"></a>
        <div class="l-header_nav">
          <?php
          $header_contents = [["details", "事業紹介"], ["company", "会社概要"], ["recruit", "採用情報"]];
          // href, text
          foreach ($header_contents as $contents) :
          if($contents[0] != 'recruit'):
          ?>
          <a class="l-header_nav_buttun" href="<?= $home_url; ?>/#<?= $contents[0] ?>">
            <p class="l-header_nav_text"><?= $contents[1]; ?></p>
          </a>
          <?php else: ?>
          <a class="l-header_nav_buttun" href="<?= $home_url ?>/<?= $contents[0] ?>">
            <p class="l-header_nav_text"><?= $contents[1]; ?></p>
          </a>
          <?php
          endif;
          endforeach;
          ?>
          <a class="l-header_contact" href="<?= $home_url ?>/contact">
            <p class="l-header_contact_text">お問い合わせ</p>
          </a>
        </div>
      </div>
    </div>
    <div class="sp">
      <div class="l-header-sp">
        <a href="<?= $home_url; ?>"><img src="<?= $theme_url; ?>/images/header/logo.svg" alt="ロゴ画像" class="l-header_logo u-padding-tol-7 u-padding-left-11"></a>
        <div class="l-header_menu">
          <input type="checkbox" name="" id="humb_check">
          <label for="humb_check" class="l-header_menu_humbBox"><span></span></label>
          <nav class="l-header_humbMenu">
            <a href="<?= $home_url; ?>">
              <div class="l-header_humbMenu_list u-padding-tol-14">
                <p class="l-header_humbMenu_list_text">ホーム</p>
                <div class="l-header_humbMenu_list_chevron">〉</div>
              </div>
            </a>
            <?php
            foreach ($header_contents as $contents) :
            if($contents[0] != 'recruit'):

            ?>
              <a href="<?= $home_url; ?>/#<?= $contents[0] ?>">
                <div class="l-header_humbMenu_list u-padding-tol-14">
                  <p class="l-header_humbMenu_list_text"><?= $contents[1]; ?></p>
                  <div class="l-header_humbMenu_list_chevron">〉</div>
                </div>
              </a>
            <?php else: ?> 
              <a href="<?= $home_url; ?>/<?= $contents[0] ?>">
                <div class="l-header_humbMenu_list u-padding-tol-14">
                  <p class="l-header_humbMenu_list_text"><?= $contents[1]; ?></p>
                  <div class="l-header_humbMenu_list_chevron">〉</div>
                </div>
              </a>
            <?php
            endif;
            endforeach;
            ?>
            <div class="l-header_humbMenu_under u-margin-center u-margin-tol-35px">
              <a href="<?= $home_url; ?>/contact" class="l-header_contact-sp">
                <p class="l-header_contact-sp_text">お問い合わせはこちら</p>
              </a>
              <a class="l-header_humbMenu_under_buttun" href="<?= $home_url ?>/privacy">
                <p class="l-header_humbMenu_under_text">個人情報保護方針</p>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="l-header_shadow"></div>
