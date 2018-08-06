FetchRss package
================

### Description

- [Installation](#installation)
- [Usage](#usage)
- [Testing](#testing)
- [Credits](#credits)


Installation
------------

Add the fetch-rss package to your `composer.json` file.

``` json
{
    "require": {
        "krzemson/fetch-rss"
    }
}
```

Or via the command line in the root of your Laravel installation.

``` bash
$ composer require krzemson/fetch-rss
```

Usage
-----

In CLI write:

``` bash

$ php src/console.php csv:simple URL PATH.csv
$ php src/console.php csv:extended URL PATH.csv

```


Testing
-------

``` bash
$ phpunit
```



Credits
-------

- [Jakub Krzemiński](https://github.com/krzemson)
