<?php
/*
Template Name: 404
*/

$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();

get_header();
?>

<div class="p-404">
  <div class="p-404_wrap">
    <img src="<?= $theme_url ?>/images/404/logo.svg" alt="" class="p-404_logo">
    <img src="<?= $theme_url ?>/images/404/coming.svg" alt="" class="p-404_coming">
    <p class="p-404_text">ご訪問ありがとうございます。<br>こちらのページは近日公開予定です。<br>公開まで今しばらくお待ちください。</p>
  </div>
</div>
