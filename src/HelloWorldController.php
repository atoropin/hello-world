<?php

namespace Atoropin\HelloWorld;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    public function sayHello()
    {
        return response('Hello World', 200)
            ->header('Content-Type', 'text/plain');
    }
}
