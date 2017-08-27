<?php
/**
 * This file provides front-end routes
 * For db-based routes (resources in database must have own aliases) not needed to change
 */

$app->any('/', 'Front:run');
// $app->any('/', function() {
//     return 'Home';
// });

/**
 * Multilang use (@todo)
 */
// $app->group('/' . $app->get('locale'), 'FrontController:run');