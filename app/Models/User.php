<?php

namespace App\Models;

use Amcms\Models\Model as Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'hash',
    ];

    // public function __construct($container)
    // {
    //     $this->container = $container;
    // }

    // public function __get($service)
    // {
    //     if ($this->container->$service) {
    //         return $this->container->$service;
    //     }
    // }
}