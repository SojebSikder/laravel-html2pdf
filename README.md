# laravel-html2pdf

This is a simple wrapper based on https://github.com/SojebSikder/extra-power

It helps to convert html to pdf

## Example:

Save pdf as file

```php
    $html = new Html2pdf();
    $html->setUrl('http://google.com');
    return $html->saveAs('sojeb.pdf');
```

Download pdf

```php
    $html = new Html2pdf();
    $html->setUrl('http://google.com');
    return $html->download();
```
