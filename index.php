<?php

// autoload
require __DIR__ . '/vendor/autoload.php';

// config
$envPrefix      = 'HEROKU_GO_'; // all vars start with this prefix for protection
$envFile        = __DIR__ . '/.env'; // optional
$fourOhFourFile = './404.html'; // shown when redirect can't be loaded

// load .env file, if available
if (is_file($envFile)) {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
}

// parse URL
$reqPath = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($reqPath !== '') {
    $envPath = $envPrefix . strtoupper($reqPath);
    $envVar  = getenv($envPath);

    if ($envVar !== false) {
        header('Location: ' . $envVar, 302);
        echo 'Redirecting...';
    } else {
        http_response_code(404);
        include $fourOhFourFile;
    }
} else {
    echo 'Heroku Go. Powered by PHP ' . phpversion() . ' and ' . $_SERVER['SERVER_SOFTWARE'];
}
