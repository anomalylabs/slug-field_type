<?php

use Anomaly\SlugFieldType\SlugFieldType;
use Anomaly\SlugFieldType\SlugFieldTypeModifier;

class SlugFieldTypeModifierTest extends TestCase
{

    public function testModify()
    {
        $fieldType = $this->app->make(SlugFieldType::class)
            ->mergeConfig([
                'min' => 5,
                'max' => 10,
                'type' => '_',
            ]);

        $modifier = app(SlugFieldTypeModifier::class)
            ->setFieldType($fieldType);

        $this->assertTrue($modifier->modify('Foo Bar') === 'foo_bar');

        $fieldType->mergeConfig(['type' => '-']);

        $this->assertTrue($modifier->modify('Foo Bar') === 'foo-bar');
    }
}
