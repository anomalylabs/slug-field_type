# Slug Field Type

*anomaly.field_type.slug*

#### A slug formatted string field type.

The slug field type provides a an HTML text input that forces input to a slug formatted string with a configurable separator.

## Configuration

- `separator` - any character

The default separator is "-".

#### Example

	config => [
		'separator' => '_'
	]
