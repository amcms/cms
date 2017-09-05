<?php
namespace App\Controllers;
use Amcms\Controllers\Controller;

class ExampleController extends Controller
{
    public function index($request, $responce, $arg)
    {
        // use twig view
        return $this->twig->render($responce, 'index.twig', ['hello' => 'Hi, Twig View!']);
        // return $this->twig->render($responce, 'bulma.twig', ['hello' => 'Hi, Twig View!']);

        // use php view
        // return $this->php->render($responce, 'index.inc', ['hello' => 'Hi, Php View!']);
        
        // вывод чанка через эмулятор старого парсера
        // $out = $this->modx->parseChunk('@CODE: [+a+]', ['a' => '1']);
        // 
        // или если чанк в файле resources/views/chunks/chunk.tpl
        // $out = $this->modx->parseChunk('modx_chunk', ['a' => '1']);
        // 
        // либо так
        // $out = $this->modx->parseChunk('@CODE: {{modx_chunk}}', ['a' => '1']);
        // 
        // $response->getBody()->write($out);
        // return $response;
        
        // вывод нормального человека
        // return $this->container->get('quad')->render($response, 'modx_main.tpl', ['a' => 1]);
        // 
        // или
        // return $this->container->get('quad')->render($response, '@CODE [+a+]', ['a' => 1]);
        
        // return '';
    }
}