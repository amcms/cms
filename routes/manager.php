<?php
/**
 * This file provides admin panel routes
 */

$mw = function ($request, $response, $next) {
    $response->getBody()->write('BEFORE');
    $response = $next($request, $response);
    $response->getBody()->write('AFTER');

    return $response;
};

$app->group('/manager', function() {
    $this->get('', 'Manager:run')->setName('mgr_start');
    // $this->get('', function() {
    //     return 'Manager home';
    // })->setName('mgr_start');
})
->add($mw)
->add(function ($request, $response, $next) {
    $response->getBody()->write('It is now ');
    $response = $next($request, $response);
    $response->getBody()->write('. Enjoy!');

    return $response;
});