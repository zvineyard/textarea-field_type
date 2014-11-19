<?php namespace Anomaly\Streams\Addon\FieldType\Textarea;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class TextareaFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Textarea
 */
class TextareaFieldType extends FieldType
{

    /**
     * The database column type.
     *
     * @var string
     */
    protected $columnType = 'text';

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'field_type.textarea::input';
}
