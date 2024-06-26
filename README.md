# Code Mask
This is a simple PHP library that help you to manipulate your data.

## Installation
```
composer require abdulmajidcse/code-mask
```

# Usage
You'll see code example so that you can guess where you have to use it.

## Hide String
Sometimes, you need to hide phone, email or any other text with your special letter like 12****90. For this type of tasks, you can follow below code sample.

```
use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();
$phoneNumber = "1234567890";
$hidePhoneNumber = $codeMask->hideString($phoneNumber, 2, 2);

echo $hidePhoneNumber; // output: 12******90
```

## Generate ID
Suppose, you have to generate an ID or any other string based ID with a special format. To do this, you can follow below code sample.

```
use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();
$id = $codeMask->generateId(123, 10, 0, '2701');

echo $id; // output: 27010000000123
```

## Money Format
Suppose, you have a number that need to format with your country money format. To do this, you can follow below code sample.

```
use Abdulmajidcse\CodeMask\CodeMask;

$codeMask = new CodeMask();

$moneyWithLeftCurrency = $codeMask->moneyFormat(100000000.556, 'TK');
echo $moneyWithLeftCurrency; // output: TK 10,00,00,000.56

$moneyWithRightCurrency = $codeMask->moneyFormat(100000000.556, '', 'BDT');
echo $moneyWithRightCurrency; // output: 10,00,00,000.56 BDT
```
