# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.slug',
        'config' => [
            'type'    => '-',
            'slugify' => 'title'
        ]
    ]
];
```

### `type`

The slug type (separator character). Valid options are `'-'` or `'_'`. The default value is `'-'`.

### `slugify`

The field slug to slugify while typing. By default no field is slugified. 
