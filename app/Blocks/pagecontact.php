<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class pagecontact extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Page - Contact';
    public $slug = 'pagecontact';

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
            'content' => get_field('Content'),
            'form' => get_field('form'),
            'image' => get_field('Image'),
            'gradient' => get_field('Gradient')
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $forms = \GFAPI::get_forms();
        $choices= [];
        foreach($forms as $form) {
            $choices[] = [
                $form['id'] => $form['title']
            ];
        }
        //var_dump($choices);

        $gravityforms = new FieldsBuilder('gravityforms');
        $gravityforms
            ->addSelect('form', [
                'label' => 'Select Form',
                'choices' => $choices,
        ]);

        $pagecontact = new FieldsBuilder('pagecontact');

        $pagecontact
            ->addImage('Image')
            ->addTextarea('Gradient')
            ->addWysiwyg('Content')
            ->addFields($gravityforms);
        return $pagecontact->build();
    }
}
