<?php namespace Anomaly\TextareaFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use Symfony\Component\Yaml\Yaml;

/**
 * Class TextareaFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\TextareaFieldType
 */
class TextareaFieldTypePresenter extends FieldTypePresenter
{

    /**
     * The decorated object.
     * This is for IDE hinting.
     *
     * @var TextareaFieldType
     */
    protected $object;

    /**
     * Return the parsed as YAML.
     *
     * @return array
     */
    public function yaml()
    {
        return (new Yaml())->parse($this->object->getValue());
    }
}
