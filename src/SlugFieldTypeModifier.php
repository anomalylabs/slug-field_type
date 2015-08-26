<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeModifier;
use Illuminate\Support\Str;

/**
 * Class SlugFieldTypeModifier
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SlugFieldType
 */
class SlugFieldTypeModifier extends FieldTypeModifier
{

    /**
     * The string utility.
     *
     * @var Str
     */
    protected $str;

    /**
     * Create a new SlugFieldTypeModifier instance.
     *
     * @param Str $str
     */
    public function __construct(Str $str)
    {
        $this->str = $str;
    }

    /**
     * Modify the value.
     *
     * @param $value
     * @return string
     */
    public function modify($value)
    {
        $type = array_get($this->fieldType->getConfig(), 'type', '-');

        return trim($this->str->slug($value, $type), $type);
    }
}
