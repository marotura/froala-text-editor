<?php

namespace Marotura\FroalaTextEditor;

use Laravel\Nova\Fields\Field;

class FroalaTextEditor extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'froala-text-editor';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->withMeta([
            'apiKey' => env('FROALA_ACTIVATION_KEY'),
        ]);
    }

    // This need to be farther implemented in the future to be able to alter the settings for Froala. 
    // public function options($options = null)
    // {
    //     return $this->withMeta(['options' => $options]);
    // }
}
