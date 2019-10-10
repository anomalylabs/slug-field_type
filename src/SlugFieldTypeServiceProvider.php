<?php

namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

/**
 * Class SlugFieldTypeServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SlugFieldTypeServiceProvider extends AddonServiceProvider implements DeferrableProvider
{

    /**
     * Singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\SlugFieldType\SlugFieldTypeModifier' => 'Anomaly\SlugFieldType\SlugFieldTypeModifier',
    ];

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [SlugFieldType::class];
    }
}
