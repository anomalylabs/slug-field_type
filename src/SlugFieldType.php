<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class SlugFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Slug
 */
class SlugFieldType extends FieldType
{

    /**
     * The input view.
     *
     * @var string
     */
    protected $inputView = 'anomaly.field_type.slug::input';

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['separator'] = $this->pullConfig('separator', '_');

        return $data;
    }

    /**
     * Slugify the value before setting it to the entry.
     *
     * @param $value
     * @return mixed|string
     */
    public function mutate($value)
    {
        return app('Illuminate\Support\Str')->slug($value, '_');
    }
}
