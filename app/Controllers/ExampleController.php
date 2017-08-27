<?php
namespace App\Controllers;
use Amcms\Controllers\Controller;

class ExampleController extends Controller
{
    public function index()
    {
        $db = $this->container->db;
        // print_r($db);
        return 'ExampleController';
    }
}