<?php
/**
 * This file provides front-end routes
 * For db-based routes (resources in database must have own aliases) not needed to change
 */

/**
 * Auth routes
 */
$app->get('/signup', 'Auth:getSignup')->setName('signup.get');
$app->post('/signup', 'Auth:postSignup')->setName('signup.post');

$app->get('/ex', \App\Controllers\ExampleController::class . ':index');

// DEV - REMOVE AFTER TEST
$app->get('/srv', function ($request, $responce, $args) {
    $this->gphs->set('site_name', 'SLIM3');
    $this->twig->render($responce, 'index.twig');
});

$app->any('/[{arg:.*}]', 'Front:run');


/**
 * Multilang use (@todo)
 */
// $app->group('/' . $app->get('locale'), 'Front:run');