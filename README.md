# Tr String

<p align="center">
<a href="https://packagist.org/packages/X-Adam/tr-string" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Adam/tr-string" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Adam/tr-string" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Adam/tr-string" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Adam/tr-string" rel="nofollow"><img src="https://poser.pugx.org/X-Adam/tr-string/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Adam/tr-string" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Adam/tr-string" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Adam/tr-string/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Adam/tr-string/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/321776802" rel="nofollow"><img src="https://styleci.io/repos/321776802/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

It provides auxiliary functions to solve the problem of Turkish characters when converting text to lowercase and uppercase in php.

## Requirements

1. PHP >=5.4
2. PHP mbstring extension have to be loaded.

Other than that, this library has no requirements.

## Install

```bash
$ composer require x-adam/tr-string:"~2"
```

## Example Usage

```php
include "./vendor/autoload.php";

# Make a string uppercase
echo tr_strtoupper('Yalnızlık insanlara çok şey öğretirmiş. Ama sen gitme cahil kalayım.');
# Result: YALNIZLIK İNSANLARA ÇOK ŞEY ÖĞRETİRMİŞ. AMA SEN GİTME CAHİL KALAYIM.

# Make a string lowercase
echo tr_strtolower('YALNIZLIK İNSANLARA ÇOK ŞEY ÖĞRETİRMİŞ. AMA SEN GİTME CAHİL KALAYIM.');
# Result: yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Make a string's first character uppercase
echo tr_ucfirst('yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: Yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Make a string's first character lowercase
echo tr_lcfirst('Yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Uppercase the first character of each word in a string
echo tr_ucwords('yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: Yalnızlık İnsanlara Çok Şey Öğretirmiş. Ama Sen Gitme Cahil Kalayım.
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
