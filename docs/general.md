# Slug Field Type

- [Introduction](#introduction)
- [Configuration](#configuration)
- [Output](#output)


<a name="introduction"></a>
## Introduction

`anomaly.field_type.slug`

The slug field type provides a an input that forces the value to a slug formatted string with a configurable separator.


<a name="configuration"></a>
## Configuration

**Example Definition:**

    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'type'    => '-',
                'slugify' => 'title'
            ]
        ]
    ];

### `type`

The slug type (separator character). Valid options are `'-'` or `'_'`. The default value is `'-'`.

### `slugify`

The field slug to slugify while typing. By default no field is slugified.


<a name="output"></a>
## Output

This field type returns the string slug by default.

### `humanized()`

Returns the slug converted to a humanized string. For example `my-awesome-slug` becomes `My Awesome Slug`. 

    // Twig usage
    {{ entry.example.humanized }}
    
    // API usage
    $entry->example->humanized;
