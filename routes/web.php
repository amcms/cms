<?php
/**
 * This file provides front-end routes
 * For db-based routes (resources in database must have own aliases) not needed to change
 */

/**
 * Auth routes
 */
$app->get('/signup', 'Auth:getSignup')->setName('signup');
$app->post('/signup', 'Auth:postSignup');

$app->get('/ex', \App\Controllers\ExampleController::class . ':index');

$app->any('/[{arg:.*}]', 'Front:run');


/**
 * Multilang use (@todo)
 */
// $app->group('/' . $app->get('locale'), 'Front:run');