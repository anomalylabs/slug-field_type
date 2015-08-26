<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class SlugFieldTypeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SlugFieldType
 */
class SlugFieldTypeServiceProvider extends AddonServiceProvider
{

    /**
     * Singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\SlugFieldType\SlugFieldTypeModifier' => 'Anomaly\SlugFieldType\SlugFieldTypeModifier'
    ];

}
