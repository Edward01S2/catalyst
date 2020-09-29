<?php

/**
 * Theme helpers.
 */

namespace App;
use function Roots\view;

function load_more(){
  //$search = sanitize_text_field( $_POST[ 'search_string' ] );
  $page = isset($_POST['page']) ? $_POST['page'] + 1 : 0;
  $count = isset($_POST['count']) ? $_POST['count']: 4;
  //$multi = preg_replace('/\s+/', '+', $search);
  //echo $search;
  $args = array(
      'posts_per_page' => $count,
      'paged' => $page,
      'post_type' => 'post',
      'post_status' => 'publish'
  );
  //  echo json_encode($args);
  
  //echo $search;
  $wp_query = new \WP_Query($args);

  //echo $wp_query;
  //echo json_encode($wp_query);
  if( $wp_query->have_posts() ) {
    while( $wp_query->have_posts() ) : $wp_query->the_post();
    // echo 'worked';
    $excerpt = get_the_excerpt();
    $result = wp_trim_words( $excerpt, 32, '...');

    $post_data = [
      'cat' => get_the_category(),
      'title' => get_the_title(),
      'link' => get_permalink(),
      'image' => get_the_post_thumbnail_url(),
      'excerpt' => $result,
    ];
    //$post_data['page'] = $paged;
    // echo template('partials.content-post');
    $view .=  view('partials.content-post')->with(['post' => $post_data]);
    // echo json_encode($post_data);
    /* end loop */
    endwhile;

    //echo $wp_query->max_num_pages;
    $button = ($page < $wp_query->max_num_pages) ? $page : false;
    //$button = $wp_query->max_num_pages;

    $result = [
      'view' => $view,
      'button' => $button
    ];

    echo json_encode($result);
  } 
  else {
    echo '<div class="story-none text-center text-xl py-4 text-l-blue md:text-2xl md:col-span-3 lg:col-span-4">Sorry. No results found.</div>';
  }
  $result = []; 
  wp_reset_query();
  
  die();
  
}

add_action('wp_ajax_load_more', __NAMESPACE__ . '\\load_more');
add_action('wp_ajax_nopriv_load_more', __NAMESPACE__ . '\\load_more');