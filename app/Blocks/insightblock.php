<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class insightblock extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Insight';
    public $slug = 'insightblock';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'common';

    /**
     * The icon of this block.
     *
     * @var string|array
     */
    public $icon = 'screenoptions';

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('Title'),
            'posts' => $this->posts(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $insightblock = new FieldsBuilder('insightblock');

        $insightblock
            ->addText('Title');

        return $insightblock->build();
    }

    public function posts() {

        $args = array(
            'paged' => $paged,
            'post_type' => 'post',
            'tag' => 'insight',
            'post_status' => 'publish'

            // 'category_name' => $cat,
            //Here we can get more than one post type. Useful to a home page.
        );

        $count = 5;
        $args['posts_per_page'] = $count;
        $sticky = (get_option('sticky_posts')) ? true : false;

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();

        $post_data['posts'][] = [
            'date' => get_the_date(),
            'title' => get_the_title(),
            'link' => get_permalink(),
            'image' => get_the_post_thumbnail_url(),
        ];

        // $post_data['sticky'] = $sticky;
        endwhile;

        wp_reset_postdata();

        return $post_data;
    }
}
