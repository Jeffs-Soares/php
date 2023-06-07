<?php

declare(strict_types=1);


if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/') {
    require_once 'listagem-videos.php';
} elseif ($_SERVER['PATH_INFO'] === '/cadastrar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'cadastrar-video.php';
    }
}  elseif ($_SERVER['PATH_INFO'] === '/atualizar-video') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'atualizar-video.php';
    }
}elseif($_SERVER['PATH_INFO'] === '/deletar-video'){
    require_once './deletar-video.php';
}



