<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class signup extends Block
{
    /**
     * The name of the block.
     *
     * @var string
     */
    public $name = 'Signup Form';
    public $slug = 'signup';

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

        $signup = new FieldsBuilder('signup');

        $signup
            ->addText('Title')
            ->addFields($gravityforms);

        return $signup->build();
    }
}
