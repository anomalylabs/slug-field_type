<?php namespace Anomaly\Streams\Addon\FieldType\Slug;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class SlugFieldType extends FieldTypeAddon
{

    public $settings = array(
        'slug_type',
        'slug_field',
    );

    public function mutate($value)
    {
        return slugify($value);
    }
}
