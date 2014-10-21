<?php namespace Anomaly\Streams\Addon\FieldType\Slug;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class SlugFieldType extends FieldTypeAddon
{
    protected $slug = 'slug';

    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'string';

    /**
     * Available field type settings.
     *
     * @var array
     */
    public $settings = array(
        'slug_type',
        'slug_field',
    );

    /**
     * Return the input used for forms.
     *
     * @return mixed
     */
    public function input()
    {
        return \Form::input('text', $this->inputName(), $this->value);
    }

    /**
     * Slug the input for good measure.
     *
     * @param $value
     * @return mixed|string
     */
    public function mutate($value)
    {
        return \Str::slug($value);
    }
}
