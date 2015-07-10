<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * Class SlugFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SlugFieldType
 */
class SlugFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return the humanized string.
     *
     * @return string
     */
    public function humanized()
    {
        return ucwords(str_replace(array_get($this->object->getConfig(), 'type'), ' ', $this->object->getValue()));
    }
}
