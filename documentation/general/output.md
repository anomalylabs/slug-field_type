# Output

This field type returns the string slug by default.

### Humanized

Returns the slug converted to a humanized string. For example: `my-awesome-slug` becomes `My Awesome Slug`. 

```
// Twig Usage
{{ entry.example.humanized }}

// API usage
$entry->example->humanized;
```
