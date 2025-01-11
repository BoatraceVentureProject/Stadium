# Stadium in the Boatrace Venture Project

[![Build Status](https://github.com/BoatraceVentureProject/Stadium/workflows/tests/badge.svg)](https://github.com/BoatraceVentureProject/Stadium/actions?query=workflow%3Atests)
[![codecov](https://codecov.io/gh/BoatraceVentureProject/Stadium/graph/badge.svg?token=PB8560SDPF)](https://codecov.io/gh/BoatraceVentureProject/Stadium)
[![Latest Stable Version](https://poser.pugx.org/bvp/stadium/v/stable)](https://packagist.org/packages/bvp/stadium)
[![Latest Unstable Version](https://poser.pugx.org/bvp/stadium/v/unstable)](https://packagist.org/packages/bvp/stadium)
[![License](https://poser.pugx.org/bvp/stadium/license)](https://packagist.org/packages/bvp/stadium)

## Installation
```bash
composer require bvp/stadium
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Venture\Project\Stadium;

$collection = Stadium::byId(12);
var_dump($collection->get('id')); // int(12)
var_dump($collection->get('name')); // string(27) "ボートレース住之江"
var_dump($collection->get('short_name')); // string(9) "住之江"
var_dump($collection->get('uri')); // string(32) "https://www.boatrace-suminoe.jp/"

$collection = Stadium::byName('ボートレース住之江');
var_dump($collection->get('id')); // int(12)
var_dump($collection->get('name')); // string(27) "ボートレース住之江"
var_dump($collection->get('short_name')); // string(9) "住之江"
var_dump($collection->get('uri')); // string(32) "https://www.boatrace-suminoe.jp/"

$collection = Stadium::byShortName('住之江');
var_dump($collection->get('id')); // int(12)
var_dump($collection->get('name')); // string(27) "ボートレース住之江"
var_dump($collection->get('short_name')); // string(9) "住之江"
var_dump($collection->get('uri')); // string(32) "https://www.boatrace-suminoe.jp/"

$collection = Stadium::byUri('suminoe');
var_dump($collection->get('id')); // int(12)
var_dump($collection->get('name')); // string(27) "ボートレース住之江"
var_dump($collection->get('short_name')); // string(9) "住之江"
var_dump($collection->get('uri')); // string(32) "https://www.boatrace-suminoe.jp/"
```

## License
Stadium in the Boatrace Venture Project is open source software licensed under the [MIT license](LICENSE).
