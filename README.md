# CvToPdfBundle [![Build Status](https://travis-ci.org/mhor/MhorCvToPdfBundle.png?branch=master)](https://travis-ci.org/mhor/MhorCvToPdfBundle) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mhor/MhorCvToPdfBundle/badges/quality-score.png?s=69790234da671d2b3e388ba41683bb614a5208aa)](https://scrutinizer-ci.com/g/mhor/MhorCvToPdfBundle/)

## Introduction

Easy way to generate beautiful CV on PDF format

## Installation

With [composer](http://packagist.org), add:
```json
{
    "require" : {
        "mhor/cv-to-pdf-bundle": "dev-master"
    }
}
```
**You might be change minimum-stability of your composer.json file**

Then enable it in your kernel:
```php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        //...
        new Mhor\CvToPdfBundle\MhorCvToPdfBundle(),
        //...
```

## How to use
Not yet written

##LICENSE
See `LICENSE` for more informations
