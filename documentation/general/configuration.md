# Configuration

**Example Definition:**

```
protected $fields = [
    'example' => [
        'type'   => 'anomaly.field_type.text',
        'config' => [
            'rows'          => 5,
            'min'           => 10,
            'max'           => 100,
            'default_value' => 'Ryan Thompson'
        ]
    ]
];
```

### `rows`

The row height of the textarea input. Any valid integer greater than 3 can be used. The default value is `6`.

### `min`

The minimum input length allowed. By default no minimum is enforced.

### `max`

The maximum input length allowed. By default no maximum is enforced.

### `default_value`

The default input value. The default value is `null`.
