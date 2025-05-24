<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
Use App\App;
use App\Models\User;
use App\Models\SignUp;
use PDO;

class Home
{

    public function index(): View
    {
        return View::make('index');
    }
}
