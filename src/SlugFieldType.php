<?php namespace Anomaly\Streams\Addon\FieldType\Slug;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

class SlugFieldType extends FieldType
{

    protected $settings = array(
        'slug_type',
        'slug_field',
    );

    protected function onSet($value)
    {
        return slugify($value, '_');
    }
}
