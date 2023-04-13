# twig-debug
[![Latest Stable Version](https://poser.pugx.org/delboy1978uk/twig-debug/v/stable)](https://packagist.org/packages/delboy1978uk/twig-debug) [![Total Downloads](https://poser.pugx.org/delboy1978uk/twig-debug/downloads)](https://packagist.org/packages/delboy1978uk/twig-debug) [![Latest Unstable Version](https://poser.pugx.org/delboy1978uk/twig-debug/v/unstable)](https://packagist.org/packages/delboy1978uk/twig-debug) [![License](https://poser.pugx.org/delboy1978uk/twig-debug/license)](https://packagist.org/packages/delboy1978uk/twig-debug)<br />
[![Build Status](https://travis-ci.org/delboy1978uk/twig-debug.png?branch=master)](https://travis-ci.org/delboy1978uk/twig-debug) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/?branch=master) <br />
Use XDebug to pause your code inside a Twig view.
## installation
```
composer require delboy1978uk/twig-debug
```
## configuration
Register the extension with Twig:
```php
<?php

use Del\Twig\DebugExtension;

/** @var $twig Twig_Environment */
$twig->addExtension(new DebugExtension());
```
Or, if you are using Symfony, add it to your services.yml like this:
```yaml
Del\Twig\DebugExtension:
    tags:
        - { name: twig.extension }
```
## usage
Within a Twig block, simply add:
```
{{ breakpoint() }}
```
