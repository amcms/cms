<?php
define('APP_START', microtime(true));
session_start();
require __DIR__ . '/../vendor/autoload.php';

/**
 * Init app settings
 */
$settings = require __DIR__ . '/../config/app.php';

foreach (glob(__DIR__ . '/../config/*.php') as $file) {
    $pathAr = pathinfo($file);
    if ($pathAr['filename'] != 'app') {
        $settings[$pathAr['filename']] = require $file;
    }
}

/**
 * Create app object
 */
$settings['path'] = dirname(dirname(__FILE__));
$app = new \Amcms\Application(['settings' => $settings]);

/**
 * Define routes for admin panel
 * Site front-end routes usually must be last
 */
require __DIR__ . '/../routes/manager.php';
require __DIR__ . '/../routes/web.php';

/**
 * Register base controllers
 */
$container = $app->getContainer();

$container['Front'] = function($c) {
    return new \Amcms\Controllers\FrontController($c);
};

$container['Manager'] = function($c) {
    return new \Amcms\Controllers\ManagerController($c);
};

$container['Auth'] = function($c) {
    return new \Amcms\Controllers\AuthController($c);
};

/**
 * Сервисы ниже пока подключаются напрямую.
 * @todo Перенести подключение в ядро, с использованием wrappers
 */

// Обработчик ошибок
$app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware($app));

// Csrf
// $app->add(new \Slim\Csrf\Guard);

// PDO
$container['pdo'] = function ($c) {
    $db = $c['settings']['database'];
    $pdo = new PDO("mysql:host=" . $db['host'] . ";dbname=" . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// Eloquent ORM
$container['db'] = function ($c) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($c['settings']['database']['mysql']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

// Flash session messages
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

// Monolog
$container['logger'] = function($c) {
    $logger = new \Monolog\Logger('AmcLogger');
    $fileHandler = new \Monolog\Handler\StreamHandler('../storage/logs/app.log');
    $logger->pushHandler($fileHandler);
    return $logger;
};

// Php View
$container['php'] = function($c) {
    return new \Slim\Views\PhpRenderer('../resources/views/templates');
};

// MODX API
$container['modx'] = function($c) {
    return new \Amcms\Oldapi\Parser($c);
};

// Service GlobalPhs
$container['gphs'] = function($c) {
    return new \Amcms\Services\GlobalPhsService($c);
};

/**
 * Finish bootstrap
 */
return $app;