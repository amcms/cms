<?php
/**
 * See https://www.slimframework.com/docs/objects/application.html#slim-default-settings
 */
return [
    // Enable whoops
    'debug'         => true,

    // Support click to open editor
    'whoops.editor' => 'sublime',

    // Display call stack in orignal slim error when debug is off
    'displayErrorDetails' => true,

    // witch SQL engine must use
    'dbEngine' => 'sqlite', // 'mysql',

    'quad' => [
        'templates' => __DIR__ . '/../resources/views',
        'cache' => __DIR__ . '/../storage/cache',
    ],
];