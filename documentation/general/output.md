# Output

This field type returns the value as stored in the database by default.

For non range this will be a single value. For range sliders the values are separated with a comma.

### Top

Returns the top value.

```
// Twig usage
{{ entry.example.top }}

// API usage
$entry->example->top();
```

### Bottom

Returns the bottom value.

```
// Twig usage
{{ entry.example.bottom }}

// API usage
$entry->example->bottom();
```

## Values

Return the values as an array.

```
// Twig usage
{{ entry.example.values }}

// API usage
$entry->example->values();
```
