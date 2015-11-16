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
     * The YAML parser.
     *
     * @var Yaml
     */
    protected $yaml;

    /**
     * The decorated object.
     * This is for IDE hinting.
     *
     * @var TextareaFieldType
     */
    protected $object;

    /**
     * Create a new TextareaFieldTypePresenter instance.
     *
     * @param mixed $object
     */
    public function __construct(Yaml $yaml, $object)
    {
        $this->yaml = $yaml;

        parent::__construct($object);
    }

    /**
     * Return the parsed as YAML.
     *
     * @return array
     */
    public function yaml()
    {
        return $this->yaml->parse($this->object->getValue());
    }

    /**
     * Return the lines.
     *
     * @param int $limit
     * @return array
     */
    public function lines($limit = 9999)
    {
        return explode("\n", $this->object->getValue(), $limit);
    }

    /**
     * Return a specific line.
     *
     * @param int $number
     * @return string
     */
    public function line($number = 1)
    {
        return array_get(explode("\n", $this->lines()), $number - 1);
    }
}
