<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleService extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-service',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => $this->title(),
            'blog_title' => get_field('Blog Block Title', 'options'),
            'content' => apply_filters('the_content()', get_the_content()),
            'blog' => get_post_type_archive_link( 'post' ),
            'post_data' => $this->posts(),
            'link' => $this->link(),
            'cat' => $this->cat(),
        ];
    }

    public function link() {
      $link = array(
        'title' => 'More From the Blog',
        'url' => get_post_type_archive_link( 'post' ),
      );

      return $link;
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
      $cat = get_the_title();

      $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
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
