<?php namespace Anomaly\Streams\Addon\FieldType\Textarea;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class TextareaFieldType extends FieldTypeAddon
{
    public $columnType = 'text';

    public function input()
    {
        return \Form::textarea($this->inputName(), $this->value);
    }
}
