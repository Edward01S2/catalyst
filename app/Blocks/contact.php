<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class contact extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Contact';

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
            'form' => get_field('form'),
            'title' => get_field('Title'),
            'subtitle' => get_field('Subtitle')
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


        $contact = new FieldsBuilder('contact');

        $contact
            ->addText('Title')
            ->addText('Subtitle')
            ->addFields($gravityforms);

        return $contact->build();
    }

}
