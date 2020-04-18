<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Blog extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'index',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            // 'title' => $this->title(),
            // 'image' => get_the_post_thumbnail_url(),
            'blog' => get_post_type_archive_link( 'post' ),
            'blog_title' => get_field('Blog Title', 'options'),
            'blog_bg' => get_field('Blog BG Image', 'options')['url'],
            // // 'cat' => $this->cat(),
            'posts' => $this->posts(),

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

    public function posts() {
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $args = array(
            'paged' => $paged,
            'post_type' => 'post',
            'post_status' => 'publish'

            // 'category_name' => $cat,
            //Here we can get more than one post type. Useful to a home page.
        );

        $count = (get_option('sticky_posts')) ? 4 : 5;
        $args['posts_per_page'] = $count;
        $sticky = (get_option('sticky_posts')) ? get_option('sticky_posts') : false;

        $query = get_queried_object();
        if($query->term_id) {
            $args['cat'] = $query->term_id;
        }
        

        // if($category = get_the_category()) {
        //     $args['category_name'] = $category[0]->name;
        // }

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();
        $id = get_the_ID();
        $feat = (in_array($id, $sticky)) ? true : false;

        $post_data['posts'][] = [
            'cat' => get_the_category(),
            'feat' => $feat,
            'title' => get_the_title(),
            'link' => get_permalink(),
            'image' => get_the_post_thumbnail_url(),
            'excerpt' => get_the_excerpt(),
        ];
        $post_data['page'] = $paged;
        $post_data['count'] = $count;
        // $post_data['sticky'] = $sticky;
        $post_data['load'] = ($posts->max_num_pages > 1) ? true : false;
        // $post_data['load'] = $posts->max_num_pages;
        endwhile;

        return $post_data;
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
}
