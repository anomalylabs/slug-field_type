<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class SlugFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SlugFieldType
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
     * The config values.
     *
     * @var array
     */
    protected $config = [
        'type' => '-'
    ];

}
