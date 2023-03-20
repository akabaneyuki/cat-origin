<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>
<footer class="l-footer">
    <div class="l-footer_wrap">
        <a href="<?= $home_url; ?>" class="l-footer_wrap_logo">
            <img src="<?= $theme_url; ?>/images/footer/logo.svg" alt="株式会社アモリア">
        </a>
        <a href="https://ja-jp.facebook.com/eminoki.amolia/" class="l-footer_wrap_fb" target="_blank">
            <img src="<?= $theme_url; ?>/images/footer/facebook.svg" alt="facebook">
        </a>
        <div class="l-footer_wrap_navs">
<?php
$nav_contents = [
["", "ホーム"],
["#details", "事業紹介"],
["#company", "会社概要"],
["recruit", "採用情報"],
["contact", "お問い合わせ"],
["privacy", "個人情報保護方針"],
];
foreach($nav_contents as $nav):
?>
            <a href="<?= $home_url; ?>/<?=$nav[0]; ?>" class="l-footer_wrap_navs_nav">
                <?=$nav[1]; ?>
            </a>
<?php endforeach; ?>
        </div>
        <p class="l-footer_wrap_copyright">
        Copyright (C) アモリア All Rights Reserved
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
