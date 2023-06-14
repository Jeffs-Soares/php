<?php

use Alura\Mvc\Controller\DeleteVideoController;
use Alura\Mvc\Controller\EditVideoController;
use Alura\Mvc\Controller\NewVideoController;
use Alura\Mvc\Controller\VideoFormController;
use Alura\Mvc\Controller\VideoListController;

return [
    'GET|/' => VideoListController::class,
    'GET|/cadastrar-video' => VideoFormController::class,
    'POST|/cadastrar-video' => NewVideoController::class,
    'GET|/atualizar-video' => VideoFormController::class,
    'POST|/atualizar-video' => EditVideoController::class,
    'GET|/deletar-video' => DeleteVideoController::class,
];


?>