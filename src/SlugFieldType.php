<?php

namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Class SlugFieldType
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
    public $config = [
        'type'      => '_',
        'lowercase' => true,
    ];

    /**
     * Return the rules.
     *
     * @param array $rules
     * @return array
     */
    public function rules(array $rules = [])
    {
        if ($min = array_get($this->getConfig(), 'min')) {
            $rules[] = 'min:' . $min;
        }

        if ($max = array_get($this->getConfig(), 'max')) {
            $rules[] = 'max:' . $max;
        }

        return parent::rules($rules);
    }

    /**
     * Fired just before the entry is saved.
     *
     * @todo Needs test coverage.
     *
     * @param EntryInterface $entry
     */
    public function onEntryCreating(EntryInterface $entry)
    {
        if (
            is_null($entry->getAttribute($this->getField()))
            && $this->isRequired()
            && $slugify = $this->config('slugify')
        ) {
            $entry->setAttribute(
                $this->getField(),
                $this->getModifier()
                    ->modify(
                        $entry->getAttribute($slugify)
                    )
            );
        }
    }

    /**
     * Return merged attributes.
     *
     * @param array $attributes
     */
    public function attributes(array $attributes = [])
    {
        return [];
        return array_merge(parent::attributes(), [
            'type' => 'text',
            'data-type' => $this->config('type'),
            'data-slugify' => $this->config('slugify'),
            'data-lowercase' => $this->config('lowercase'),
            'data-always_slugify' => $this->config('always_slugify'),
        ], $attributes);
    }
}
