<?php

declare(strict_types = 1);

namespace App\Controllers;

class IndexController
{
    public function __invoke()
    {
        return view('index', template: 'guest');
    }
}
