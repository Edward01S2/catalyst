<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class functions extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Functions';

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
            'functions' => get_field('functions'),
            'info' => $this->info(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $functions = new FieldsBuilder('functions');

        $functions
            ->addText('Title')
            ->addRelationship('functions', [
                'label' => 'Functions',
                'max' => 4,
                'post_type' => ['function'],
            ]);

        return $functions->build();
    }

    public function info() {
        $collect = [];
        foreach(get_field('functions') as $func) {
            $function = array (
                'title' => $func->post_title,
                'image' => get_the_post_thumbnail_url($func->ID),
                'excerpt' => $func->post_excerpt,
                'link' => get_permalink($func->ID),
            );
            $color = get_field('bg color', $func->ID);
            $color = ($color) ? $color : 'white'; 
            
            $text = get_field('text color', $func->ID);
            $text = ($color) ? $text : 'black'; 

            $function['bg'] = $color;
            $function['text'] = $text;

            $collect[] = $function;
        }
        return $collect;
    }


}
