<?php
/**
 * This file provides front-end routes
 * For db-based routes (resources in database must have own aliases) not needed to change
 */
$app->get('/ex', \App\Controllers\ExampleController::class . ':index');

$app->any('/[{arg:.*}]', 'Front:run');


/**
 * Multilang use (@todo)
 */
// $app->group('/' . $app->get('locale'), 'Front:run');