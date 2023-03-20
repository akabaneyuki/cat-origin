<?php

function breadcrumbs(array $page_object = null) {
    $breadcrumbs = [];
    $breadcrumbs[] = [
        'name' => 'ホーム',
        'link' => home_url('/'),
    ];

    $page_id = get_the_ID();

    if (is_page()) {
        $breadcrumbs[] = [
            'name' => get_post_field('post_title', $page_id),
            'link' => get_page_link($page_id),
        ];
        return $breadcrumbs;
    }

    if (is_archive()) {
        $breadcrumbs[] = [
            'name' => 'お知らせ',
            'link' =>  home_url('/archives'),
        ];
        return $breadcrumbs;
    }

    if (is_single()) {
        $breadcrumbs[] = [
            'name' => 'お知らせ',
            'link' =>  home_url('/archives'),
        ];
        $breadcrumbs[] = [
            'name' => get_the_title($page_id),
            'link' =>  get_permalink($page_id),
        ];
        return $breadcrumbs;
    }

    if ($page_object != null) {
        // お問い合わせのところは後で実装
    }


    return $breadcrumbs;
}
