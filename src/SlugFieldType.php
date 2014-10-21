<?php namespace Anomaly\Streams\FieldType\Slug;

use Streams\Core\Addon\FieldTypeAbstract;

class SlugFieldType extends FieldTypeAbstract
{
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
        return \Form::input('text', $this->inputName(), $this->value());
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
