# lumen-pretty-json

A clean and simple way to have JSON output through Lumen's ResponseFactory class use JSON_PRETTY_PRINT by default. No requirement to pass a status and headers just to then set the JSON option for JSON_PRETTY_PRINT. Handy for APIs where all the returned content is JSON.

## Usage Examples

### Instantiating The ResponseFactory
```
<?php

namespace App\Http\Controllers;

use Stratedge\LumenPrettyJson\ResponseFactory;
use use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController {

	public function index()
	{
		$response = new ResponseFactory();
		
		return $response->json([
			"id" => 10,
			"first_name" => "Abraham",
			"last_name" => "Lincoln"
		]);
	}

```

### Injecting the ResponseFactory
```
<?php

namespace App\Http\Controllers;

use Stratedge\LumenPrettyJson\ResponseFactory;
use use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController {

	public function index(ResponseFactory $response)
	{	
		return $response->json([
			"id" => 10,
			"first_name" => "Abraham",
			"last_name" => "Lincoln"
		]);
	}
```

## Output
In browsers like Chrome, using the combination of JSON_PRETTY_PRINT and the application/json content type, output will display in a more readable fashion, without any additional markup:

```
{
	"id": 10,
	"first_name": "Abraham",
	"last_name": "Lincoln"
}
```