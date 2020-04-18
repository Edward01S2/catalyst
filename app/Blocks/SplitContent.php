<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class splitcontent extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Split Content';
    public $slug = 'splitcontent';

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
            'gradient' => get_field('Gradient'),
            'content' => get_field('Content'),
            'link' => get_field('Button'),
            'image' => get_field('Image'),
            'title' => get_field('Title'),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $splitcontent = new FieldsBuilder('splitcontent');

        $splitcontent
            ->addTextarea('Gradient')
            ->addTab('Side A')
            ->addImage('Image')
            ->addTab('Side B')
            ->addText('Title')
            ->addWysiwyg('Content')
            ->addLink('Button');

        return $splitcontent->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    // public function items()
    // {
    //     return get_field('items') ?: [];
    // }
}
