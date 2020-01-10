<?php

namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

/**
 * SlugFieldTypePresenter class
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SlugFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return the humanized string.
     *
     * @return string
     */
    public function humanize()
    {
        return humanize($this->object->getValue(), $this->object->config('type'));
    }
}
