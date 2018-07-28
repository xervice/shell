Xervice: Shell
=====================

[![Build Status](https://travis-ci.org/xervice/shell.svg?branch=master)](https://travis-ci.org/xervice/shell)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/xervice/shell/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/xervice/shell/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/xervice/shell/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/xervice/shell/?branch=master)


Installation
-----------------
```
composer require xervice/shell
```


Using
-----------------
```php
$output = $shellFacade->runCommand(
    'command %s %s %s',
    $param1,
    $param2,
    $param3
);
```