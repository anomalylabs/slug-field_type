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

    public function boot()
    {
        assets('scripts.js', 'public::vendor/anomaly/field_type/slug/js/input.js');
    }

    /**
     * Return the provided services.
     */
    public function provides()
    {
        return [SlugFieldType::class, 'anomaly.field_type.slug'];
    }
}
