<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/constants.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$container = require CONFIG_PATH . '/container/container.php';
$middlewares = require CONFIG_PATH . '/middlewares.php';

AppFactory::setContainer($container);

$app = AppFactory::create();

$middlewares($app);

return $app;
