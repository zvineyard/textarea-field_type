<?php namespace Streams\Addon\FieldType\Textarea;

use Streams\Core\Addon\FieldTypeAbstract;

class TextareaFieldType extends FieldTypeAbstract
{
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
        return \Form::textarea($this->formSlug(), $this->value);
    }
}
