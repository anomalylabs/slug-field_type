<?php

use Anomaly\SlugFieldType\SlugFieldType;
use Anomaly\SlugFieldType\SlugFieldTypeServiceProvider;

class SlugFieldTypeServiceProviderTest extends TestCase
{

    public function testProvides()
    {
        $provider = app(SlugFieldTypeServiceProvider::class, ['app' => app()]);

        $provides = $provider->provides();

        $this->assertTrue(in_array(SlugFieldType::class, $provides));
        $this->assertTrue(in_array('anomaly.field_type.slug', $provides));
    }
}
