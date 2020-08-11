# Fortune

Fortune is a PHP Package for generating random fortunes similar to UNIX's fortune command.  In fact, it's database
of fortunes is built from fortune files from various systems.

## Installation

Install through Composer.

```js
"require": {
    "mdwheele/fortune": "dev-master"
}
```

## Usage

```php
<?php

require './vendor/autoload.php';

echo \Cvar1984\Fortune\Fortune::make();
```

## testing

```sh
composer test
```

## Attributions

* [Alan Silverstein](http://silgro.com) <ajs@frii.com>
    * Maintainer of the fortunes.txt data file used to provide random fortunes.
