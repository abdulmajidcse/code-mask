# Code Mask
This is a simple PHP library that help you to manipulate your data.

## Installation
```
composer require abdulmajidcse/code-mask
```

# Usage

## Hide Your String
Sometimes, you need to show phone, email or any other text via hidden mask like 12****90. For this type of tasks, you can follow below code sample.

```
<?php

use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();
$phoneNumber = "1234567890";
$hiddenPhoneNumber = $codeMask->hiddenString($phoneNumber, 2, 2);

echo $hiddenPhoneNumber;

?>
```
