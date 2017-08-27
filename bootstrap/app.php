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
    if ($pathAr['basename'] != 'app') {
        $settings[$pathAr['basename']] = require $file;
    }
}


/**
 * Create app object
 */
$app = new \Amcms\Application($settings);

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
$container['Front'] = function($container) {
    return new \Amcms\Controllers\FrontController();
};
$container['Manager'] = function($container) {
    return new \Amcms\Controllers\ManagerController();
};

/**
 * Сервисы ниже пока подключаются напрямую.
 * @todo Перенести подключение в ядро, с использованием wrappers
 */

// Обработчик ошибок
$app->add(new \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware($app));

// Eloquent ORM
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['database']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};



/**
 * Finish bootstrap
 */
return $app;