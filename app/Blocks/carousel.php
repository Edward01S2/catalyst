<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class carousel extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Carousel';
    public $slug = 'carousel';

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
            'slides' => get_field('slides'),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $carousel = new FieldsBuilder('carousel');

        $carousel
            ->addRepeater('slides', [
                'layout' => 'block',
                'collapsed' => 'title'
            ])
                ->addText('title')
                ->addTextarea('content')
                ->addLink('link')
                ->addTextarea('gradient')
                ->addImage('bg image')
            ->endRepeater();

        return $carousel->build();
    }

}
