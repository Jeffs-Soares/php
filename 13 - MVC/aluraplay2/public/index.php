<?php

//declare(strict_types=1);


if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
     require_once __DIR__ . '/../listagem-videos.php';
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



