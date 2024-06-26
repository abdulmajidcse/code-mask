# Code Mask
This is a simple PHP library that help you to manipulate your data.

## Installation
```
composer require abdulmajidcse/code-mask
```

# Usage
You'll see code example so that you can guess where you have to use it.

## Hide Your String
Sometimes, you need to show phone, email or any other text via hidden mask like 12****90. For this type of tasks, you can follow below code sample.

```
<?php

use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();
$phoneNumber = "1234567890";
$hiddenPhoneNumber = $codeMask->hiddenString($phoneNumber, 2, 2);

echo $hiddenPhoneNumber; // output: 12******90

?>
```

## Generate Serial
Suppose, you have to generate a serial or any other string based ID with a special format. To do this, you can follow below code sample.

```
<?php

use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();
$serial = $codeMask->generateSerial(123, 10, 0, '2701');

echo $serial; // output: 27010000000123

?>
```
