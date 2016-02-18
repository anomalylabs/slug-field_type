<?php namespace Anomaly\SlugFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;

/**
 * Class SlugFieldType
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
        'type' => '_'
    ];

    /**
     * Fired just before the entry is saved.
     *
     * @param EntryInterface $entry
     */
    public function onEntrySaving(EntryInterface $entry)
    {
        if (!$entry->{$this->getField()}
            && $this->isRequired()
            && $slugify = array_get($this->getConfig(), 'slugify')
        ) {
            $entry->{$this->getField()} = $entry->{$slugify};
        }
    }
}
