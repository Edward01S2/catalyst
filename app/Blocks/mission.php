<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class mission extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Mission';
    public $slug = 'mission';

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
            'content' => get_field('Content'),
            'image' => get_field('BG Image'),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $mission = new FieldsBuilder('mission');

        $mission
            ->addText('Title')
            ->addTextarea('Content')
            ->addImage('BG Image');

        return $mission->build();
    }
}
