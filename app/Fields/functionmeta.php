<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class functionmeta extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $functionmeta = new FieldsBuilder('functionmeta', [
            'title' => 'Custom Meta',
            'position' => 'side',
        ]);

        $functionmeta
            ->setLocation('post_type', '==', 'service');

        $functionmeta
            ->addColorPicker('bg color')
            ->addColorPicker('text color');

        return $functionmeta->build();
    }
}
