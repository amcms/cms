<?php
namespace App\Controllers;
use Amcms\Controllers\Controller;

class ExampleController extends Controller
{
    public function index($request, $responce, $arg)
    {
        // $db = $this->container->db;
        // print_r($db);
        // return 'ExampleController';
        // 
        // $v = view('twig');
        // print_r(app());
        // die();
        return $this->twig->render($responce, 'index.twig', ['hello' => 'Hi!']);
        
        // $this->modx->parseChunk('123', [1 => '11', 2 => '22'], '[+', '+]');
        // return '';
    }
}