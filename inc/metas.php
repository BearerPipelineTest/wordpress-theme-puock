<?php

function pk_metas_get_async_view_id()
{
    if (pk_is_checked('async_view') && (is_page() || is_single())) {
        return get_the_ID();
    }
    return null;
}

$headMetas = [
    'home' => home_url(),
    'vd_comment' => pk_is_checked('vd_comment'),
    'use_post_menu' => pk_is_checked('use_post_menu'),
    'is_single' => is_single(),
    'is_pjax' => pk_is_checked('page_ajax_load', false),
    'main_lazy_img' => pk_is_checked('basic_img_lazy_z', false),
    'link_blank_open' => pk_is_checked('link_blank_content'),
    'async_view_id' => pk_metas_get_async_view_id(),
];
?>
<script data-instant>var puock_metas=<?php echo json_encode($headMetas) ?>;</script>
