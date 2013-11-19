# CvToPdfBundle [![Build Status](https://travis-ci.org/mhor/CvToPdfBundle.png?branch=master)](https://travis-ci.org/mhor/CvToPdfBundle) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/mhor/CvToPdfBundle/badges/quality-score.png?s=33710d8dac16e8fa279e787c255baa250d0134fc)](https://scrutinizer-ci.com/g/mhor/CvToPdfBundle/)

## Introduction

Easy way to generate beautiful CV on PDF format

## Installation

With [composer](http://packagist.org), add:
```json
{
    require: {
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
