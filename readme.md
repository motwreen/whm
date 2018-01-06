# WHMCPanel API Laravel Implementation 

## Installation

run this command in your project root folder


```
composer require "motwreen/whm":"@dev"
```

or add the following to your `composer.json`


```
{
    "require": {
    	"motwreen/whm":"@dev"
    }
}
```
add the following line to your providers array in `config/app.php` file

```
motwreen\whm\WhmServiceProvider::class,
```

and this to aliases 

```
'Whm' => motwreen\whm\WhmFacade::class,
```

then run this to publish config file

```
php artisan vendor:publish --tag=whm
```

## Usage 

### List Accounts 
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WHMCPanel;
class TestController extends Controller
{
    public function index()
    {
        WHMCPanel::listaccts(); \\list all accounts data in server
    }
}

```



### Suspend Accounts 
```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WHMCPanel;
class TestController extends Controller
{
    public function index()
    {
        WHMCPanel::suspendacct(['user'=>'User Name','reason'=>'Reason String']); \\ Suspend Account using it's  username
    }
}

```




## Available Methods

    1-listaccts
	2-listpkgs
	3-accountsummary
	4-createacct
	5-suspendacct
	6-unsuspendacct


## To Do
	
	1- make code ready for rest API methods
	2- Validate For Required Parameters

## Note: 
    I will provide more examples and will develope this package feel free to use,test and develop it .
