<?php

use App\App;
use App\Controllers\Home;
use App\Controllers\Invoice;
use App\Router;
use App\Controllers\Signs;
use App\Controllers\Directories;
use App\Config;
use App\Controllers\Profile;
//add vendor file to .gitignore
$path = __DIR__ . '/../vendor/autoload.php';
require_once $path;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

session_start();

define('VIEW_PATH',__DIR__.'/../views');

$router = new Router();
$router
    ->get('/',[Home::class, 'index'])
    ->post('/', [Home::class, 'index'])
    ->get('/signup', [Signs::class, 'signupView'])
    ->post('/signup', [Signs::class, 'signup'])
    ->get('/login', [Signs::class, 'loginView'])
    ->post('/login', [Signs::class, 'login'])
    ->get('/destinations',[Directories::class, 'destinations'])
    ->get('/about',[Directories::class, 'about'])
    ->post('/about',[Directories::class, 'about'])
    ->get('/credit',[Directories::class, 'creditView'])
    ->post('/credit',[Directories::class, 'credit'])
    ->get('/checkout',[Directories::class, 'checkout'])
    ->post('/checkout',[Directories::class, 'checkout'])
    ->get('/profile',[Profile::class, 'profile'])
    ->post('/profile',[Profile::class, 'profile'])
    ->get('/settings',[Profile::class, 'updateView'])
    ->post('/settings',[Profile::class, 'update'])
    ->post('/delete', [Profile::class, 'delete'])
    ->get('/logout-confirm', [Profile::class, 'logoutView'])
    ->get('/logout', [Profile::class, 'logout'])
    ->post('/delete-card', [Directories::class, 'deleteCredit'])
    ->get('/trip-details',[Directories::class, 'tripDetails'])
    ->post('/trip-details',[Directories::class, 'tripDetails']);

(new App($router, ['uri'=> $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();
