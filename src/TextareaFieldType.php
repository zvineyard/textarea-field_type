<?php namespace Anomaly\Streams\Addon\FieldType\Textarea;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class TextareaFieldType extends FieldTypeAddon
{
    protected $slug = 'textarea';

    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'text';

    /**
     * Return the input used for forms.
     *
     * @return mixed
     */
    public function input()
    {
        return \Form::textarea($this->inputName(), $this->value);
    }
}
