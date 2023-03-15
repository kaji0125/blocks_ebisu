<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action( 'wp_head', 'locale_stylesheet' );
remove_action( 'wp_head', 'print_emoji_detection_script',     7    );
remove_action( 'wp_print_styles','print_emoji_styles' );
remove_action('template_redirect', 'rest_output_link_header', 11 );
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');
remove_action('wp_head','wp_resource_hints',2);
/* インラインスタイル削除 */
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );

$content_width = 450;

add_theme_support( 'automatic-feed-links' );

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}


add_action( 'wp_enqueue_scripts', 'remove_my_global_styles' );

function remove_my_global_styles() {
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'global-styles-inline-css' );
}
function dequeue_plugins_style() {
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);



//大きい画像の自動リサイズ解除
add_filter( 'big_image_size_threshold', '__return_false' );

//PREV NEXTに任意のclass付与
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev" href=', $output);
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );

function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );

//固定ページのみクラシックエディタに変更
add_filter( 'use_block_editor_for_post_type', 'hide_block_editor', 10, 10 );
function hide_block_editor( $use_block_editor, $post_type ) {
  if ( $post_type === 'page' ) return false;
  return $use_block_editor;
}

//canonical追加
add_action( 'wp_head', 'add_canonical' );
function add_canonical() {
 $canonical = null;
 
 if( is_home() || is_front_page() ) {
 $canonical = home_url();
 } elseif ( is_category() ) {
 $canonical = get_category_link( get_query_var('cat') );
 } else if(is_tag()){
 $canonical = get_tag_link(get_queried_object()->term_id);
 } elseif ( is_search() ) {
 $canonical = get_search_link();
 } elseif ( is_page() || is_single() ) {
 $canonical = get_permalink();
 } else{
 $canonical = home_url();
 }
 echo '<link rel="canonical" href="'.$canonical.'">'."\n";
}
?>