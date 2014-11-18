<?php namespace Anomaly\Streams\Addon\FieldType\Slug;

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
    protected $inputView = 'field_type.slug::input';

    /**
     * Get view data for the input.
     *
     * @return array
     */
    public function getInputData()
    {
        $data = parent::getInputData();

        $data['separator'] = $this->getConfig('separator', '_');

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
        return slugify($value, '_');
    }
}
