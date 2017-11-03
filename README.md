# twig-debug
[![Build Status](https://travis-ci.org/delboy1978uk/twig-debug.png?branch=master)](https://travis-ci.org/delboy1978uk/twig-debug) [![Code Coverage](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/delboy1978uk/twig-debug/?branch=master) <br />
Use XDebug to pause your code inside a Twig view.
## Usage
Within a Twig block, simply add:
```
{{ breakpoint"() }}
```
