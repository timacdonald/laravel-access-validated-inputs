# Validated Input Access Trait

A trait you can utilise in your Laravel form request objects to ensure the data you are accessing from the request has been validated.

Why? See my post: [Enforcing Valid Data Access From a Form Request Object](http://timacdonald.me/enforcing-valid-data-access-from-form-request-object/).

## Installation

You can install using [composer](https://getcomposer.org/) from [Packagist](https://packagist.org/packages/timacdonald/laravel-access-validated-inputs).

```
composer require timacdonald/laravel-access-validated-inputs
```

## Versioning

This package uses *Semantic Versioning*. You can find out more about what this is and why it matters by reading [the spec](http://semver.org) or for something more readable, check out [this post](https://laravel-news.com/building-apps-composer).

## Usage

First you need to `use` the trait in your form request object:

```php
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use TiMacDonald\Http\Request\AccessesValidatedInputs;

class PostFormRequest extends FormRequest
{
    use AccessesValidatedInputs;

    //
}
```

Then in your controller you may call:

```php
<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    public function store(PostFormRequest $form)
    {
        Post::create($form->validatedInputs());

        //
    }
}
```

## Contributing

Please feel free to suggest new ideas or send through pull requests to make this better. If you'd like to discuss the project, feel free to reach out on [Twitter](https://twitter.com/timacdonald87).

## What next?

I've been thinking this could be awesome if it actually removed all the unvalidated inputs automatically so that all the Request's native methods `only`, `intersect` etc return validated inputs.

## License

This package is under the MIT License. See [LICENSE](https://github.com/timacdonald/laravel-access-validated-inputs/blob/master/LICENSE.txt) file for details.