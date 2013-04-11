<?php  
if ( function_exists('register_sidebar') ) {
  /// This sidebar appears on all pages above the following sidebars
  register_sidebar(
    array(
      'name' => 'sidebar',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '',
      'after_title' => '',
      )
    );

}
function register_my_menus() {
register_nav_menus(
array(
'top-menu' => __( 'Top Menu' ),
'footer-menu' => __( 'Footer Menu' )
)
);
}
add_action( 'init', 'register_my_menus' );


add_theme_support( 'post-thumbnails' ); 

function custom_excerpt_length( $length ) {
  return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//breadcrumb function
function rm_bread_crumbs() {
 global $post;
 $crumbs =     '<p><a href="'.get_option('home').'">Home</a> ';

 //if the page has a parent add title and link of parent
 if($post->post_parent) {
   $crumbs .=     ' &raquo; <a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'</a>';
 }
 // if it's category page
 if((!is_front_page())||(is_category())){
  $crumbs.=
  $delimiter = ' &raquo;';
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';
  global $wp_query;
  $cat_obj = $wp_query->get_queried_object();
  $thisCat = $cat_obj->term_id;
  $thisCat = get_category($thisCat);
  $parentCat = get_category($thisCat->parent);
  if ($thisCat->parent != 0) $crumbs.= get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
   $crumbs.= $currentBefore." ";
   $crumbs.= single_cat_title("",FALSE);
   $crumbs.=$currentAfter;
 }
 // if it's not the front page of the site, but isn't the blog either
 if((!is_front_page()) && (is_page())) {
   $crumbs .=    ' <span>'.get_the_title($post->ID)."</span>";
 }

 /*if it's the news/blog home page or any type of archive
 if((is_home() ||(is_archive()))) {
   $crumbs .=    ' &raquo; ^^ '.get_the_title(get_option(page_for_posts));
 }*/

 //if it's a single news/blog post
 if(is_single()) {
   $crumbs .=     ' &raquo; <a href="'.get_permalink(get_option(page_for_posts)).'">'.get_the_title(get_option(page_for_posts)).'</a>';
   $crumbs .=    ' &raquo; <span>'.get_the_title($post->ID)."</span>";
 }
 $crumbs .=    '</p>'."\n";
 echo $crumbs;
}
//Ativando Shortcodes nos Widgets
add_filter('widget_text', 'do_shortcode');
//Ativando Thumbnails
add_theme_support( 'post-thumbnails' );

?>