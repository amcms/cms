<?php
namespace App\Controllers;
use Amcms\Controllers\Controller;

class ExampleController extends Controller
{
    public function index($request, $responce, $arg)
    {
        // use twig view
        // return $this->twig->render($responce, 'index.twig', ['hello' => 'Hi, Twig View!']);

        // use php view
        return $this->php->render($responce, 'index.inc', ['hello' => 'Hi, Php View!']);
        
        // $this->modx->parseChunk('123', [1 => '11', 2 => '22'], '[+', '+]');
        // return '';
    }
}