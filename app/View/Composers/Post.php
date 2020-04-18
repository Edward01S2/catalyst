<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content-post',
        'partials.content-single',
        // 'partials.content-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'image' => get_the_post_thumbnail_url(),
            'blog' => get_post_type_archive_link( 'post' ),
            'blog_title' => get_field('Blog Title', 'options'),
            'blog_bg' => get_field('Blog BG Image', 'options')['url'],
            'cat' => $this->cat(),
            'excerpt' => get_the_excerpt(),
            'posts' => $this->related(),
            'blogblock' => $this->posts(),

        ];
    }

    public function cat() {
        $category = get_the_category();
        $cat = [
            'link' => get_category_link( $category[0]->term_id ),
            'name' => $category[0]->name
        ];   
        return $cat;
    }

    public function related() {
        $args = array(
            'numberposts'   => 4,
            'post__not_in' => array( get_the_id()),
            // 'category_name' => $cat,
            //Here we can get more than one post type. Useful to a home page.
        );

        if($category = get_the_category()) {
            $args['category_name'] = $category[0]->name;
        }

        $posts = get_posts($args);

        $related = [];
        foreach($posts as $post) {
            $related[] = [
                'cat' => get_the_category($post->ID),
                'title' => $post->post_title,
                'link' => get_permalink($post->ID),
                'image' => get_the_post_thumbnail_url($post->ID),
            ];
        }

        return $related;
    }

    /**
     * Returns the post title.
     *
     * @return string
     */

    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            /* translators: %s is replaced with the search query */
            return sprintf(
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }

    public function posts() {

        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish'
  
            // 'category_name' => $cat,
            //Here we can get more than one post type. Useful to a home page.
        );
  
        $count = (get_option('sticky_posts')) ? 3 : 4;
        $args['posts_per_page'] = $count;
        $sticky = (get_option('sticky_posts')) ? true : false;
  
        $posts = new \WP_Query($args);
  
        $post_data = [];
        while($posts->have_posts()): $posts->the_post();
  
        $post_data['posts'][] = [
            'cat' => get_the_category(),
            'title' => get_the_title(),
            'link' => get_permalink(),
            'image' => get_the_post_thumbnail_url(),
        ];
  
        $post_data['sticky'] = $sticky;
        endwhile;

        wp_reset_postdata();
  
        return $post_data;
    }
  
}
