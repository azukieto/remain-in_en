<?php

// -------------------------------------------------------
//    フロント側 初期設定
// -------------------------------------------------------

/* 不要タグ削除 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

/* タイトルタグの自動出力 */
add_theme_support( 'title-tag' );

/**
 * 投稿件数設定
 *
 */
function front_load__pre_get_posts($query) {
    if ( is_admin() || ! $query->is_main_query() ){
        return;
    }
    if (is_post_type_archive('news')) {
        $query->set('posts_per_page', THEME_COMMON_ARCHIVE_NUM ?: get_option('posts_per_page'));
        // $query->set('nopaging', 1);
    }
}
add_action('pre_get_posts', 'front_load__pre_get_posts');


/**
 *  style.cssの読み込み
 *
 */
function front_load__header_styles() {
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/style.css');
}
// add_action( 'wp_enqueue_scripts', 'front_load__header_styles' );

/**
 * wp_headに CSS追加
 *
 */
function front_load__head_css(){
    echo '<style></style>';
}
// add_action('wp_head', 'front_load__head_css');

/**
 * the_contentの処理
 */
function front_load__disable_wpautop($content){
    if ( is_page() ) {
        remove_filter( 'the_content', 'wpautop' );
    }
    return $content;
}
add_filter('the_content', 'front_load__disable_wpautop');


/**
 * フォーム wpautop
 */
function mvwpform_autop_filter() {
    if (class_exists('MW_WP_Form_Admin')) {
        $mw_wp_form_admin = new MW_WP_Form_Admin();
        $forms = $mw_wp_form_admin->get_forms();
        foreach ($forms as $form) {
            add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
        }
    }
}
mvwpform_autop_filter();

/**
 * my_validation_rule
 * @param object $Validation
 * @param array $data
 * @param MW_WP_Form_Data $Data
 * $Validation::set_ruleの引数は name属性値, バリデーション名, オプション
 */
function my_validation_rule( $Validation, $data, $Data ) {
    if ( $data['お問い合わせ項目'] == 'お問い合わせ' ){
        $Validation->set_rule( '企業名', 'noEmpty' );
    } else if ( $data['お問い合わせ項目'] == 'Remain in で働く' ) {
    } else if ( $data['お問い合わせ項目'] == '資料ダウンロード' ) {
        $Validation->set_rule( '企業名', 'noEmpty' );
        $Validation->set_rule( '部署', 'noEmpty' );
        $Validation->set_rule( '役職', 'noEmpty' );
    }
    return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-79', 'my_validation_rule', 10, 3 );
