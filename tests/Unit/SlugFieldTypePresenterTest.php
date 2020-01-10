<?php

use Anomaly\SlugFieldType\SlugFieldType;

class SlugFieldTypePresenterTest extends TestCase
{

    public function testHumanize()
    {
        $fieldType = $this->app->make(SlugFieldType::class)
            ->setValue('foo_bar');

        $presenter = decorate($fieldType);

        $this->assertTrue($presenter->humanize() == 'foo bar');
    }
}
