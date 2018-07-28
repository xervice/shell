Xervice: Shell
=====================

[![Build Status](https://travis-ci.org/xervice/shell).svg?branch=master)](https://travis-ci.org/xervice/shell)


Installation
-----------------
```
composer require xervice/shell
```


Using
-----------------
```php
$output = $this->getFacade()->runCommand(
    'command %s %s %s',
    $param1,
    $param2,
    $param3
);
```