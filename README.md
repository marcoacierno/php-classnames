# php-classnames

A simple utility to generate a list of class names based on some condition(s). It's used to avoid those ugly php tags
inside the classname and stuff like that.

## How to install

## How to use

The function `classnames` generates a list of CSS classes:

```php
$classes = classnames(
    'dialog',
    array(
        'open' => $is_open,
    )
);
```

This will generate the following string: `class1 open` if $is_open is true otherwise, if false, only `class1`.

You can pass as much as arguments you like to `classnames`. All the strings will be treated as fixed classes and will always
be added, array of classes will be added only if their value is true (if the value is a function, it will be called and
the result will be used to evalute if the class should be included or not).

### Examples

```php
$classes = classnames('dialog', array('open' => function() { return $is_open; }));
```

Will generate `dialog` if the function of 'open' returns false, otherwise `dialog open`.

### TODO

- [ ] Handle nested arrays (?)
- ?
