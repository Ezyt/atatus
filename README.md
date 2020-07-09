Wrapper over Atatus 
===================

For license information check the [LICENSE](LICENSE)-file.

Requirements
------------

Works with atatus agent

Installation
------------

```
php composer.phar require --prefer-dist ezyt/atatus
```

or add

```json
"ezyt/atatus": "*"
```

to the require section of your composer.json.

Example
-------
```php
    $atatus = new \Ezyt\Atatus\Service();
    if ($atatus->isLoaded()) {
        $atatus->endTransaction();
        $atatus->beginTransaction();
        $atatus->setTransactionName('/requested_uri');
    }
    //...
    $atatus->endTransaction();
```
