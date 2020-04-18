<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class herocarousel extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Hero Carousel';
    public $slug = 'herocarousel';

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
            'slides' => $this->slides(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $herocarousel = new FieldsBuilder('herocarousel');

        $herocarousel
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

        return $herocarousel->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function slides()
    {
        return get_field('slides') ?: [];
    }
}
