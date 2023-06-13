<?php
use Alura\Mvc\Controller\VideoListController;


//declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';












if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {

     $controller = new VideoListController();
     $controller ->processaRequisicao();
     
} elseif ($_SERVER['PATH_INFO'] === '/cadastrar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
         require_once __DIR__ . '/../formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
         require_once __DIR__ . '/../cadastrar-video.php';
    }
}  elseif ($_SERVER['PATH_INFO'] === '/atualizar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
         require_once __DIR__ . '/../formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
         require_once __DIR__ . '/../atualizar-video.php';
    }
}elseif($_SERVER['PATH_INFO'] === '/deletar-video'){
     require_once __DIR__ . '/../deletar-video.php';
}



