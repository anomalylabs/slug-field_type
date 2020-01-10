<?php

use Anomaly\SlugFieldType\SlugFieldType;
use Anomaly\Streams\Platform\Entry\EntryModel;

class SlugFieldTypeTest extends TestCase
{

    public function testRules()
    {
        $fieldType = $this->app->make(SlugFieldType::class)
            ->mergeConfig([
                'min' => 5,
                'max' => 10,
            ]);

        $rules = $fieldType->getRules();

        $this->assertTrue(in_array('min:5', $rules));
        $this->assertTrue(in_array('max:10', $rules));
    }

    public function testAttributes()
    {
        $fieldType = $this->app->make(SlugFieldType::class);

        $attributes = $fieldType->attributes();

        $this->assertTrue(array_get($attributes, 'type') === 'text');
        $this->assertTrue(array_get($attributes, 'data-type') === $fieldType->config('type'));
        $this->assertTrue(array_get($attributes, 'data-slugify') === $fieldType->config('slugify'));
        $this->assertTrue(array_get($attributes, 'data-lowercase') === $fieldType->config('lowercase'));
        $this->assertTrue(array_get($attributes, 'data-always_slugify') === $fieldType->config('always_slugify'));
    }

    public function testOnEntryCreating()
    {
        $fieldType = $this->app->make(SlugFieldType::class)
            ->mergeConfig([
                'min' => 5,
                'max' => 10,
                'type' => '_',
                'slugify' => 'name',
            ])
            ->setField('slug')
            ->setRequired(true);

        $entry = new EntryModel([
            'name' => 'Foo Bar'
        ]);

        $fieldType->onEntryCreating($entry);

        $this->assertTrue($entry->slug == 'foo_bar');
    }
}
