A trait you can utilise in your Laravel form request objects to ensure the data you are accessing from the request has been validated.

Why? See my post: [Enforcing Valid Data Access From a Form Request Object](http://timacdonald.me/enforcing-valid-data-access-from-form-request-object/)

## Installation

```
composer require timacdonald/laravel-access-validated-inputs
```

[View on Packagist](https://packagist.org/packages/timacdonald/laravel-access-validated-inputs)

## Usage

In your form request object:

```php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TiMacDonald\Http\Request\AccessesValidatedInputs;

class MyFormRequest extends FormRequest
{
    use AccessesValidatedInputs;
  
    ...
}
